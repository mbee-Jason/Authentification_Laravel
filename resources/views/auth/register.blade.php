@extends('base')
@section('title', 'Inscription')

@section('content')
    <div class="w-1/3 max-auto p-6 bg-white rounded-lg shadow-md">
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg">
                <strong class="font-bold">Succès !</strong>
                <span class="block sm:inline">
                    {{ session('success') }}
                </span>
            </div>
        @endif

        <form action="{{ route('registration.register') }}" method="post" class="">
            @csrf
            <div class="mb-4">
                <h2 class="text-2xl font-bold mb-6 text-black">Inscription</h2>
            </div>
            <div class="mb-4">
                <label for="name" class="block text-black text-sm font-medium mb-2">
                    Name
                </label>
                <input type="text" id="name" name="name" value="{{ old('name') }}"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('name')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="email" class="block text-black text-sm font-medium mb-2">
                    Email
                </label>
                <input type="email" id="email" name="email" value="{{ old('email') }}"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="block text-black text-sm font-medium mb-2">
                    Password
                </label>
                <input type="password" id="password" name="password" value="{{ old('password') }}"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password_confirmation" class="block text-black text-sm font-medium mb-2">
                    Confirmed Password
                </label>
                <input type="password" id="password_confirmation" name="password_confirmation"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="flex items-center justify-between">
                <button type="submit"
                    class="bg-green-500 hover:bg-green-700 text-black font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline cursor-pointer w-full">
                    S'inscrire
                </button>
            </div>
            <p class="my-2 text-center">
                <a href="{{ route('login') }}" class="text-red-500 hover:text-blue-700">Déjà un compte ? Se connecter</a>
            </p>
        </form>
    </div>
@endsection
