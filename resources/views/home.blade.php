@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                            <p>
                                <a class="btn btn-primary" href="{{ url("/posts/create") }}">Create Post</a>

                            </p>
<h3>Latest posts:</h3>
                    @if (count($posts)>0)
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th>Modified</th>
                                <th>Action</th>
                            </tr>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td class="fs-5">
                                            <a href="{{url("posts/".$post->id)}}">{{$post->title}}  </a>
                                        </td>
                                        <td>
                                            {{$post->created_at}} 
                                                                                      
                                        </td>
                                        <td>
                                            <a href="{{url("posts/".$post->id)}}/edit" class="btn btn-primary">Edit</a>
                                            {!!Form::open(['action' => ['App\Http\Controllers\HomeController@destroy', $post->id],'method'=>'POST','style'=>'display:inline-block'])!!}
                                                {{Form::hidden('_method','DELETE')}}
                                                {{Form::submit('Delete',['class' =>'btn btn-danger'])}}
                                            {!!Form::close()!!}
                                        </td>
                                    </tr>
                                @endforeach
                        </table>       
                    @else
                    <hr>
                       <p>You have no posts</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
