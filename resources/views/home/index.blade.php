<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Welcome Page</title>
</head>

<body>
    <nav class="navbar">
        <label class="logo">Blog Web</label>
        <ul>
            <li>
                <a href="">Home</a>
            </li>
            <li>
                <a href="">Contact</a>
            </li>
            @if (Route::has('login'))
                @auth

                    <li>

                        <a class="btn btn-success" href="{{ url('/dashboard') }}">{{ Auth::user()->name }}</a>
                    </li>
                @else
                    <li>

                        <a class="btn btn-success" href="{{ route('register') }}">Register</a>
                    </li>
                    <li>
                        <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
                    </li>
                @endauth
            @endif
        </ul>
    </nav>
    @foreach ($post as $post)
        <div class="div_des">
            <label>{{ $post->username}}</label>
            <p>{{ $post->description}}</p>
            <img src="post/{{ $post->image}}" alt="" width="100%" height="800px">
        </div>
    @endforeach
</body>
</html>