@extends('home.layout.base')
@section('content')
    <section class="pt_services_info">
        <div class="container">
            <div class="row">
                <div class="pt_services_info_show">
                    <div class="pt_services_info_show_left pull-left">
                        <div class="pt_services_info_show_left_tit">
                            <div class="pt_services_info_show_icon pull-left">
                                <img class="img-circle img-responsive" src="{{url('images/icon/logo_icon.png')}}">
                            </div>
                            <div class="pt_services_info_show_des pull-left">
                                <div class="pt_services_info_show_titl">
                                    <h3>海南企众有限实业公司</h3>
                                </div>
                                <div class="pt_price"><span><i>200</i>起/月</span></div>
                                <div class="pt_services_info_call_ways">
                                    <div class="pt_services_info_phone">
                                        <span>133******07</span>
                                    </div>
                                    <div class="pt_services_info_address">
                                        <span>海南省海口市龙华区华昌大厦601</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="pt_services_info_show_right pull-left">
                        <div class="pt_services_info_show_right_item">
                            <div class="pt_services_info_show_right_buy_button text-center">
                                <button>申请服务</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pt_services_info_comment pull-left">
                    <div class="pt_services_info_comment_classify_tag">
                        <ul class="list-inline">
                            <li class="pt_active"><span>服务详情</span></li>
                            <li><span>用户评价(0)</span></li>
                        </ul>
                    </div>
                    <div class="pt_services_info_comment_box">
                        <div class="pt_services_info_comment_box_tab" style="display: block;">
                            <p>
                                测试测试测试测试测试测试测试测试测试测试测试测试
                                测试测试测试测试测试测试测试测试测试测试测试测试
                                测试测试测试测试测试测试测试测试测试测试测试测试
                                测试测试测试测试测试测试测试测试测试测试测试测试
                                测试测试测试测试测试测试测试测试测试测试测试测试
                                测试测试测试测试测试测试测试测试测试测试测试测试
                                测试测试测试测试测试测试测试测试测试测试测试测试
                                测试测试测试测试测试测试测试测试测试测试测试测试
                                测试测试测试测试测试测试测试测试测试测试测试测试
                                测试测试测试测试测试测试测试测试测试测试测试测试
                                测试测试测试测试测试测试测试测试测试测试测试测试
                                测试测试测试测试测试测试测试测试测试测试测试测试
                                测试测试测试测试测试测试测试测试测试测试测试测试
                                测试测试测试测试测试测试测试测试测试测试测试测试
                                测试测试测试测试测试测试测试测试测试测试测试测试
                            </p>
                        </div>
                    </div>
                </div>

                <div class="pt_services_info_r pull-right">
                    <div class="pt_services_info_company_info clearfix">
                        <div class="pt_services_info_company_info_des">
                            <p>服务所属企业</p>
                        </div>
                        <div class="pt_services_info_company_title">
                            <img class="img-responsive" src="{{url('images/icon/logo_icon.png')}}">
                            <span title="海南企众实业股份有限公司">海南企众实业有限公司</span>
                        </div>
                        <div class="pt_services_info_company_intro">
                            <span>公司简介</span>
                            <p>
                                简介测试简介测试简介测试简介测试简介测试简介测试简介测试
                                简介测试简介测试简介测试简介测试简介测试简介测试简介测试
                                简介测试简介测试简介测试简介测试简介测试简介测试简介测试
                                简介测试简介测试简介测试简介测试简介测试简介测试简介测试
                                简介测试简介测试简介测试简介测试简介测试简介测试简介测试
                                简介测试简介测试简介测试简介测试简介测试简介测试简介测试
                            </p>
                        </div>
                    </div>

                    <div class="pt_services_info_r_adv">
                        <p>广告位</p>
                    </div>

                    <div class="pt_services_info_r_adv">
                        <p>广告位</p>
                    </div>
                </div>
            </div>
        </div>




        <script>
            $('.pt_services_info_comment_classify_tag > ul > li').on('click',function () {
                $(this).addClass('pt_active').siblings().removeClass('pt_active');
            })
        </script>
    </section>
@endsection