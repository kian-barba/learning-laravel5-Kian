@extends('app')

@section('content')
    <h1>Write a New Article</h1>
    <hr/>

    {!! Form::open(['url' => 'articles']) !!}
    {{--{!! Form::open(['action' => 'ArticlesController@show']) !!}--}}
    @include('partials.form', ['submitButtonText' => 'Add Article'])
    {{--<div class="form-group">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('body', 'Body:') !!}
        {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('published_at', 'Published On:') !!}
        {!! Form::input('date','published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Add Article', ['class' => 'btn btn-primary form-control']) !!}
    </div>--}}
    {!! Form::close() !!}
    {{--{!! var_dump($errors) !!}--}}
    @include('errors.list')
    {{--@if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif--}}

@stop
