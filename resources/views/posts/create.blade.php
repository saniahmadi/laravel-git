@extends('layouts.app')
@section('content')
    @if ($errors->any())
        <ul>
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    {{$error}}<br/>
                @endforeach
            </div>
        </ul>
    @endif

    {!! Form::open(['method' =>'POST' ,'action' =>[ '\App\Http\Controllers\PostsController@store'],'files'=>true]) !!}
    <div class="form-group">
        {!! Form::label('title','عنوان:')!!}
        {!! Form:: text('title',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description','توضیحات:')!!}
        {!! Form:: textarea('description',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('file','تصویرصلی:')!!}
        {!! Form::file('file',['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form:: submit('ذخیره',null,['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

{{--    <form method="post" action="/posts">--}}
{{--        @csrf--}}
{{--        <input type="text" name="title" placeholder="عنوان مطلب">--}}
{{--        <br/>--}}
{{--        <textarea type="text" name="description" placeholder="توضیحات مطلب"></textarea>--}}
{{--        <br/>--}}
{{--         <button type="submit" name="submit">ذخیره</button>--}}
{{--    </form>--}}
@endsection
