@extends('layouts.app')

@section('title', 'Detail Post')

@section('content')
    <div class="bg-gradient-to-b from-green-600 to-green-800 text-white">
        <div class="container mx-auto py-12">
            <div class="flex justify-center items-center flex-col space-y-8">
                <p class="text-xs font-bold tracking-wide uppercase text-center">#MyAwesomeBlog</p>
                <img alt="{{ $post->title }}" src="{{ $post->getFirstMediaUrl() }}"
                    class="h-96 w-full rounded-lg object-cover shadow-lg transition duration-300 transform hover:scale-105" />
                <h1 class="text-5xl font-extrabold leading-tight text-center">{{ $post->title }}</h1>
                <p class="text-sm text-gray-300">by
                    <a href="#" class="underline">
                        <span itemprop="name">Reonaldi Saputro</span>
                    </a> on <time>{{ Carbon\Carbon::parse($post->created_at)->format('d-m-Y') }}</time>
                </p>
            </div>
        </div>
    </div>

    <div class="container mx-auto mt-8 text-gray-800">
        <div class="max-w-3xl mx-auto space-y-8">
            <div class="text-gray-600 text-lg leading-7">
                <p>{{ $post->meta_description }}</p>
            </div>
            <div class="border-t border-gray-300 text-justify">
                <div class="prose max-w-none">
                    {!! $post->content !!}
                </div>
            </div>
        </div>
    </div>
@endsection
