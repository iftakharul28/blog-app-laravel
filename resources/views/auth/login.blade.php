@extends('layouts.app') @section('content')
<header class="bg-white shadow">
    <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900">Sign in</h1>
    </div>
</header>
<div
    class="h-[80vh] w-full p-4 bg-white shadow-md sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700"
>
    <form
        class="mx-auto max-w-md space-y-6"
        action="{{ route('login') }}"
        method="post"
    >
        @csrf
        <h5 class="text-xl font-medium text-gray-900 dark:text-white">
            Sign in to our platform
        </h5>
        <div class="relative z-0 mb-6 w-full group">
            <label
                for="email"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                >Email address</label
            >
            <input
                type="email"
                name="email"
                id="email"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white @error('email') dark:border-red-600 @enderror"
                placeholder="name@company.com"
                value="{{ old('email') }}"
            />
            @error('email')
            <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                <span class="font-medium">Oops!</span> {{ $message }}
            </p>
            @enderror
        </div>
        <div class="relative z-0 mb-6 w-full group">
            <label
                for="password"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                >Password</label
            >
            <input
                type="password"
                name="password"
                id="password"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white @error('password') dark:border-red-600 @enderror"
                placeholder="••••••••"
            />
            @error('password')
            <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                <span class="font-medium">Oops!</span> {{ $message }}
            </p>
            @enderror
        </div>
        <div class="relative z-0 mb-6 w-full group">
            <label
                for="password_confirmation"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                >Confirm password</label
            >
            <input
                type="password"
                name="password_confirmation"
                id="password_confirmation"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white @error('password') dark:border-red-600 @enderror"
                placeholder="••••••••"
                value=""
            />
            @error('password')
            <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                <span class="font-medium">Oops!</span> {{ $message }}
            </p>
            @enderror
        </div>
        @if(session('status'))
        <p
            class="mb-4 p-4 text-sm text-white text-center rounded-lg bg-red-500"
        >
            Oops! {{ session("status") }}
        </p>
        @endif
        <div class="flex items-start mb-6">
            <input
                id="remember"
                type="checkbox"
                name="remember"
                class="w-4 h-5 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800"
            />
            <label
                for="remember"
                class="ml-2 text-sm font-medium text-blue-600 dark:text-blue-500 cursor-pointer"
                >Remember me</label
            >
        </div>
        <button
            type="submit"
            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        >
            Login
        </button>
        <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
            Not registered?
            <a
                href="{{ route('register') }}"
                class="text-blue-700 hover:underline dark:text-blue-500"
                >Create account</a
            >
        </div>
    </form>
</div>
@endsection
