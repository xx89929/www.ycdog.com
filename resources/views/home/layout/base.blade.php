<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>{{$page_title}}</title>
    <link rel="icon" href="{{url('images/icon/logo_icon.png')}}" type=" image/png" >
    <link rel="stylesheet" href="{{url('bootstrap/dist/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('css/scss/home/pt_style.css')}}">
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div class="warp">
    @include('home.layout.partials.head')
    @include('home.layout.partials.header-nav')
    @yield('content')
    @include('home.layout.partials.foot')
</div>
<script src="{{url('js/common.js')}}"></script>
</body>
</html>