<!DOCTYPE html>
<html>

<head>
    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #bd7dd1;
            border-color: #bd7dd1;
        }

        li {
            float: left;
            border-right: 1px solid #bbb;
        }

        li:last-child {
            border-right: none;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .active {
            background-color: #549916;
            border-color: #4e8d15;
            color: #fff;
        }

        li a:hover:not(.active) {
            background-color: #549916;
            border-color: #4e8d15;
            color: #fff;
        }


        .backcolor {
            background-color: #9ca3af;
        }
    </style>
</head>

<body class="backcolor">
    <ul>
        <li><a class="active" href="#home">Home</a></li>
        <li><a href="#news">News</a></li>
        <li><a href="#contact">Contact</a></li>
        @if (Route::has('login'))
            @auth <li style="float:right">
                    <a href="{{ url('/dashboard') }}">Dashboard</a>
                </li>
            @else
                <li style="float:right">
                    <a href="{{ route('login') }}">Log in</a>
                </li>
                <li style="float:right">
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                </li>
            @endauth
        @endif
    </ul>


</body>

</html>
