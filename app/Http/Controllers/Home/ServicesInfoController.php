<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServicesInfoController extends Controller
{
    public function index(){
        return view('home.pages.pt_services_info.index',['page_title' => '服务详细信息']);
    }
}
