<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <form action="{{route('login')}}" method="POST">
            @csrf
            <input type="email" name="email" placeholder="Enter Email">
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" value="Login">
        </form>
    </body>
</html>
