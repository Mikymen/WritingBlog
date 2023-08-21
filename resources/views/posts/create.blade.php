@extends('layout.app')

@section('content')
    <h1>Create Post</h1>
    {!! Form::open(['action' => 'App\Http\Controllers\PostsController@store','method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::Label('title',"Title")}}
        {{Form::text('title','',['class'=>'form-control','placeholder'=>'title'])}}
    </div>
    <div class="form-group">
        {{Form::Label('body',"Body")}}
        {{Form::textarea('body','',['class'=>'ckeditor form-control','placeholder'=>'Body text'])}}
    </div>
    <div class="form-group">
        Image load (Max. 2Mb) 
        {{Form::file('cover_image')}}
    </div>
    {{Form::submit('Submit',['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection