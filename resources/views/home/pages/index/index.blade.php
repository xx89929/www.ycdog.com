@extends('home.layout.base')
@section('content')
<section class="pt_search_warp" style='background: url("{{url('images/banner/pt_search_bg.png')}}")'>
    <div class="container">
        <div class="row">
            <div class="pt_search">
                <ul class="list-inline">
                    <li class="text-center col-xs-4 pt_search_title_ctr pt_search_title_ctr_active">
                        <p>立即搜索</p><span>快速找到相关服务</span>
                    </li>

                    <li class="text-center col-xs-4 pt_search_title_ctr ">
                        <p>优质企业</p><span>海南优质服务企业</span>
                    </li>

                    <li class="text-center col-xs-4 pt_search_title_ctr">
                        <p>发布需求</p> <span>发布需要的服务</span>
                    </li>
                </ul>

                <div class="pt_search_content_ctr">
                    @include('home.pages.index.partials.pt_search_tab_0')
                    @include('home.pages.index.partials.pt_search_tab_1')
                    @include('home.pages.index.partials.pt_search_tab_2')
                </div>
            </div>
        </div>
    </div>
</section>
@endsection