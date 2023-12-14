@extends('layouts.dashboard')
@section('title', 'Admin | Manage Portfolios')

@section('content')
    <div class="container mx-auto my-10">
        <!-- Add Portfolio Form -->
        <form action="{{ route('portfolio.store') }}" method="POST" enctype="multipart/form-data" class="mb-8">
            @csrf
            <div class="flex flex-col space-y-4 md:space-x-4">
                <!-- Portfolio Image -->
                <div class="flex-shrink-0 w-full md:w-1/3">
                    <label for="image" class="block text-sm font-medium text-gray-700">Portfolio Image</label>
                    <input type="file" id="image" name="image" accept="image/*" class="mt-1 p-2 w-full border rounded-md" required>
                </div>
                <!-- Portfolio Name -->
                <div class="flex-grow">
                    <label for="name" class="block text-sm font-medium text-gray-700">Portfolio Name</label>
                    <input type="text" id="name" name="name" class="mt-1 p-2 w-full border rounded-md" required>
                </div>
                <!-- Submit Button -->
                <div class="flex-shrink-0">
                    <button type="submit" class="bg-indigo-600 hover:bg-indigo-500 text-white px-4 py-2 rounded-md">Add Portfolio</button>
                </div>
            </div>
        </form>

        <!-- Portfolio Table -->
        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr class="bg-gray-100">
                    <th class="py-2 px-4 border-b">Image</th>
                    <th class="py-2 px-4 border-b">Name</th>
                    <th class="py-2 px-4 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($portfolios as $portfolio)
                    <tr>
                        <td class="py-2 px-4 border-b">
                            <img src="{{ asset($portfolio->image) }}" alt="{{ $portfolio->name }}" class="w-16 h-16 object-cover">
                        </td>
                        <td class="py-2 px-4 border-b">{{ $portfolio->name }}</td>
                        <td class="py-2 px-4 border-b">
                            <form action="{{ route('portfolio.destroy', $portfolio->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700 focus:outline-none">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
