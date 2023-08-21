@extends('layout.app')

@section('content')
    <h1>Posts</h1>
    @if (count($posts)>0)
        @foreach ($posts as $post)
            <div class="card mb-3">
                <div class="card-body">
                  <h5 class="card-title"><a href="{{url("posts/".$post->id)}}">{{$post->title}}</a></h5>

                  <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="width: 100%" src="{{url("storage/cover_images/".$post->conver_image)}}" alt="">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <p class="card-text"> {!!$post->body!!}</p>
                    </div>
                  </div>
                  

                  
                  <a href="{{url("posts/".$post->id)}}" class="btn btn-primary">View</a>
                  @if (!Auth::guest())
                    @if (Auth::user()->id == $post->user_id)
                        <a href="{{url("posts/".$post->id)."/edit"}}" class="btn btn-secondary">Edit</a>
                        {!!Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id],'method'=>'POST','style'=>'display:inline-block'])!!}
                            {{Form::hidden('_method','DELETE')}}
                            {{Form::submit('Delete',['class' =>'btn btn-danger'])}}
                        {!!Form::close()!!}                     
                        
                    @endif
                  @endif
                </div>
                <div class="card-footer">
                    <small class="text-muted">Written on {{$post->created_at}} by {{$post->user->name}}</small>
                  </div>
              </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No posts found</p>
    @endif
@endsection