@extends('layouts.header-footer')
@section('content')
    <!-- Inner Page Header serction start here -->
    <div class="inner-page-header">
        <div class="banner">
            <img src="{{asset('images/banner/4.jpg')}}" alt="Banner">
        </div>
        <div class="banner-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="header-page-title">
                            <h1>Blog</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Inner Page Header serction end here -->

    <!-- Single Author Page Start Here -->
    <div class="single-blog-page-area">
        <div class="container-fluid">
            @foreach($posts as $post)
                <div class="row mb-30">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 single-image">
                        <figure><img class="img-responsive" src="{{asset($post->image)}}" alt=""></figure>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 single-bio">
                        <h2 class="member-name">{{$post->title}}</h2>
                        <h3 class="member-title">Category: {{$post->category['name']}}</h3>
                        <div class="member-desc">
                            <p>
                                {{$post->description}}
                            </p>
                        </div>

                        <div class="contact-info">
                            <ul>
                                <li>{{\Carbon\Carbon::parse($post->updated_at)->diffForHumans()}}</li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="share-section">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                <ul class="share-link">
                                    <li class="hvr-bounce-to-right"><a href="javascript:void(0);"> Tags:</a></li>
                                </ul>
                                <ul class="share-link no-first">
                                    @foreach($tags as $tag)
                                        <li class="hvr-bounce-to-right"><a href="#">{{$tag['name']}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            @endforeach
            {{$posts->links()}}
        </div>

    </div>
@endsection
