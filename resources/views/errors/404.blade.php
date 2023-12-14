@extends('layouts.app')

@section('content')


    <div class="w-full md:w-3/4 mx-auto border text-center rounded-lg mb-8 mt-16">
        <h1 class="text-4xl font-bold my-8">404 - Not Found</h1>
        <p class="text-gray-600 my-10">Sorry, the page you are looking for might be in another universe.</p>
        <div class="flex flex-row justify-center">
            <a href="{{ url('/') }}" class="bg-indigo-600 text-white rounded-lg px-4 py-2 my-8 block">Go Home</a>
        </div>
    </div>

    {{-- </div> --}}
@endsection
