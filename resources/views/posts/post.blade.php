@extends('layouts.app')

@section('content')
    <div id="colorlib-main">
        <div class="colorlib-services">
            <div class="colorlib-narrow-content">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                        <span class="heading-meta">{{$post->title}}</span>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="row">
            <div class="col-md col-sm-7" data-animate-effect="fadeInLeft">
                <div class="blog-entry">
                    <a href="{{ route('replies', ['post_id'=>$post->id]) }}" class="blog-img"><img src="{{ asset('images/blog-1.jpg') }}" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
                    <div class="desc">
                        <span><small>April 14, 2018 </small> | <small> Web Design </small> | <small> <i class="icon-bubble3"></i> {{$count}}</small></span>
                        <h3>{{ $post->body }}</h3>
                    </div>
                </div>
            </div>
            <div class="col-md col-sm-5" data-animate-effect="fadeInLeft">
                <div class="row">
                    <div class="col-md-11 col-md-offset-1 col-md-pull-1 animate-box" data-animate-effect="fadeInLeft">
                        <form action="{{ route('save_answer', ['post_id'=>$post->id]) }}" method="POST">
                            {{csrf_field()}}
                            <div class="form-group ">
                                <label for="answer"> YOUR RESPONSE</label>
                                <textarea name="answer" id="answer" cols="30" rows="13" class="form-control" placeholder=""></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary btn-send-message pull-right" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-11 col-md-offset-1 col-md-pull-1">
                <ul></ul>
                @foreach ($answers as $answer)
                    <li>{{$answer->answer}}</li>
                @endforeach
            </ul>
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

