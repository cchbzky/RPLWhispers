<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title') </title>

    <!-- Style -->
    @vite('resources/css/app.css')
</head>

<body>
<body class="bg-custom-bg">

    <div class="navbar bg-base-100">
        @yield('menu')
        @yield('logo')
        <div class="navbar-end">
            @yield('cari')
            <div class="dropdown dropdown-end">
                <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full">
                        <img src="https://via.placeholder.com/380x380" />
                    </div>
                </label>
                <ul tabindex="0"
                    class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                    <li><a href=" {{url('login')}} " >Login</a></li>
                    <li><a>Register</a></li>
                    <body class="bg-custom-bg">

                </ul>
            </div>
        </div>
    </div>

    {{-- <!-- @include('layouts.app.navbar') --> --}}

    @yield('content')

    @include('layouts.app.footer')

</body>

</html>