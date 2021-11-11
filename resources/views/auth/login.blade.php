<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Timbertrack - Login</title>

    <link rel="stylesheet" href="{{asset('css/class.css')}}">
</head>

<body>
    <center>
        <h1> Login </h1>
        @if($errors->any())
            <h6 style="color: red;">{{$errors->first()}}</h6>
        @endif
        <form action="{{    route('login')  }}" method="post">
            <center>
                {{ csrf_field() }}
                @if (session('status'))
                <div class="color-red">{{ session('status') }}</div>
                @endif
                <label for="username">Username</label><br>
                <input type="text" name="username" class="@error('username') border-red @enderror"
                    value="{{ old('username') }}"><br>
                @error('username')
                <div class="color-red">{{$message}}</div>
                @enderror
                <label for="password">Password</label><br>
                <input type="password" name="password" class="@error('password') border-red @enderror" value=""><br>
                @error('password')
                <div class="color-red">{{$message}}</div>
                @enderror
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">Remember me</label><br>
                <button type="submit">Login</button>
            </center>
        </form>
    </center>
</body>

</html>
