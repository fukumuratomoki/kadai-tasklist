@extends('layouts.app')

@section('content')

    <h1>id: {{ $tasks->id }} のメッセージ編集ページ</h1>

    {!! Form::model($tasks, ['route' => ['tasks.update', $tasks->id], 'method' => 'put']) !!}

        {!! Form::label('content', 'タイトル:') !!}
        {!! Form::text('content') !!}


        {!! Form::label('status', '詳細:') !!}
        {!! Form::text('status') !!}

        {!! Form::submit('更新') !!}

    {!! Form::close() !!}

@endsection