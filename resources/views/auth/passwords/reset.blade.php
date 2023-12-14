@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <div class="flex justify-center my-16">
        <div class="w-full md:w-8/12 lg:w-6/12">
            <div class="card p-6 rounded-lg shadow-md">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="mb-6">
                            <label for="email" class="block text-sm font-medium text-gray-700">{{ __('Email Address') }}</label>

                            <input id="email" type="email" class="mt-1 p-2 w-full border rounded-md @error('email') border-red-500 @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="password" class="block text-sm font-medium text-gray-700">{{ __('Password') }}</label>

                            <input id="password" type="password" class="mt-1 p-2 w-full border rounded-md @error('password') border-red-500 @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="password-confirm" class="block text-sm font-medium text-gray-700">{{ __('Confirm Password') }}</label>

                            <input id="password-confirm" type="password" class="mt-1 p-2 w-full border rounded-md" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <button type="submit" class="bg-indigo-600 hover:bg-indigo-500 text-white px-4 py-2 rounded-md">
                                {{ __('Reset Password') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
