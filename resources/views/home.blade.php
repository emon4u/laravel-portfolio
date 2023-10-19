@extends('layouts.page')
@section('title', 'Home')
@section('body_class', 'home')

@section('content')
    <!-- Main Content Starts -->
    <section class="container-fluid main-container container-home p-0">
        <div class="color-block d-none d-lg-block"></div>
        <div class="row home-details-container align-items-center">
            <div class="col-lg-4 bg position-fixed d-none d-lg-block"
                 style="background-image: url({{ asset($data['heroImg']) }})"></div>
            <div class="col-12 col-lg-8 offset-lg-4 home-details text-left text-sm-center text-lg-left">
                <div>
                    <img src="{{ asset($data['heroMobileImg']) }}" class="img-fluid main-img-mobile d-block d-lg-none"
                         alt="my picture"/>
                    <h1 class="text-uppercase poppins-font">
                        {{$data['intro']}}<span>{{$data['title']}}</span>
                    </h1>
                    <p class="open-sans-font">
                        {{$data['bio']}}
                    </p>
                    <a class="button" href="/about">
                        <span class="button-text">more about me</span>
                        <span class="button-icon fa fa-arrow-right"></span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Main Content Ends -->
@endsection
