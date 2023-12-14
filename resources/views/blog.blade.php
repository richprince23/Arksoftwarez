@extends('layouts.app')

@section('title', "Blog")

@section('content')
    <div class="container mx-auto my-10">
        <h2 class="text-3xl font-bold mb-8">Latest Blog Posts</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($posts as $post)
                <div class="bg-white p-6 rounded-lg shadow-md">

                    <div class="flex flex-row">
                       <img src="{{ asset('images/brand/ark_logo_white.png') }}" alt="Author Avatar" class="w-12 h-12 rounded-full mb-4 mr-4">
                       <p class="flex-1 my-auto mx-auto text-gray-600">{{$post->author}}</p>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">{{ $post->title }}</h3>
                    <p class="text-gray-600 mb-4">{{ Str::limit($post->content, 100) }}</p>
                    <a href="{{ route('posts.show', $post->id) }}" class="mt-10 text-indigo-600 hover:text-indigo-800 py-3 px-4 border rounded-lg">Read More</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
