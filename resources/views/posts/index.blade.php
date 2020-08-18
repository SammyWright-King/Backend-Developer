@extends('layouts.app')

@section('content')
    <div id="colorlib-main">
        <div class="colorlib-blog">
            <div class="colorlib-narrow-content">
                <div class="row">
                    <div class="col-md-8"> 
                        <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                            <span class="heading-meta">Post</span>
                            <h2 class="colorlib-heading">Questions</h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <p><a href="{{ route('new_post') }}" class="btn btn-primary btn-learn">Post a Question</a></p>
                    </div>
                </div>
                <div class="row">
                    @if ( count($posts) >= 1)
                        @foreach ($posts as $post)
                            <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="blog-entry">
                                    <a href="{{ route('replies', ['post_id'=>$post->id]) }}" class="blog-img"><img src="{{asset('images/blog-1.jpg')}}" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
                                    <div class="desc">
                                        <span><small>{{ $post->created_at}}</small> | <small> Web Design </small> | <small> <i class="icon-bubble3"></i> </small></span>
                                        <h3><a href="{{ route('replies', ['post_id'=>$post->id]) }}">{{$post->title}}</a></h3>
                                        <p>{{$post->body}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <h1>No posts yet</h1>
                    @endif
                </div>
            </div>
        </div>

        <div id="get-in-touch" class="colorlib-bg-color">
            <div class="colorlib-narrow-content">
                <div class="row">
                    <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                        <h2>Get in Touch!</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                        <p class="colorlib-lead">Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                        <p><a href="#" class="btn btn-primary btn-learn">Contact me!</a></p>
                    </div>
                    
                </div>
            </div>
        </div>

    </div>

@endsection

