<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommonController extends Controller
{

    public function member_register(){
        return view('home.pages.common.partials.register',['page_title' => '会员注册']);
    }


    public function member_login(){
        return view('home.pages.common.partials.login',['page_title' => '会员登陆']);
    }
}
