@extends('home.pages.common.base')
@section('content')
    <div class="member_form_box pull-right">
        <h3>新用户注册</h3>
        <div class="member_form_box_input_box">
            <div class="member_form_box_group">
                <div class="member_form_box_group_span">
                    <span>手机号</span>
                </div>
                <input type="text"  placeholder="请填写手机号">
            </div>

            <div class="member_form_box_group">
                <div class="member_form_box_group_span">
                    <span>动态码</span>
                </div>
                <input class="get_verification_code_input" type="text"  placeholder="请输入动态码">
                <button class="button-disabled">获取动态码</button>
            </div>

            <div class="member_form_box_group">
                <div class="member_form_box_group_span">
                    <span>密码</span>
                </div>
                <input type="password"  placeholder="请输入密码">
            </div>

            <div class="member_form_box_group">
                <div class="member_form_box_radio">
                    <label>
                        <input type="radio" name="optionsRadios"value="1">
                        <span>我是需求客户</span>
                    </label>
                    <label>
                        <input type="radio" name="optionsRadios" value="option2" checked>
                        <span>我是服务商</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="member_form_box_submit">
            <div class="member_form_box_submit_box">
                <div class="member_form_box_submit_button">
                    <span>同意协议并注册</span>
                </div>
            </div>
            <div class="member_form_box_submit_box">
                <div class="member_form_box_submit_agreement pull-left">
                    <a href="#"><span>《企众平台协议》</span></a>
                </div>
                <div class="member_form_box_will_login pull-right">
                    <span>已经有账号<a href="{{route('member_login')}}">登陆</a></span>
                </div>
            </div>
        </div>
    </div>
@endsection