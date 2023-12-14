@extends('layouts.dashboard')

@section('title', 'Admin | Team')

@section('content')
    <div class="container mx-auto my-10">
        <div class="max-w-2xl mx-auto bg-white p-8 rounded shadow-md">
            <h2 class="text-3xl font-bold mb-6">Team Members</h2>

            <!-- Add Team Member Form -->
            <form action="{{ route('team.store') }}" method="POST" enctype="multipart/form-data" class="mb-8">
                @csrf
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <input type="text" id="name" name="name" class="mt-1 p-2 w-full border rounded-md" required>
                    </div>
                    <div>
                        <label for="position" class="block text-sm font-medium text-gray-700">Position</label>
                        <input type="text" id="position" name="position" class="mt-1 p-2 w-full border rounded-md" required>
                    </div>
                </div>
                <div class="mt-4">
                    <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                    <input type="file" id="image" name="image" accept="image/*" class="mt-1 p-2 w-full border rounded-md" required>
                </div>
                <button type="submit" class="mt-4 bg-indigo-600 hover:bg-indigo-500 text-white px-4 py-2 rounded-md">Add Team Member</button>
            </form>

            <!-- Team Members Table -->
            @if (count($teamMembers) > 0)
                <h3 class="text-xl font-bold mb-4">Team Members List</h3>
                <table class="w-full">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($teamMembers as $teamMember)
                            <tr class="text-center">
                                <td>{{ $teamMember->name }}</td>
                                <td>{{ $teamMember->position }}</td>
                                <td>
                                    <form action="{{ route('team.destroy', $teamMember->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-800 focus:outline-none">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-5 w-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                            </svg>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p>No team members added yet.</p>
            @endif
        </div>
    </div>
@endsection
