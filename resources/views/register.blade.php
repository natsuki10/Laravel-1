@extends('layout.common')

@section('title','Register')
@include('layout.header')
<main>
    <h2>Register</h2>
    <form method="POST" action="{{ route('register') }}">
    <label for="user-name">Name</label>
    <input type="text" name="user-name" id="user-name" required><br>
    <label for="email">E-Mail Adreaa</label>
    <input type="email" name="email" id="email" required><br>
    <label for="passwaord">Password</label>
    <input type="password" name="password" id="password" required><br>
    <label for="confirm-passwaord">Confirm Password</label>
    <input type="password" name="confirm-passwaord" id="confirm-passwaord" required><br>
    <button type="submit">Rgister</button>
    </form>
</main>
</body>
</html>