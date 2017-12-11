@extends('home.layout.base')
@section('content')
    <section class="pt_services_show">
        <div class="container">
            <div class="row">
                <div class="pt_services_show_left col-xs-9">
                    @include('home.pages.pt_services_show.partials.pt_services_nav_classify')
                    @include('home.pages.pt_services_show.partials.pt_services_show_item')
                </div>
                <div class="pt_services_show_right col-xs-3">
                    @include('home.pages.pt_services_show.partials.pt_show_sidebar')
                </div>
            </div>
        </div>
    </section>

@endsection

