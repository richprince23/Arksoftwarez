<!-- resources/views/errors/500.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="w-1/2 md:w-3/4 mx-auto border text-center rounded-lg mb-16 mt-16">
        <h1 class="text-4xl font-bold my-8">500 - Internal Server Error</h1>
        <p class="text-gray-600 my-10">Oops! Something went wrong on our server. We're working to fix it.</p>
        <div class="flex flex-row text-center">
            <a href="{{ url('/') }}" class="bg-indigo-600 text-white rounded-lg px-4 py-2 my-4 mx-auto block">Go Home</a>
        </div>
    </div>


@endsection
