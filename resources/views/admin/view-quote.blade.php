@extends('layouts.dashboard')
@section('title', 'Admin | View Quote')

@section('content')
    <div class="container mx-auto my-10">
        <div class="max-w-2xl mx-auto bg-white p-8 rounded shadow-md">
            <a class="underline text-indigo-600 " href="{{ route('admin.quotes') }}">Back</a>
            <h2 class="text-2xl font-bold mb-4">App Request Details</h2>

            <dl class="grid grid-cols-2 gap-4">
                <!-- Type of App -->
                <div>
                    <dt class="text-sm font-medium text-gray-500">Type of App</dt>
                    <dd class="mt-1 text-sm text-gray-900">{{ $quote['app_type'] }}</dd>
                </div>

                <!-- Platform/Package -->
                <div>
                    <dt class="text-sm font-medium text-gray-500">Platforms</dt>
                    <dd class="mt-1 text-sm text-gray-900">
                        @if (isset($quote['platform']))
                            {{ $quote['platform'] }}
                        @else
                            No platfrom specified
                        @endif
                    </dd>
                </div>
                <div>
                    <dt class="text-sm font-medium text-gray-500">Package</dt>
                    <dd class="mt-1 text-sm text-gray-900">
                        @if (isset($quote['package']))
                            <b>{{ $quote['package'] }}</b>
                        @endif
                    </dd>
                </div>

                <!-- App Name -->
                <div>
                    <dt class="text-sm font-medium text-gray-500">App Name</dt>
                    <dd class="mt-1 text-sm text-gray-900">{{ $quote['app_name'] }}</dd>
                </div>

                <!-- Business Name -->
                <div>
                    <dt class="text-sm font-medium text-gray-500">Business Name</dt>
                    <dd class="mt-1 text-sm text-gray-900">{{ $quote['business_name'] }}</dd>
                </div>

                <!-- Business Details -->
                <div>
                    <dt class="text-sm font-medium text-gray-500">Other Business Details</dt>
                    <dd class="mt-1 text-sm text-gray-900">{{ $quote['business_details'] }}</dd>
                </div>

                <!-- App Description -->
                <div>
                    <dt class="text-sm font-medium text-gray-500">Detailed App Description</dt>
                    <dd class="mt-1 text-sm text-gray-900">{{ $quote['app_description'] }}</dd>
                </div>

                <!-- Email -->
                <div>
                    <dt class="text-sm font-medium text-gray-500">Email</dt>
                    <dd class="mt-1 text-sm text-gray-900">{{ $quote['email'] }}</dd>
                </div>

                <!-- Phone Number -->
                <div>
                    <dt class="text-sm font-medium text-gray-500">Phone Number</dt>
                    <dd class="mt-1 text-sm text-gray-900">{{ $quote['phone'] }}</dd>
                </div>

                <!-- Domain Name -->
                <div>
                    <dt class="text-sm font-medium text-gray-500">Domain Name</dt>
                    <dd class="mt-1 text-sm text-gray-900">
                        @if (isset($quote['has_domain']) && $quote['has_domain'] == 'yes')
                            {{ $quote['domain_name'] }}
                        @else
                            No domain provided
                        @endif
                    </dd>
                </div>
            </dl>
        </div>
    </div>
@endsection
