@extends('layout.common')
@section('title','register')
@include('layout.header')
@section('content')
<main>
    <h2>Register</h2>
    <form method="POST" action="{{ route('register.store') }}">
        @csrf
        <label for="user-name">Name</label>
        <input type="text" name="name" id="user-name" required><br>
        <label for="email">E-Mail Address</label>
        <input type="email" name="email" id="email" required><br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required><br>
        <label for="confirm-password">Confirm Password</label>
        <input type="password" name="password_confirmation" id="confirm-password" required><br>
        <button type="submit">Register</button>
    </form>
</main>
@endsection
