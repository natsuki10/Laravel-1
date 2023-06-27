@extends('layout.common')

@section('title','Login')
@include('layout.header')
<body>

<main>
    <h2>Login</h2>
    <form method="POST" action="{{ route('login') }}">
    <label for="email">E-Mail Adreaa</label>
    <input type="email" name="email" id="email" required><br>
    <label for="passwaord">Password</label>
    <input type="password" name="password" id="password" required><br>
    <button type="submit">Login</button>
    <a href="#">Forgot Your Password?</a>
    </form>
</main>
</body>
</html>