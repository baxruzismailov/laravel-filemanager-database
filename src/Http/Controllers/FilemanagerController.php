<?php
namespace Baxruzismailov\Filemanager\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FilemanagerController extends Controller
{

    public function index()
    {
        return view('filemanager::layouts.index');
    }




}
