@extends('home.pages.common.base')
@section('content')
    <div class="member_form_box pull-right">
        <div class="member_login_form_tags">
            <div class="member_login_form_tags_item pt_active  text-center">
                <span>账号密码登陆</span>
            </div>
            <div class="member_login_form_tags_item  text-center">
                <span>手机动态登陆</span>
            </div>
        </div>

        <div id="member_form_box">
            <div id="member_form_box_item" style="display: block;">
                <div class="member_form_box_input_box">
                    <div class="member_form_box_group">
                        <div class="member_form_box_group_span">
                            <span>手机号</span>
                        </div>
                        <input type="text"  placeholder="请填写手机号">
                    </div>

                    <div class="member_form_box_group">
                        <div class="member_form_box_group_span">
                            <span>密码</span>
                        </div>
                        <input type="password"  placeholder="请输入密码">
                    </div>
                    <div class="member_form_box_group">
                        <div class="member_form_box_group_span">
                            <span>验证码</span>
                        </div>
                        <input class="get_verification_code_input" type="text"  placeholder="请输入验证码">
                        <button>获取验证码</button>
                    </div>
                </div>
                <div class="member_form_box_submit">
                    <div class="member_form_box_submit_box">
                        <div class="member_form_box_submit_button">
                            <span>登陆</span>
                        </div>
                    </div>
                    <div class="member_form_box_submit_box">
                        <div class="member_form_box_will_login pull-right">
                            <span>没有账号<a href="{{route('member_register')}}">注册</a></span>
                        </div>
                    </div>
                </div>
            </div>

            <div id="member_form_box_item">
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
                </div>
                <div class="member_form_box_submit">
                    <div class="member_form_box_submit_box">
                        <div class="member_form_box_submit_button">
                            <span>登陆</span>
                        </div>
                    </div>
                    <div class="member_form_box_submit_box">
                        <div class="member_form_box_will_login pull-right">
                            <span>没有账号<a href="{{route('member_register')}}">注册</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        $('.member_login_form_tags > .member_login_form_tags_item').on('click',function () {
            var $this = $(this);
            var $index = $this.index();
            $this.addClass('pt_active').siblings().removeClass('pt_active');
            $('#member_form_box > #member_form_box_item').eq($index).show().siblings().hide();
        })
    </script>
@endsection


