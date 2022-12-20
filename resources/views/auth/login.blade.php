<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ URL::asset('/assets/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;700&display=swap" rel="stylesheet">
</head>
<body>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('login') }}" method="post" class="box">
        @csrf
        <div class="header">
            <br>
            <br>
            <br>
        </div>
        <div class="login-area">
            <h3>Login to your account</h3>
            <input class="username" placeholder="Username" type="email" name="email">
            <br><br>
            <input class="password" placeholder="Password" type="password" name="password">
            <br><br>
            <input type="submit" value="Login" class="submit">
            <p>Don't have an account?</p><a href="{{ route('register') }}">Register here</a>
        </div>
    </form>
</body>
</html>
