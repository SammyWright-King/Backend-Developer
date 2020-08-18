@extends('layouts.app')

@section('content')

    <div id="colorlib-main">

        <div class="colorlib-contact">
            <div class="colorlib-narrow-content">
                <div class="row">
                    <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                        <span class="heading-meta">Post</span>
                        <h2 class="colorlib-heading">Ask A Question</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-md-push-1">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1 col-md-pull-1 animate-box" data-animate-effect="fadeInLeft">
                                <form action="{{ route('store_post') }}" method="POST">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="title"> Title</label>
                                        <input type="text" class="form-control" placeholder="" name="title">
                                        <small class="error">{{$errors->first('title')}}</small>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="description"> Description</label>
                                        <textarea name="description" id="description" cols="30" rows="13" class="form-control" placeholder=""></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary btn-send-message pull-right" value="ask">
                                    </div>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="map"></div>	

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