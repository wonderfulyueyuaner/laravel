<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * 后台主页面
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        return view('admin.index', ['title'=>'YY.admin v1.1']);
    }
   
}
