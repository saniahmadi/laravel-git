@extends('layouts.app')
@section('content')

    <h3><a href="{{route('posts.edit',$post->id)}}">{{$post['title']}}</a></h3>
    <div> {{$post['content']}}</div>

@endsection()
