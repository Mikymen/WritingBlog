@extends('layout.app')
 @section('content')
    <h1 class="h2">{{$title}}</h1>
    @if (count($services)>0)
    <div class="row justify-content-center">
        <div class="col-md-4 col-sm-12">
            <ul class="list-group">
                @foreach ($services as $service)
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            {{$service['name']}}
    
                        </div>
                        <span class="badge bg-primary rounded-pill">
                        @for ($i = 0; $i < $service['score']; $i++)
                            ⭐
                        @endfor
                        </span>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    @endif

 @endsection  
   
