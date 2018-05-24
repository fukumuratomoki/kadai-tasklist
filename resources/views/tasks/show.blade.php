@extends('layouts.app')

@section('content')

    <h1>id = {{ $tasks->id }} のタスク詳細ページ</h1>
    <p>タイトル名</p>
    <p>{{ $tasks->content }}</p>
    <p>詳細名</p>
    <p>{{ $tasks->status }}</p>
    
     {!! link_to_route('tasks.edit', 'タスクの編集', ['id' => $tasks->id]) !!}

    {!! Form::model($tasks, ['route' => ['tasks.destroy', $tasks->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}

@endsection