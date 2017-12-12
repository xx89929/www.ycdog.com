<?php

namespace App\Http\Controllers\ManageDemandRole;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index(){
        return view('manage_demand_role.pages.index',['page_title' => '会员中心']);
    }
}
