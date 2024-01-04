@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container mx-auto p-8">
        <h1 class="text-4xl font-extrabold mb-12 text-center text-gray-800">My Awesome Blogs</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($posts as $post)
                <article
                    class="bg-white rounded-lg overflow-hidden shadow-lg transition duration-300 transform hover:scale-105">
                    <img alt="{{ $post->title }}" src="{{ $post->getFirstMediaUrl() }}"
                        class="h-64 w-full object-cover object-center" />

                    <div class="p-6">
                        <a href="post/{{ $post->id }}">
                            <h3 class="text-2xl font-semibold text-gray-800 hover:text-blue-500 transition duration-300">
                                {{ $post->title }}</h3>
                        </a>

                        <p class="mt-4 text-gray-600">{{ $post->meta_description }}</p>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
@endsection
