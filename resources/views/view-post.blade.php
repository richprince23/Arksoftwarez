@extends('layouts.app')

@section('content')
    <div class="container mx-auto my-10">
        <div class="max-w-2xl mx-auto bg-white p-8 rounded shadow-md">
            <div class="flex items-center mb-4">
                <img src="{{ asset('images/brand/ark_logo_white.png') }}" alt="Author Avatar" class="w-12 h-12 rounded-full mr-4">
                <span class="text-gray-600">{{ $post->author }}</span>
            </div>
            <h2 class="text-3xl font-bold mb-4">{{ $post->title }}</h2>


            @if (isset($post->image))
                <img src="{{ $post->image }}" alt="Blog Post Image" class="mb-6 w-full object-cover h-64 rounded-md">

            @endif

            <div class="prose max-w-none my-10">
                {!! $post->content !!}
            </div>
            <hr>
            <p class="text-gray-600 mb-4">{{ $post->created_at->format('M d, Y') }}</p>


            <!-- Add your additional content here if needed -->

            <div class="mt-8">
                <a href="{{ route('posts.list') }}" class="bg-indigo-600 text-white hover:bg-indigo-800 px-4 py-3 rounded-lg">Back to All Posts</a>
            </div>
        </div>
    </div>
@endsection
