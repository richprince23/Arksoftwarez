<!-- resources/views/dashboard/index.blade.php -->

@extends('layouts.dashboard')

@section('content')
    <div class="container mx-auto my-10">
        <div class="flex flex-row-reverse">
            <p>Welcome {{Auth::user()->name ?? "Admin"}}</p>
        </div>
        <h1 class="text-3xl font-bold mb-6">Dashboard</h1>
        <div class="grid grid-cols-2 gap-4">
            <div class="border p-4 rounded">
                <h2 class="text-xl font-semibold mb-2">Team Members</h2>
                <p class="text-gray-600">{{ $teamMembersCount }} entries</p>
            </div>
            <div class="border p-4 rounded">
                <h2 class="text-xl font-semibold mb-2">Inquiries</h2>
                <p class="text-gray-600">{{ $inquiriesCount }} entries</p>
            </div>
            <div class="border p-4 rounded">
                <h2 class="text-xl font-semibold mb-2">App Requests</h2>
                <p class="text-gray-600">{{ $requestsCount }} entries</p>
            </div>
            <div class="border p-4 rounded">
                <h2 class="text-xl font-semibold mb-2">Team Members</h2>
                <p class="text-gray-600">{{ $portfoliosCount }} entries</p>
            </div>
            <div class="border p-4 rounded">
                <h2 class="text-xl font-semibold mb-2">Users</h2>
                <p class="text-gray-600">{{ $usersCount }} entries</p>
            </div>
            <div class="border p-4 rounded">
                <h2 class="text-xl font-semibold mb-2">Posts</h2>
                <p class="text-gray-600">{{ $newsCount }} entries</p>
            </div>

            <!-- Repeat similar blocks for other models -->

        </div>
    </div>
@endsection
