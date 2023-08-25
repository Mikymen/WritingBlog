@extends('layout.app')
 @section('content')

 <h1>Create Post</h1>
 {!! Form::open(['action' => 'App\Http\Controllers\PagesController@TestCloud','method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
        Image load (Max. 2Mb) 
        {{Form::file('cover_image')}}
    </div> 
 {{Form::submit('Submit',['class' => 'btn btn-primary'])}}
 {!! Form::close() !!}

 @endsection  