@extends('layouts.page')
@section('title', $project['title'])
@section('body_class', 'project-details')

@section('page_title')
    <!-- Page Title Starts -->
    <section class="title-section text-left text-sm-center">
        <h1>{{ $project['title'] }}</h1>
        <span class="title-bg">works</span>
    </section>
    <!-- Page Title Ends -->
@endsection

@section('content')
    <!-- Main Content Starts -->
    <section class="main-content">
        <div class="container">
            <!-- Projects Grid Starts -->
            <div class="row project-details">
                <div class="col-12">
                    <div class="project-thumbnail mb-5">
                        <img src="{{ $project['bigThumbnail'] }}" class="rounded w-100" alt="Project Thumbnail"/>
                    </div>
                </div>
                <div class="col-lg-4 order-lg-last">
                    <div class="project-meta-info rounded p-4 ml-xl-4 mb-lg-0 mb-4">
                        <ul class="list-inline m-0 p-0">
                            @foreach( $project['metaInfo'] as $meta )
                                <li>
                                    <span class="font-weight-bold">{{ $meta['title'] }}:</span>
                                    <span class="info-value">{{ $meta['value'] }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="project-content">
                        {{ $project['description'] }}
                    </div>
                </div>
            </div>
            <!-- Projects Grid Ends -->
        </div>
    </section>
    <!-- Main Content Ends -->
@endsection
