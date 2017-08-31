@extends('layouts.app')

@section('content')

<h1>id: {{ $tasklists->id }} のメッセージ編集ページ</h1>

    {!! Form::model($tasklists, ['route' => ['tasklists.update', $tasklists->id], 'method' => 'put']) !!}

        {!! Form::label('content', 'メッセージ:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('更新') !!}

    {!! Form::close() !!}

@endsection