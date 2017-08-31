@extends('layouts.app')

@section('content')

    <h1>メッセージ一覧</h1>

    @if (count($tasklists) > 0)
        <ul>
            @foreach ($tasklists as $tasklists)
                <li>{{ $tasklists->content }}</li>
            @endforeach
        </ul>
    @endif

@endsection