@extends('manage_demand_role.layout.base')
@section('content')
    <div class="index_warp pull-left">
        <div class="manage_demand_user_accout_head_comm_left">
            <div class="manage_demand_user_accout_box clearfix">
                <div class="manage_demand_user_accout_head_portrait pull-left">
                    <img class="img-circle center-block" src="{{url('images/icon/logo_icon.png')}}">
                </div>
                <div class="manage_demand_user_accout_head_right_top pull-left">
                    <div class="manage_demand_user_accout_nickname ">
                        <span>昵称XXXXXX</span>
                    </div>
                    <div class="manage_demand_user_accout_head_right_ul">
                        <ul class="list-inline">
                            <li><a href="#"><span>我的狗币</span></a></li>
                            <li><a href="#"><span>我的收藏</span></a></li>
                        </ul>
                    </div>
                </div>

                <div class="manage_demand_user_accout_head_right_buttom pull-left">
                    <ul class="list-inline">
                        <li><a href="#"><span>交易中订单</span></a></li>
                        <li><a href="#"><span>待付款订单</span></a></li>
                        <li><a href="#"><span>待评价订单</span></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="manage_demand_user_accout_head_comm_right">
            <div class="manage_demand_user_accout_head_comm_tit">
                <a href="#" ><span>我的狗币：</span><i>200</i>币</a>
            </div>
            <div class="manage_demand_user_accout_head_comm_tit">
                <botton class="btn">我要充值</botton>
            </div>
        </div>
    </div>
@endsection