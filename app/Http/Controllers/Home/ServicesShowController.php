<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServicesShowController extends Controller
{
    public function index(){
        return view('home.pages.pt_services_show.index',['page_title' => '首页']);
    }
}
