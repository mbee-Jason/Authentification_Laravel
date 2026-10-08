@extends('base')
@section('title', 'Se connecter')

@section('content')
    <div class="w-1/3 max-auto p-6 bg-white rounded-lg shadow-md">
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg">
                <strong class="font-bold">Erreur !</strong>
                <span class="block sm:inline">
                    {{ $errors->first() }}
                </span>
            </div>
        @endif

        <form action="{{ route('login.submit') }}" method="post" class="">
            @csrf
            <div class="mb-4">
                <h2 class="text-2xl font-bold mb-6 text-black">Se connecter</h2>
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
            <div class="flex items-center justify-between">
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline cursor-pointer w-full">
                    Se connecter
                </button>
            </div>
            <p class="my-2 text-center">
                <a href="{{ route('register') }}" class="text-red-500 hover:text-blue-700">Créer un compte</a>
            </p>
        </form>
    </div>
@endsection
