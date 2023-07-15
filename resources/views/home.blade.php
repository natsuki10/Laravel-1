@extends('layout.common')
@section('title', 'Home')
@section('content')
<header>
    <h1>Laravel</h1>
    <p>{{ $user }}</p>
    <a href="{{ route('logout') }}">Logout</a>
</header>
<main>
    <h2>Dashboard</h2>
    <p>You are logged in!</p>
</main>
@endsection
