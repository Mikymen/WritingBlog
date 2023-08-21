@extends('layout.app')

@section('content')
    <h1>Edit Post</h1>
    {!! Form::open(['action' => ['App\Http\Controllers\PostsController@update', $post->id],'method'=>'POST','enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::Label('title',"Title")}}
        {{Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'title'])}}
    </div>
    <div class="form-group">
        {{Form::Label('body',"Body")}}
        {{Form::textarea('body',$post->body,['class'=>'ckeditor form-control','placeholder'=>'Body text'])}}
    </div>
    <div class="form-group">
        {{Form::file('cover_image')}}
    </div>
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Submit',['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection