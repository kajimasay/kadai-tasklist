@extends('layouts.app')

@section('content')

    <h1>id = {{ $tasklists->id }} のメッセージ詳細ページ</h1>

    <p>{{ $tasklists->content }}</p>

      {!! link_to_route('tasklists.edit', 'このメッセージ編集', ['id' => $tasklists->id]) !!}

     {!! Form::model($tasklists, ['route' => ['tasklists.destroy', $tasklists->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}


@endsection