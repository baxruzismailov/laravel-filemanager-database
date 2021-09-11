<?php

namespace Baxruzismailov\Filemanager\Http\Controllers;

use App\Http\Controllers\Controller;
use Baxruzismailov\Filemanager\Models\FilemanagerFile;
use Baxruzismailov\Filemanager\Models\FilemanagerFolder;
use Baxruzismailov\Filemanager\Services\FolderService;
use Baxruzismailov\Filemanager\Upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class FilemanagerController extends Controller
{

    public $appearance;
    public $sortField;
    public $orderBy;
    public $type;

    public function __construct(Request $request)
    {
        //Type
        $this->type = request('type');

        //Sort Field
        if (isset($_COOKIE['filemanager_bi_sort_field'])) {
            if ($_COOKIE['filemanager_bi_sort_field'] == 1) {
                $this->sortField = 'name';
            } else {
                $this->sortField = 'created_at';
            }
        } else {
            $this->sortField = 'created_at';
        }

        //Order By
        if (isset($_COOKIE['filemanager_bi_order_by'])) {
            if ($_COOKIE['filemanager_bi_order_by'] == 1) {
                $this->orderBy = 'ASC';
            } else {
                $this->orderBy = 'DESC';
            }
        } else {
            $this->orderBy = 'DESC';
        }


    }

    public function index(Request $request)
    {
        //FOLDERS
        $folders = FilemanagerFolder::with('files')
            ->withCount('files')
            ->where('parent', 0)
            ->orderBy($this->sortField, $this->orderBy)
            ->limit(config('file-manager-bi.folders_limit'))
            ->get();


//        $folders = FilemanagerFolder::with(['files' => function($query) use($request){
//
//            //type image, media (video,audio).
//            if (!$request->type == null) {
//
//                if ($request->type == 'image') {
//                    $query->where('type', $request->type);
//                } elseif ($request->type == 'media') {
//                    $query->where('type', 'video');
//                    $query->orWhere('type', 'audio');
//                }
//
//            }
//
//            $query->limit(config('file-manager-bi.files_limit'));
//        }])
//            ->withCount('files')
//            ->where('parent', 0)
//            ->orderBy($this->sortField, $this->orderBy)
//            ->limit(config('file-manager-bi.folders_limit'))
//            ->get();




        //FILES
        $files = FilemanagerFile::where(function ($query) use ($request) {
            //type image, media (video,audio).
            if (!$request->type == null) {

                if ($request->type == 'image') {
                    $query->where('type', $request->type);
                } elseif ($request->type == 'media') {
                    $query->where('type', 'video');
                    $query->orWhere('type', 'audio');
                }

            }
        })
            ->where('folder_id',0)
            ->orderBy($this->sortField, $this->orderBy)
            ->limit(config('file-manager-bi.files_limit'))
            ->get();



        $foldersCount = $folders->count();
        $filesCount = $files->count();


        return view('filemanager::main.index', compact(
            'folders',
            'foldersCount',
            'files',
            'filesCount'
        ));
    }

    public function home(Request $request)
    {
        //FOLDERS
        $folders = FilemanagerFolder::with('files')
            ->withCount('files')
            ->where('parent', 0)
            ->orderBy($this->sortField, $this->orderBy)
            ->limit(config('file-manager-bi.folders_limit'))
            ->get();


        //FILES
        $files = FilemanagerFile::where(function ($query) use ($request) {
            //type image, media (video,audio).
            if (!$request->type == null) {

                if ($request->type == 'image') {
                    $query->where('type', $request->type);
                } elseif ($request->type == 'media') {
                    $query->where('type', 'video');
                    $query->orWhere('type', 'audio');
                }

            }
        })
            ->where('folder_id',0)
            ->orderBy($this->sortField, $this->orderBy)
            ->limit(config('file-manager-bi.files_limit'))
            ->get();


        $foldersCount = $folders->count();
        $filesCount = $files->count();

        return response()->json([
            'success' => true,
            'folders' => $folders,
            'foldersCount' => $foldersCount,
            'files' => $files,
            'filesCount' => $filesCount,
        ],200);

    }

    public function uploadFile(Request $request)
    {


//            $data = $request->file('file_name')->getClientOriginalName();


        $image = $request->file('file_name');
        $destinationPath = "public";
//            $imageExtension = $image->getClientOriginalExtension();
        $imageName = $image->getClientOriginalName();

        $data = [];
        //ERROR IF
        if ($image->getClientMimeType() === 'image/png') {
            $data = [
                'error' => true,
                'file_name' => $imageName,
                'file_url' => $destinationPath . $imageName,
                'msg' => 'Zip dosyası yükleyemezsiniz!',
            ];
        } //ERROR IF
        else {
            //SUCCES IF
            $data = [
                'success' => true,
                'file_name' => $imageName,
                'file_url' => $destinationPath . $imageName,
                'msg' => 'Dosya başarıyla yüklendi',
            ];
            $path = $request->file('file_name')->storeAs($destinationPath, $imageName);
        } //SUCCES IF


        return response()->json(['data' => $data], 200);
    }

    public function localStorage(Request $request)
    {

        $folderID = $request->folderID;

        //FOLDERS
        $folders = FilemanagerFolder::where('id', $folderID)
            ->first();
        if (!$folders) {
            return response()->json(['error' => true], 200);
        }


    }

    public function createNewFolder(Request $request)
    {

        $folderName = $request->folderName;
        $folderID = $request->folderID;


        //FOLDERS
        $folders = FilemanagerFolder::where('id', $folderID)
            ->first();
        if (!$folders && $folderID != 0) {
            return response()->json(['error' => true], 200);
        } else {

            if (empty($folderName)) {
                return response()->json(['error' => true], 200);
            } else {
                $newFoldername = FolderService::uniquName($folderName, $folderID);
                $folder = FilemanagerFolder::create([
                    'name' => $newFoldername,
                    'parent' => $folderID
                ]);

                $lastFolder = [
                    'id' => $folder->id,
                    'name' => $folder->name,
                    'created_at' => \Illuminate\Support\Carbon::parse($folder->created_at)->format('Y.m.d H:i'),
                    'folder_img' => asset('vendor/file-manager-bi/images/folder.svg'),
                ];


                return response()->json(['success' => true, 'folder' => $lastFolder], 200);
            }


        }


    }

    public function renameFolderName(Request $request)
    {
        $folderID = $request->folderID;
        $folderName = $request->folderName;
        $currentFolder = $request->currentFolder;

        $folder = FilemanagerFolder::where('id',$folderID)
            ->where('parent',$currentFolder)
            ->first();

        if(empty($folderName)){
            return response()->json([
                'error' => true,
                'msg' => trans('fm-translations::filemanager-bi.empty_folder_name')
            ], 200);
        }else{

            if($folder){

                if($folder->name == $folderName){

                    FilemanagerFolder::where('id',$folderID)
                        ->update([
                            'name' => $folderName
                        ]);

                    return response()->json(['success' => true,'fodlerName' => $folderName], 200);

                }else{


                    $folderExists = FilemanagerFolder::where('parent',$currentFolder)
                        ->where('name',$folderName)
                        ->first();

                    if($folderExists){
                        return response()->json([
                            'error' => true,
                            'msg' => trans('fm-translations::filemanager-bi.exists_folder_name')
                        ], 200);
                    }else{
                        FilemanagerFolder::where('id',$folderID)
                            ->update([
                                'name' => $folderName
                            ]);

                        return response()->json(['success' => true,'fodlerName' => $folderName], 200);
                    }



                }


            }else{

                return response()->json([
                    'error' => true,
                    'msg' => trans('fm-translations::filemanager-bi.not_exists_folder')
                ], 200);

            }

        }// ELSE Empty Folder Name






    }

}
