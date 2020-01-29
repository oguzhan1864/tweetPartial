<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
</head>
<body>
    <form action="/login/loginForm" method="post"></form>
        @csrf
        <input type="text" name="username" value="username">
        <input type="text" name="password" value="password">
        <input type="submit" value="login">
</body>
</html>
