<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>{{$page_title}}</title>
    <link rel="stylesheet" href="{{url('bootstrap/dist/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('css/scss/common/member_common.css')}}">
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div class="warp">
    <div class="container">
        <div class="row">
            <div class="common_member_pages_top">
                <div class="logo_icon pull-left">
                    <img class="img-responsive" src="{{url('images/icon/logo_icon.png')}}">
                </div>
                <div class="logo_icon_tit pull-left">
                    <h1>云创狗企业服务平台</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="common_member_pages_content" style="background-image: url('{{url("images/banner/member_common_background.png")}}')">
        <div class="container">
            <div class="row">
                @yield('content')
            </div>
        </div>
    </div>
    @include('home.layout.partials.foot')
</div>
<script src="{{url('js/common.js')}}"></script>
</body>
</html>