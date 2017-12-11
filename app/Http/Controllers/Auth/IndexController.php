<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index(){
        return view('member_manage.pages.index',['page_title' => '会员中心' , 'base_scss' => url('css/scss/member_manage/pages/index/index.css')]);
    }
}
