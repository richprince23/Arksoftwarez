@extends('layouts.dashboard')
@section('title', 'Admin | Post List')

@section('content')
    <div class="container mx-auto my-10">
        <div class="max-w-full mx-auto bg-white p-8 rounded shadow-md">
            <div class="flex flex-row-reverse">
                <a class="bg-indigo-600 px-4 py-2 text-white rounded-md" href="{{ route('posts.create') }}">Create Post</a>
            </div>
            <h2 class="text-2xl font-bold mb-4">List of Posts</h2>

            @if (count($posts) > 0)
                <table class="min-w-full bg-white border border-gray-300">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="py-2 px-4 border-b">Title</th>
                            <th>Author</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr class="text-center">
                                <td class="py-2 px-4 border-b">{{ $post->title }}</td>
                                <td>{{ $post->author }}</td>
                                <td>
                                    <form action="{{ route('posts.delete', $post->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-800 focus:outline-none">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor" class="h-5 w-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M6 18L18 6M6 6l12 12"></path>
                                            </svg>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p>No posts available.</p>
            @endif
        </div>
    </div>
@endsection
