<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>{{$page_title}}</title>
    <link rel="stylesheet" href="{{url('bootstrap/dist/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('css/scss/member_manage/member_manage.css')}}">
    @if ($base_scss)
        <link rel="stylesheet" href="{{$base_scss}}">
    @endif
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div class="warp">
    @include('home.layout.partials.head')
    @include('home.layout.partials.header-nav')
    <div class="member_manage_warp">
        <div class="container">
            <div class="row">
                <div class="member_manage_warp_box clearfix">
                    @include('member_manage.layout.partials.member_manage_sidebar')
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    @include('home.layout.partials.foot')
</div>
<script src="{{url('js/common.js')}}"></script>
</body>
</html>