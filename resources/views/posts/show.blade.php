@extends('layout.app')

@section('content')
    <a href="{{url("posts")}}" >Go back</a>
    <h1>{{$post->title}}</h1>
    <img style="width: 100%" src="{{url("storage/cover_images/".$post->conver_image)}}" alt="">
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
@endsection