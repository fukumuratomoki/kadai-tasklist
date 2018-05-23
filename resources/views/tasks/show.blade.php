@extends('layouts.app')

@section('content')

    <h1>id = {{ $tasks->id }} のタスク詳細ページ</h1>

    <p>{{ $tasks->status }}</p>
    <p>{{ $tasks->content }}</p>
    
     {!! link_to_route('tasks.edit', 'タスクの編集', ['id' => $tasks->id]) !!}

    {!! Form::model($tasks, ['route' => ['tasks.destroy', $tasks->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}

@endsection