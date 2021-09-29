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

        return view('filemanager::main.index');
    }

    public function getFoldersAndFiles(Request $request)
    {

        $folderID = $request->folderID;
        $urlType = $request->urlType;
        $filterType = $request->filterType;

        //FOLDERS
        $folders = FilemanagerFolder::with('files')
            ->withCount('files')
            ->where('parent', $folderID)
            ->orderBy($this->sortField, $this->orderBy)
            ->limit(config('file-manager-bi.folders_limit'))
            ->get();



        //FILES
        $files = FilemanagerFile::where(function ($query) use ($urlType,$filterType) {
            //type image, media (video,audio).
            if (!$urlType == null) {

                if ($urlType == 'image') {
                    $query->where('type', 'image');
                } elseif ($urlType == 'media') {
                    $query->where('type', 'video');
                    $query->orWhere('type', 'audio');
                }

            }else{
                if(!$filterType == null){
                    $query->where('type', $filterType);
                }
            }
        })
            ->where('folder_id', $folderID)
            ->orderBy($this->sortField, $this->orderBy)
            ->limit(config('file-manager-bi.files_limit'))
            ->get();


        $folderCheck = FilemanagerFolder::where('id',$folderID)
            ->select('parent','name')
            ->first();

        $folderName = '';
        $folderParentID = '';
        if($folderCheck){
            $folderName = $folderCheck->name;
            $folderParentID = $folderCheck->parent;
        }else{
            $folderName ='';
            $folderParentID ='';
        }


        $foldersCount = $folders->count();
        $filesCount = $files->count();

        $data = [
            'folders' => $folders,
            'files' => $files,
            'folder_name' => $folderName,
            'folter_parent_ID' => $folderParentID,
            'folders_and_files' => sprintf(trans('fm-translations::filemanager-bi.information'),$foldersCount,$filesCount)
        ];


//        return view('filemanager::main.index', compact(
//            'folders',
//            'foldersCount',
//            'files',
//            'filesCount'
//        ));

        return response()->json([
            'success' => true,
            'data' => $data,
        ]);

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
            ->where('folder_id', 0)
            ->orderBy($this->sortField, $this->orderBy)
            ->limit(config('file-manager-bi.files_limit'))
            ->get();


        //FOLDERS COUNT
        $foldersCount = FilemanagerFolder::with('files')
            ->where('parent', 0)
            ->select('id')
            ->count();


        //FILES COUNT
        $filesCount = FilemanagerFile::where(function ($query) use ($request) {
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
            ->select('id')
            ->where('folder_id', 0)
            ->count();


        return response()->json([
            'success' => true,
            'folders' => $folders,
            'foldersCount' => $foldersCount,
            'files' => $files,
            'filesCount' => $filesCount,
        ], 200);

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

    public function setCurrentFolderLocalStorage(Request $request)
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

    public function updateFolderName(Request $request)
    {
        $folderID = $request->folderID;
        $folderName = $request->folderName;
        $currentFolder = $request->currentFolder;

        $folder = FilemanagerFolder::where('id', $folderID)
            ->where('parent', $currentFolder)
            ->first();

        if (empty($folderName)) {
            return response()->json([
                'error' => true,
                'msg' => trans('fm-translations::filemanager-bi.empty_folder_name')
            ], 200);
        } else {

            if ($folder) {

                if ($folder->name == $folderName) {

                    FilemanagerFolder::where('id', $folderID)
                        ->update([
                            'name' => $folderName
                        ]);

                    return response()->json(['success' => true, 'fodlerName' => $folderName], 200);

                } else {


                    $folderExists = FilemanagerFolder::where('parent', $currentFolder)
                        ->where('name', $folderName)
                        ->first();

                    if ($folderExists) {
                        return response()->json([
                            'error' => true,
                            'msg' => trans('fm-translations::filemanager-bi.exists_folder_name')
                        ], 200);
                    } else {
                        FilemanagerFolder::where('id', $folderID)
                            ->update([
                                'name' => $folderName
                            ]);

                        return response()->json(['success' => true, 'fodlerName' => $folderName], 200);
                    }


                }


            } else {

                return response()->json([
                    'error' => true,
                    'msg' => trans('fm-translations::filemanager-bi.not_exists_folder')
                ], 200);

            }

        }// ELSE Empty Folder Name


    }

    public function cutFolder(Request $request)
    {
        $type = $request->type;
        $folderID = $request->folderID;
        $cut_folder_id = $request->cut_folder_id;
        $current_folder = $request->current_folder;

        $folder = FilemanagerFolder::where('id', $folderID)
            ->first();


        $arrMsg = [];
        $successFolder = [];
        $nextFolderID = [];
        $nextFolderName = [];


        if($folderID != $current_folder){
            if ($folder || $folderID == 0) {


                foreach (json_decode($cut_folder_id) as $cutFolderID):
                    //IF EXISTS CUT FOLDER
                    $cutFolder = FilemanagerFolder::where('id', $cutFolderID)
                        ->first();
                    if ($cutFolder) {


                        $parentFolder = FilemanagerFolder::where('parent', $folderID)
                            ->where('name', $cutFolder->name)
                            ->first();



                        //CHECK DESTINATION FOLDER ID
                        if($folderID == 0){
                            $destinationFolderCheck = true;
                            $destinationFolderID = 0;
                            //If this folder == cut Folder ID
                        }elseif ($folder->id != $cutFolderID){
                            $destinationFolderCheck = true;
                            $destinationFolderID = $folder->id;
                        }else{
                            $destinationFolderCheck = false;
                        }

                        if ($destinationFolderCheck) {

                            //If the folder is not its own subfolder
                            $subFolderCheck = \Baxruzismailov\Filemanager\Services\FolderService::getParentFolderID4($cutFolderID);
                            if (!in_array($destinationFolderID,$subFolderCheck)) {



                                //AUTO RENAME
                                if ($type == 1) {

                                    if ($parentFolder) {

                                        if (strtolower($cutFolder->name) == strtolower($parentFolder->name)) {

                                            FilemanagerFolder::where('id', $cutFolderID)
                                                ->update([
                                                    'name' => FolderService::uniquName($cutFolder->name, $folderID),
                                                    'parent' => $folderID
                                                ]);


                                        } else {

                                            FilemanagerFolder::where('id', $cutFolderID)
                                                ->update([
                                                    'name' => $cutFolder->name,
                                                    'parent' => $folderID
                                                ]);


                                        }

                                    } else {
                                        FilemanagerFolder::where('id', $cutFolderID)
                                            ->update([
                                                'name' => $cutFolder->name,
                                                'parent' => $folderID
                                            ]);
                                    }
                                    array_push($successFolder, $cutFolder->id);
                                }//IF TYPE 1 AUTO RENAME

                                //NEXT FOLDER
                                if ($type == 2) {

                                    if ($parentFolder) {

                                        if (strtolower($cutFolder->name) == strtolower($parentFolder->name)) {

                                            array_push($nextFolderID, $cutFolder->id);
                                            array_push($nextFolderName, $cutFolder->name);

                                            $arrMsg['error'] = true;
                                            $arrMsg['next_folder_error'] = true;
                                            $arrMsg['next_folder_name'] = $nextFolderName;
                                            $arrMsg['next_folder_id'] = $nextFolderID;
                                            $arrMsg['error_text'] = sprintf(trans('fm-translations::filemanager-bi.the_folder_sub_folder'), $cutFolder->name);

                                        } else {

                                            FilemanagerFolder::where('id', $cutFolderID)
                                                ->update([
                                                    'name' => $cutFolder->name,
                                                    'parent' => $folderID
                                                ]);


                                        }

                                    } else {
                                        FilemanagerFolder::where('id', $cutFolderID)
                                            ->update([
                                                'name' => $cutFolder->name,
                                                'parent' => $folderID
                                            ]);
                                    }

                                    array_push($successFolder, $cutFolder->id);

                                }//IF TYPE 2 NEXT FOLDER

                            } else {
                                //If the folder is not its own subfolder error true
                                $arrMsg['error'] = true;
                                $arrMsg['sub_folder_error'] = true;
                                $arrMsg['error_cut_folder_id'] = $cutFolder->id;
                                $arrMsg['error_text'] = sprintf(trans('fm-translations::filemanager-bi.the_folder_sub_folder'), $cutFolder->name);
                            }


                        } else {
                            //If this folder == cut Folder ID error true
                            $arrMsg['error'] = true;
                            $arrMsg['sub_folder_error'] = true;
                            $arrMsg['error_cut_folder_id'] = $cutFolder->id;
                            $arrMsg['error_text'] = sprintf(trans('fm-translations::filemanager-bi.the_same_folder'), $cutFolder->name);


                        }


                        //SUCCESS
                        $arrMsg['success_cut_folder'] = $successFolder;

                        //FOLDERS COUNT
                        $foldersCount = FilemanagerFolder::with('files')
                            ->where('parent', $current_folder)
                            ->select('id')
                            ->count();


                        //FILES COUNT
                        $filesCount = FilemanagerFile::where(function ($query) use ($request) {
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
                            ->select('id')
                            ->where('folder_id', $current_folder)
                            ->count();


                        $arrMsg['folders_and_files_count'] = sprintf(trans('fm-translations::filemanager-bi.information'), $foldersCount, $filesCount);
                        $arrMsg['exists_cut_folder'] = true;
                    } else {

                        $arrMsg['error'] = true;
                        $arrMsg['not_cut_folder'] = true;
                        $arrMsg['error_text'] = trans('fm-translations::filemanager-bi.not_exists_folder');
                    }
                endforeach;


            } else {
                $arrMsg['error'] = true;
                $arrMsg['not_exists_folder'] = true;
                $arrMsg['error_text'] = trans('fm-translations::filemanager-bi.not_exists_folder');

            }//ELSE ERROR
        }else{
            $arrMsg['error'] = true;
            $arrMsg['sub_folder_error'] = true;
            $arrMsg['error_cut_folder_id'] = $folderID;
            $arrMsg['error_text'] = sprintf(trans('fm-translations::filemanager-bi.the_same_folder'), $folder->name);
        }




        if(isset($arrMsg['next_folder_error'])){
            $result  = array_diff($successFolder,$nextFolderID);
            $arrMsg['success_cut_folder'] = array_values($result);
        }

        return response()->json([
            'success' => true,
            'msg' => $arrMsg
        ], 200);


    }

    public function getFolders(Request $request)
    {
        return response()->json(['success' => true, 'folders' => view('filemanager::main.folders')->render()]);
    }

}
