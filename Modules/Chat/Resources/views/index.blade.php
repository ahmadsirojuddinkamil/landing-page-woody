@extends('chat::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <h2>ini halaman chat</h2>

    <p>
        This view is loaded from module: {!! config('chat.name') !!}
    </p>
@endsection
