<?php
namespace Baxruzismailov\Filemanager\Http\Controllers;

use App\Http\Controllers\Controller;
use Baxruzismailov\Filemanager\Models\FilemanagerCategory;
use Baxruzismailov\Filemanager\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FilemanagerController extends Controller
{

    public function index()
    {
        return view('filemanager::main.index');
    }


    public function sortable(Request $request)
    {
        $data = json_decode($request->data);

        $readbleArray = $this->parseJsonArray($data);

        $i = 0;
        foreach ($readbleArray as $row) {
            $i++;

            FilemanagerCategory::where('id', $row['id'])->update([
                'parent' => $row['parent'],
                'sort' => $i,
            ]);


        }

        return response()->json($i);

    }


    public function parseJsonArray($jsonArray, $parentID = 0)
    {

        $return = array();
        foreach ($jsonArray as $subArray) {
            $returnSubSubArray = array();
            if (isset($subArray->children)) {
                $returnSubSubArray = $this->parseJsonArray($subArray->children, $subArray->id);
            }

            $return[] = array('id' => $subArray->id, 'parent' => $parentID);
            $return = array_merge($return, $returnSubSubArray);
        }
        return $return;
    }


}
