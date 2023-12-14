@extends('layouts.dashboard')
@section('title', 'Admin | Create Blog Post')

@section('content')
    <div class="container mx-auto mt-5">
        <div class="max-w-2xl mx-auto bg-white p-8 rounded shadow-md">
            <a class="underline text-indigo-600 " href="{{ route('admin.news') }}">Back</a>
            <h2 class="text-2xl font-bold mb-4">Create a Blog Post</h2>

            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf

                <!-- Title -->
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                    <input type="text" id="title" name="title" class="mt-1 p-2 w-full border rounded-md" required>
                </div>

                <!-- Content -->
                <div>
                    <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
                    <textarea id="content" name="content" class="mt-1 p-2 w-full border rounded-md resize-none" rows="6" required></textarea>
                </div>

                <!-- Image -->
                <div>
                    <label for="image" class="block text-sm font-medium text-gray-700">Featured Image</label>
                    <input type="file" id="image" name="image" accept="image/*" class="mt-1 p-2 w-full border rounded-md">
                </div>

                <!-- Tags -->
                <div>
                    <label for="tags" class="block text-sm font-medium text-gray-700">Tags</label>
                    <input type="text" id="tags" name="tags" class="mt-1 p-2 w-full border rounded-md" placeholder="Separate tags with commas">
                </div>

                <!-- Submit Button -->
                <div>
                    <button type="submit" class="bg-indigo-600 hover:bg-indigo-500 text-white px-4 py-2 rounded-md">Create Post</button>
                </div>
            </form>
        </div>
    </div>
@endsection
