<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>{{$page_title}}</title>
    <link rel="stylesheet" href="{{url('bootstrap/dist/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('css/scss/manage_demand_role/manage_demand_role.css')}}">
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div class="warp">
    @include('home.layout.partials.head')
    @include('home.layout.partials.header-nav')
    <div class="manage_demand_warp">
        <div class="container">
            <div class="row">
                <div class="manage_demand_warp_box clearfix">
                    @include('manage_demand_role.layout.partials.manage_demand_role_sidebar')
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