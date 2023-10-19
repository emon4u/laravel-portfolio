@extends('layouts.page')
@section('title', 'Projects')
@section('body_class', 'projects')

@section('page_title')
    <!-- Page Title Starts -->
    <section class="title-section text-left text-sm-center">
        <h1>My <span>Projects</span></h1>
        <span class="title-bg">Work</span>
    </section>
    <!-- Page Title Ends -->
@endsection

@section('content')
    <!-- Main Content Starts -->
    <section class="main-content text-center pb-3">
        <div class="container">
            <!-- Projects Grid Starts -->
            <div class="row project-items">
                @if( $projects )
                    @foreach( $projects as $project )
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="project-item">
                                <a href="/projects/{{ $project['id']  }}">
                                    <img src="{{ $project['thumbnail'] }}" class="projects-image" alt="Project Image"/>
                                    <h4 class="title"> {{ $project['title']  }}</h4>
                                </a>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            <!-- Projects Grid Ends -->
        </div>
    </section>
    <!-- Main Content Ends -->
@endsection
