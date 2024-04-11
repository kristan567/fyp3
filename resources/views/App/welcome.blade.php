<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->

    <style>
        body {
            font-family: "SF Pro Display", "SF Pro Icons", "Helvetica Neue", "Helvetica", "Arial", sans-serif;
            max-width: 670px;
            width: 100%;
            height: 300px;
            margin: 10px auto;
            font-size: 16px;
            line-height: 1.5;
            font-weight: 300;
            color: white;
            background: linear-gradient(20deg, rgba(0, 0, 0, 0.64), rgba(0, 0, 0, 0.64)), url("https://images.unsplash.com/39/lIZrwvbeRuuzqOoWJUEn_Photoaday_CSD%20(1%20of%201)-5.jpg?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=92b4ef70a4e06a7e7bf54e1bde61b624&auto=format&fit=crop&w=1950&q=80") no-repeat center center fixed;
        }


        .logo {
            border-radius: 50%;
            max-width: 150px;
            max-height: 180px;
        }

        .logo-placeholder {
            padding: 5px;
            text-align: center;
            margin-top: 30%;
        }

        .btn {
            display: inline-block;
            font-weight: 400;
            color: #fff;
            text-align: center;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-color: #007bff;
            border: 1px solid transparent;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: 0.25rem;
            text-decoration: none;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .btn-primary {
            color: #fff;
            background-color: black;
            border-color: black;
            decoration: none;
        }

        .btn-primary:hover {
            color: #fff;
            background-color: #0069d9;
            border-color: #0062cc;
            decoration: none;
        }
    </style>



    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="./src/TimeCircles.js"></script>
    <link href="./src/TimeCircles.css" rel="stylesheet">



    <title>Under Construction Page</title>
    <link rel="icon" href="{{ global_asset('images/forApp/Untitled-1.png') }}">

</head>

<body class="antialiased">



    <div class="container">
        <div class="logo-placeholder">
            <img src="{{ global_asset('images/forApp/Untitled-1.png') }}" class="logo">
      
            <h1>Welcome Back User</h1>
            <p class="remove-top-margin">Field Magnet serve as invaluable resources for individuals and businesses
                involved in the construction industry, as well as for those seeking construction services.</p>
        </div>


    </div>
    <center>

        @if (Route::has('login'))

            @auth
                <a href="{{ url('/dashboard') }}" class="btn btn-primary">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="btn btn-primary">Login</a>

                {{-- @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
                @endif --}}
            @endauth

        @endif
    </center>

</body>

</html>
