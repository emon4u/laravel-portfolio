@extends('layouts.page')
@section('title', 'About')
@section('body_class', 'about')

@section('page_title')
    <!-- Page Title Starts -->
    <section class="title-section text-left text-sm-center">
        <h1>ABOUT <span>ME</span></h1>
        <span class="title-bg">Resume</span>
    </section>
    <!-- Page Title Ends -->
@endsection

@section('content')
    <!-- Main Content Starts -->
    <section class="main-content">
        <div class="container">
            <div class="row">
                <!-- Personal Info Starts -->
                <div class="col-12 col-lg-5 col-xl-6">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="text-uppercase custom-title mb-0 ft-wt-600">personal infos</h3>
                        </div>
                        <div class="col-12 d-block d-sm-none">
                            <img src="img/img-mobile.jpg" class="img-fluid main-img-mobile" alt="my picture"/>
                        </div>
                        <div class="col-12">
                            <ul class="about-list open-sans-font row list-inline p-0 mb-0 mt-0">
                                @foreach($personalInfo as $info)
                                    <li class="col-6">
                                        <span class="title">
                                            {{$info['title']}}:
                                        </span>
                                        <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">
                                            {{$info['value']}}
                                        </span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-12 mt-3">
                            <a class="button" href="#">
                                <span class="button-text">Download CV</span>
                                <span class="button-icon fa fa-download"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Personal Info Ends -->
                <!-- Boxes Starts -->
                <div class="col-12 col-lg-7 col-xl-6 mt-5 mt-lg-0">
                    <div class="row">
                        @foreach($statsInfo as $stat)
                            <div class="col-6">
                                <div class="box-stats with-margin">
                                    <h3 class="poppins-font position-relative">
                                        {{ $stat['count'] }}
                                    </h3>
                                    <p class="open-sans-font m-0 position-relative text-uppercase">
                                        {!! $stat['title'] !!}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- Boxes Ends -->
            </div>
            <hr class="separator">
            <!-- Experience & Education Starts -->
            <div class="row">
                <div class="col-12">
                    <h3 class="text-uppercase pb-5 mb-0 text-left text-sm-center custom-title ft-wt-600">Experience
                        <span>&</span> Education</h3>
                </div>
                <div class="col-lg-6 m-15px-tb">
                    <div class="resume-box">
                        <ul>
                            @foreach($experiences as $experience)
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-briefcase"></i>
                                    </div>
                                    <span class="time open-sans-font text-uppercase">
                                        {{ $experience['workingYear'] }}
                                    </span>
                                    <h5 class="poppins-font text-uppercase">
                                        {{ $experience['jobTitle'] }}
                                        <span class="place open-sans-font">
                                            {{ $experience['companyName'] }}
                                        </span>
                                    </h5>
                                    <p class="open-sans-font">
                                        {{ $experience['description'] }}
                                    </p>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 m-15px-tb">
                    <div class="resume-box">
                        <ul>
                            @foreach($educations as $education)
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-graduation-cap"></i>
                                    </div>
                                    <span class="time open-sans-font text-uppercase">
                                        {{ $education['passingYear'] }}
                                    </span>
                                    <h5 class="poppins-font text-uppercase">
                                        {{ $education['title'] }}
                                        <span class="place open-sans-font">
                                            {{ $education['institute'] }}
                                        </span>
                                    </h5>
                                    <p class="open-sans-font">
                                        {{ $education['description'] }}
                                    </p>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Experience & Education Ends -->
        </div>
    </section>
    <!-- Main Content Ends -->
@endsection
