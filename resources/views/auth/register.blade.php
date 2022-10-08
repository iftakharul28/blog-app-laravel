@extends('layouts.app') @section('content')
<header class="bg-white shadow">
    <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900">
            Register Form
        </h1>
    </div>
</header>
<div
    class="h-[80vh] w-full p-4 bg-white shadow-md sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700"
>
    <form
        class="mx-auto max-w-xl space-y-6"
        action="{{ route('register') }}"
        method="post"
    >
        @csrf
        <h5 class="text-xl font-medium text-gray-900 dark:text-white">
            Register Form to join our platform
        </h5>
        <div class="grid md:grid-cols-2 md:gap-6">
            <div class="relative z-0 mb-6 w-full group">
                <label
                    for="floating_first_name"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                    >Name</label
                >
                <input
                    type="text"
                    name="name"
                    id="floating_first_name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white @error('name') dark:border-red-600 @enderror"
                    placeholder="jane doe"
                    value="{{ old('name') }}"
                />
                @error('name')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                    <span class="font-medium">Oops!</span> {{ $message }}
                </p>
                @enderror
            </div>
            <div class="relative z-0 mb-6 w-full group">
                <label
                    for="username"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                    >User name</label
                >
                <input
                    type="text"
                    name="username"
                    id="username"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white @error('username') dark:border-red-600 @enderror"
                    placeholder="jane"
                    value="{{ old('username') }}"
                />
                @error('username')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                    <span class="font-medium">Oops!</span> {{ $message }}
                </p>
                @enderror
            </div>
        </div>
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
        <div class="grid md:grid-cols-2 md:gap-6">
            <div class="relative z-0 mb-6 w-full group">
                <label
                    for="phone"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                    >Phone number (+88013456-78902)</label
                >
                <input
                    type="tel"
                    name="phone"
                    id="phone"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white @error('password') dark:border-red-600 @enderror"
                    placeholder="+88013456-78902
                "
                    value="{{ old('phone') }}"
                />
                @error('phone')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                    <span class="font-medium">Oops!</span> {{ $message }}
                </p>
                @enderror
            </div>
            <div class="relative z-0 mb-6 w-full group">
                <label
                    for="company"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                    >Company (Ex. Google)</label
                >
                <input
                    type="text"
                    name="company"
                    id="company"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    placeholder="Google"
                />
            </div>
        </div>
        <button
            type="submit"
            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        >
            Submit
        </button>
        <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
            registered?
            <a
                href="{{ route('login') }}"
                class="text-blue-700 hover:underline dark:text-blue-500"
                >login</a
            >
        </div>
    </form>
</div>
@endsection
