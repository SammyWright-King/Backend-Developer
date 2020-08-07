@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 1)
        @foreach ($posts as $post)
            <div>
                <h3>{{$post->title}}</h3>
                <small> written on {{$post->created_at}}</small>
            </div>
        @endforeach
    @else 
        <h3> NO Posts!</h3>
    @endif
@endsection