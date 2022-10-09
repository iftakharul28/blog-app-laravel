@extends('layouts.app') @section('content')
<header class="bg-white shadow">
    <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900">
            All Posts
        </h1>
    </div>
</header>
@auth
<form
    class="w-full h-full max-w-xl mx-auto my-10 bg-white dark:bg-gray-800"
    action="{{ route('posts') }}"
    method="post"
>
    @csrf

    <div class="relative z-0 mb-6 w-full group">
        <label
            for="title"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
            >Title</label
        >
        <input
            type="text"
            name="title"
            id="title"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white @error('title') dark:border-red-600 @enderror"
            placeholder="Noteworthy technology acquisitions 2021"
            value="{{ old('title') }}"
        />
        @error('title')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">
            <span class="font-medium">Oops!</span> {{ $message }}
        </p>
        @enderror
    </div>
    <div class="relative z-0 w-full group">
        <label
            for="body"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400"
            >Your post</label
        >
        <textarea
            id="body"
            rows="4"
            name="body"
            value="{{ old('body') }}"
            class="mb-4 block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Leave a post..."
        ></textarea>
        @error('body')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">
            <span class="font-medium">Oops!</span> {{ $message }}
        </p>
        @enderror
    </div>
    <button
        type="submit"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
    >
        Submit
    </button>
</form>
@endauth
<main class="mt-6 container mx-auto">
    @if($posts->count())
    <div
        class="grid mb-8 rounded-lg border border-gray-200 shadow-sm dark:border-gray-700 md:mb-12 md:grid-cols-2"
    >
        @foreach ($posts as $post)
        <figure
            class="flex flex-col justify-center items-center p-8 text-center bg-white rounded-t-lg border-b border-gray-200 md:rounded-t-none md:rounded-tl-lg md:border-r dark:bg-gray-800 dark:border-gray-700"
        >
            <blockquote
                class="mx-auto mb-4 max-w-2xl text-gray-500 lg:mb-8 dark:text-gray-400"
            >
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    {{$post->title}}
                </h3>
                <p class="my-4 font-light">
                    {{$post->body}}
                </p>
            </blockquote>
            <figcaption
                class="w-full flex justify-center items-center space-x-3"
            >
                <img
                    class="w-9 h-9 rounded-full"
                    src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                    alt="profile picture"
                />
                <div class="space-y-0.5 font-medium dark:text-white text-left">
                    <div>{{$post->user->name}}</div>
                    <div
                        class="text-sm font-light text-gray-500 dark:text-gray-400"
                    >
                        {{$post->user->company}}
                    </div>
                </div>
                <p
                    class="mt-auto text-sm font-medium text-gray-500 dark:text-gray-400"
                >
                    {{$post->created_at->diffForHumans()}}
                </p>
            </figcaption>
        </figure>

        @endforeach
    </div>
    {{$posts->links()}}
    @else
    <p class="text-center text-lg font-semibold text-gray-900 dark:text-white">
        There are no posts
    </p>
    @endif
</main>
@endsection
