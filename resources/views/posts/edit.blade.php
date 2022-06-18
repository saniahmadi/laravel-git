@extends('layouts.app')
@section('content')
    <h2>ویرایش مطالب </h2>
    @can('update',$post)
    {!! Form::model($post,['method' =>'PATCH' ,'action' =>[ '\App\Http\Controllers\PostsController@update',$post->id] ]) !!}
    <div class="form-group">
        {!! Form::label('title','عنوان:')!!}
        {!! Form:: text('title',$post->title,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description','توضیحات:')!!}
        {!! Form:: textarea('description',$post->content,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form:: submit('به روز رسانی',null,['class'=>'btn btn-warning']) !!}
    </div>
    {!! Form::close() !!}

    {!! Form::model($post,['method'=>'DELETE','action'=>['\App\Http\Controllers\PostsController@destroy',$post->id]]) !!}
    <div class="form-group">
        {!! Form::submit('حذف',['class'=>'btn btn-danger']) !!}
    </div>
    {!! Form::close() !!}
    @endcan
{{--    <form method="post" action="/posts/{{$post->id}}">--}}
{{--        @csrf--}}
{{--        <input type="hidden" name="_method" value="PATCH">--}}
{{--        <input type="text" name="title" placeholder="عنوان مطلب" value="{{$post->title}}">--}}
{{--        <br/>--}}
{{--        <textarea type="text" name="description" placeholder="توضیحات مطلب"></textarea>--}}
{{--        <br/>--}}
{{--        <button type="submit" name="submit">بروز رسانی</button>--}}
{{--    </form>--}}

{{--    <h4>حذف کردن</h4>--}}
{{--    <form method="post" action="/posts/{{$post->id}}">--}}
{{--        @csrf--}}
{{--        <input type="hidden" name="_method" value="DELETE">--}}
{{--        <button type="submit" name="submit">حذف</button>--}}
{{--    </form>--}}
@endsection
