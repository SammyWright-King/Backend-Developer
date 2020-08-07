@extends('layouts.app')

@section('content')

@extends('layouts.app')

@section('content')
    <h1>Post</h1>
    <div id="colorlib-main">

        <div class="colorlib-blog">
            <div class="colorlib-narrow-content">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                        <span class="heading-meta">Blog</span>
                        <h2 class="colorlib-heading">Read Blog</h2>
                    </div>
                </div>
                <div class="row">
                    @if ( count($posts) > 0)
                        @foreach ($posts as $post)
                            <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="blog-entry">
                                    <a href="blog.html" class="blog-img"><img src="images/blog-1.jpg" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
                                    <div class="desc">
                                        <span><small>April 14, 2018 </small> | <small> Web Design </small> | <small> <i class="icon-bubble3"></i> 4</small></span>
                                        <h3><a href="blog.html">Renovating National Gallery</a></h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
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

@endsection