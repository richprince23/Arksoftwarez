@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <div class="flex justify-center my-16">
        <div class="w-full md:w-8/12 lg:w-6/12">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="text-2xl font-bold mb-6">{{ __('Login') }}</div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="email" class="block text-md text-gray-600">{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="form-input mt-1 block w-full rounded-md" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password" class="block text-md text-gray-600">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-input mt-1 block w-full rounded-md" name="password" required autocomplete="current-password">

                        @error('password')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <div class="flex items-center">
                            <input class="form-checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="ml-2 text-sm text-gray-600" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>

                    <div class="flex items-center mb-4">
                        <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-lg">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="ml-4 text-sm text-blue-500 hover:underline" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
