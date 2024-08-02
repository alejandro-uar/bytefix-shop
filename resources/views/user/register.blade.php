<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <h1>Register</h1>
        <label for="name">Full name</label><br>
        <input type="text" name="name" required><br>
        <label for="email">Email</label><br>
        <input type="email" name="email" required><br>
        <label for="password">Password</label><br>
        <input type="password" name="password" required><br>
        <button type="submit">Register</button>
    </form>
</body>
</html>