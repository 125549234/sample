<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UploadController extends Controller
{
    //
    public function upw(Request $request){
        return view();
    }
    /**
     * 显示创建博客文章的表单。
     *
     *
     */
    public function create()
    {
        return view('static_pages/upload');
    }
}
