@extends('layouts.app')
@section('content')
    <ul>
        @foreach($posts as $post)
            <li>

            <div class="image-container col-sm-2">
                <img class="img-responsive" height="100" src="{{$post->path}}">
            </div>
            </li>

            <li>
                <a href="{{route('posts.show',$post->id)}}"> {{$post->title}}</a>
                <span>{{$post->user->name}}</span>
            </li>
        @endforeach
    </ul>


@endsection
