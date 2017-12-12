<div class="header-top-warp">
    <div class="container">
        <div class="row">
            <ul class="list-inline header-top-warp_left_tit">
                <li>
                    <div class="header-top-warp_item_dis_tit">
                        <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span><span>海口市[切换区域]</span>
                    </div>
                    <div class="header-top-warp_item_dis_con" style="display: none;">
                        <div class="city_title">
                            <p>您当前选择的城市：<span>海口市</span></p>
                        </div>
                        <div class="city_content">
                            <ul class="list-inline">
                                <li><span>海口市</span></li>
                                <li><span>三亚市</span></li>
                                <li><span>儋州市</span></li>
                                <li><span>五指山市</span></li>
                                <li><span>琼海市</span></li>
                                <li><span>文昌市</span></li>
                                <li><span>万宁市</span></li>
                                <li><span>东方市</span></li>
                                <li><span>三沙市</span></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="header-top-warp_item_dis_tit">
                        <span>微信公众号</span>
                    </div>
                    <div class="header-top-warp_item_dis_con" style="display: none;">
                        <img class="img-responsive" src="{{url('images/icon/weixin_code.jpg')}}">
                    </div>
                </li>
            </ul>

            <ul class="list-inline text-center header-top-warp_right_tit pull-right">
                <li class="head_nickname_style"><a href="{{route('manage_demand_role_index')}}">昵称XXXX</a></li>
                <li><a href="{{route('member_register')}}">注册</a></li>
                <li><a href="{{route('member_login')}}">登陆</a></li>
            </ul>
        </div>

    </div>
</div>

<script>
    $(function () {
        $('.header-top-warp_left_tit > li').hover(function () {
            $(this).find('div.header-top-warp_item_dis_tit').addClass('header-top-warp_item_dis_tit_active');
            $(this).find('div.header-top-warp_item_dis_con').fadeIn(200);
        },function () {
            $(this).find('div.header-top-warp_item_dis_tit').removeClass('header-top-warp_item_dis_tit_active');
            $(this).find('div.header-top-warp_item_dis_con').fadeOut(200);
            })
    })
</script>