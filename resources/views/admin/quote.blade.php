@extends('layouts.dashboard')
@SECTION('title', "Admin | App Requests")

@section('content')

<div class="container mx-auto p-4">
    <div class="text-center p-5 w-full bg-indigo-500 mb-10">
        <h2 class="text-white text-4xl">APP REQUESTS</h2>
    </div>

    <table class="min-w-full bg-white border border-gray-300">
        <thead>
            <tr class="bg-gray-100">
                <th class="py-2 px-4 border-b">Type of App</th>
                <th class="py-2 px-4 border-b">Platform/Package</th>
                <th class="py-2 px-4 border-b">App Name</th>
                <th class="py-2 px-4 border-b">Business Name</th>
                <th class="py-2 px-4 border-b">Email</th>
                <th class="py-2 px-4 border-b">Phone</th>
                <th class="py-2 px-4 border-b">Domain Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($quotes as $quote)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $quote['app_type'] }}</td>
                    <td class="py-2 px-4 border-b">{{ $quote['platforms'] ?? $quote['package'] }}</td>
                    <td class="py-2 px-4 border-b">{{ $quote['app_name'] }}</td>
                    <td class="py-2 px-4 border-b">{{ $quote['business_name'] }}</td>
                    <td class="py-2 px-4 border-b">{{ $quote['email'] }}</td>
                    <td class="py-2 px-4 border-b">{{ $quote['phone'] }}</td>
                    <td class="py-2 px-4 border-b">{{ $quote['has_domain'] == 'yes' ? $quote['domain_name'] : 'N/A' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection

