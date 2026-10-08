<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title')</title>
</head>
<body>
    <nav class="bg-gray-900 text-white p-4 flex justify-between space-x-4">
        <ul>
            <li>
                <a href="/">Home</a>
            </li>
        </ul>

        <a href="{{ route('login')}}" class="bg-gray-700 rounded-2xl px-5 py-2 text-center">Connexion</a>
    </nav>
    <div class="flex justify-center items-center w-full mt-6">
        @yield('content')
    </div>

    @yield('scripts')
</body>
</html>
