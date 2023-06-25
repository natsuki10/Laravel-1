<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<header>
    <h1>Laravel</h1>
    <a href="{{ route('login') }}">Login</a>
    <a href="{{ route('register') }}">Register</a>
</header>
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