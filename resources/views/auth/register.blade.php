@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <div class="flex justify-center my-16">
        <div class="w-full rounded-md md:w-8/12 lg:w-6/12">
            <div class="bg-white p-6 border rounded-lg shadow-md">
                <div class="text-2xl font-bold mb-6">{{ __('Register') }}</div>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="name" class="block text-md text-gray-600">{{ __('Name') }}</label>
                        <input id="name" type="text" class="form-input mt-1 block w-full rounded-md @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block text-md text-gray-600">{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="form-input mt-1 block w-full rounded-md @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password" class="block text-md text-gray-600">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-input mt-1 block w-full rounded-md @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password-confirm" class="block text-md text-gray-600">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="form-input mt-1 block w-full rounded-md" name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="flex items-center mb-4">
                        {{-- <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-full">
                            {{ __('Register') }}
                        </button> --}}
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
