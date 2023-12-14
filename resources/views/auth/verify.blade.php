@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <div class="flex justify-center my-16">
        <div class="w-full md:w-8/12 lg:w-6/12">
            <div class="bg-white p-6 border rounded-lg shadow-md">
                <div class="text-2xl font-bold mb-6">{{ __('Verify Your Email Address') }}</div>

                @if (session('resent'))
                    <div class="alert alert-success mb-6" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                @endif

                {{ __('Before proceeding, please check your email for a verification link.') }}
                {{ __('If you did not receive the email') }},

                <form class="inline-block" method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <button type="submit" class="text-blue-500 underline p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
