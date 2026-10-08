<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>

<body class="">
    <nav class="flex justify-between items-center bg-blue-500 text-white p-5">
        <span class="text-lg font-normal">Welcome to your dashboard!</span>
        <form action="{{ route('logout') }}" method="POST" class="mt-4 px-2">
            @csrf
            <button type="submit"
                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded cursor-pointer">
                Logout
            </button>
        </form>
    </nav>
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <p class="text-lg">Welcome, <span class="font-semibold text-amber-500">{{ Auth::user()->name }}</span> !</p>
    </div>

</body>

</html>
