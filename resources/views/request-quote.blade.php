@extends('layouts.app')

@section('title', 'Request A Quote')

@section('navbar-title', 'Ark Softwarez')

@section('content')

    <!-- Inquiry Form -->
    <section class="max-w-2xl mx-auto my-8 p-8 bg-white rounded-lg shadow-md">
        <h2 class="text-3xl font-semibold mb-6">App Development Inquiry Form</h2>
        <form id="inquiryForm" action="{{ route('request-quote.submit') }}" method="POST" class="space-y-4">
            @csrf
            <!-- Type of App -->
            <div>
                <label for="appType" class="block text-sm font-medium text-gray-700">Type of App</label>
                <select id="appType" name="app_type" class="mt-1 p-2 w-full border rounded-md" required>
                    <option value="web">Web App</option>
                    <option value="mobile">Mobile App</option>
                    <option value="desktop">Desktop App</option>
                    <option value="multiplatform">Multiplatform App</option>
                </select>


                <div id="platformSelection" class="hidden">
                    <label class="block text-sm font-medium text-gray-700">Platform Selection</label>
                    <div class="mt-1 flex items-center">
                        <!-- Mobile App Platforms -->
                        <div id="mobilePlatforms" class="hidden">
                            <input type="radio" id="android" name="mobilePlatform" value="android" class="mr-2">
                            <label for="android">Android</label>
                            <input type="radio" id="ios" name="mobilePlatform" value="ios" class="ml-4 mr-2">
                            <label for="ios">iOS</label>
                            <input type="radio" id="both" name="mobilePlatform" value="both" class="ml-4 mr-2">
                            <label for="both">Both</label>
                        </div>
                        <!-- Multiplatform App Platforms -->
                        <div id="multiplatformPlatforms" class="hidden">
                            <input type="checkbox" id="androidCheckbox" name="platforms[]" value="android" class="mr-2">
                            <label for="androidCheckbox">Android</label>
                            <input type="checkbox" id="iosCheckbox" name="platforms[]" value="ios" class="ml-4 mr-2">
                            <label for="iosCheckbox">iOS</label>
                            <input type="checkbox" id="webCheckbox" name="platforms[]" value="web" class="ml-4 mr-2">
                            <label for="webCheckbox">Web</label>
                            <!-- Add checkboxes for other platforms as needed -->
                            <input type="checkbox" id="windowsCheckbox" name="platforms[]" value="windows"
                                class="ml-4 mr-2">
                            <label for="windowsCheckbox">Windows</label>
                            <input type="checkbox" id="macCheckbox" name="platforms[]" value="mac" class="ml-4 mr-2">
                            <label for="macCheckbox">macOS</label>
                            <input type="checkbox" id="macCheckbox" name="platforms[]" value="mac" class="ml-4 mr-2">
                            <label for="macCheckbox">Linux</label>
                            <!-- Add more checkboxes as needed -->
                        </div>
                        {{-- desktop platforms --}}
                        <div id="desktopPlatforms" class="hidden">
                            <input type="checkbox" id="dwindowsCheckbox" name="desktop[]" value="windows" class="mr-2">
                            <label for="dwindowsCheckbox">Windows</label>
                            <input type="checkbox" id="dmacCheckbox" name="desktop[]" value="mac" class="ml-4 mr-2">
                            <label for="dmacCheckbox">macOS</label>
                            <input type="checkbox" id="dLinuxCheckbox" name="desktop[]" value="mac" class="ml-4 mr-2">
                            <label for="dLinuxCheckbox">Linux</label>
                            <!-- Add more checkboxes as needed -->
                        </div>

                    </div>
                </div>
            </div>
            {{-- selected pacakeg --}}
            <div>
                <label for="package" class="block text-sm font-medium text-gray-700">Package</label>
                <select id="package" name="package" class="mt-1 p-2 w-full border rounded-md" required>
                    <option value="basic">Starter</option>
                    <option value="standard">Standard</option>
                    <option value="premium">Enterprise</option>
                </select>
            </div>

            {{-- app name --}}
            <div>
                <label for="appName" class="block text-sm font-medium text-gray-700">App Name</label>
                <input type="text" id="appName" name="app_name" class="mt-1 p-2 w-full border rounded-md" required>
            </div>

            <!-- Business Name -->
            <div>
                <label for="businessName" class="block text-sm font-medium text-gray-700">Business Name</label>
                <input type="text" id="businessName" name="business_name" class="mt-1 p-2 w-full border rounded-md"
                    required>
            </div>

            <!-- Business Details -->
            <div>
                <label for="businessDetails" class="block text-sm font-medium text-gray-700">Other Business
                    Details</label>
                <textarea id="businessDetails" name="business_details" class="mt-1 p-2 w-full border rounded-md resize-none"
                    rows="4" required></textarea>
            </div>

            <!-- App Description -->
            <div>
                <label for="appDescription" class="block text-sm font-medium text-gray-700">Detailed App
                    Description</label>
                <textarea id="appDescription" name="app_description" class="mt-1 p-2 w-full border rounded-md resize-none"
                    rows="4" required></textarea>
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" class="mt-1 p-2 w-full border rounded-md"
                    inputmode="email" required>
            </div>

            <!-- Phone Number -->
            <div>
                <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                <input type="tel" id="phone" name="phone" class="mt-1 p-2 w-full border rounded-md"
                    inputmode="tel" required>
                <p class="text-sm text-gray-500">Include country code (e.g., +233 for Ghana)</p>
            </div>

            <!-- Do you have a domain name? -->
            <div>
                <label for="hasDomain" class="block text-sm font-medium text-gray-700">Do you have a domain name?</label>
                <div class="mt-1 flex items-center">
                    <input type="radio" id="hasDomainYes" name="has_domain" value="yes" class="mr-2">
                    <label for="hasDomainYes">Yes</label>
                    <input type="radio" id="hasDomainNo" name="has_domain" value="no" class="ml-4 mr-2">
                    <label for="hasDomainNo">No</label>
                </div>
            </div>

            <!-- Domain Name Input (Conditional) -->
            <div id="domainInput" class="hidden">
                <label for="domainName" class="block text-sm font-medium text-gray-700">Provide your domain name</label>
                <input type="text" id="domainName" name="domain_name" class="mt-1 p-2 w-full border rounded-md"
                    inputmode="url">
            </div>

            <!-- Submit Button -->
            <div>
                <button type="submit"
                    class="bg-indigo-600 hover:bg-indigo-500 text-white px-4 py-2 rounded-md">Submit</button>
            </div>

        </form>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const appTypeSelect = document.getElementById('appType');
            const platformSelection = document.getElementById('platformSelection');
            const mobilePlatforms = document.getElementById('mobilePlatforms');
            const multiplatformPlatforms = document.getElementById('multiplatformPlatforms');
            const desktopPlatforms = document.getElementById('desktopPlatforms');


            appTypeSelect.addEventListener('change', function() {
                const selectedType = appTypeSelect.value;
                // Show/hide platform selection based on the selected Type of App
                platformSelection.classList.toggle('hidden', selectedType !== 'mobile' && selectedType !==
                    'multiplatform' && selectedType !== 'desktop');
                mobilePlatforms.classList.toggle('hidden', selectedType !== 'mobile');
                multiplatformPlatforms.classList.toggle('hidden', selectedType !== 'multiplatform');
                desktopPlatforms.classList.toggle('hidden', selectedType !== 'desktop');
            });

            // Event listener for radio button change
            document.querySelectorAll('input[name="has_domain"]').forEach(function(radio) {
                radio.addEventListener('change', function() {
                    // Show domain input if 'Yes' is selected, hide otherwise
                    const domainInput = document.getElementById('domainInput');
                    if (radio.value === 'yes') {
                        domainInput.classList.remove('hidden');
                    } else {
                        domainInput.classList.add('hidden');
                    }
                });
            });

            // function to make mobilePlatform required if appType is mobile and vice versa
            function makeRequired(field, required) {
                field.required = required;
            }

            // Event listener for appType change
            appTypeSelect.addEventListener('change', function() {
                const selectedType = appTypeSelect.value;

                // // Show/hide platform selection based on the selected Type of App
                // mobilePlatforms.classList.toggle('hidden', selectedType !== 'mobile');
                // desktopPlatforms.classList.toggle('hidden', selectedType !== 'desktop');

                // Set or remove the required attribute based on the selected type
                const radioButtons = document.querySelectorAll('input[name="mobilePlatform"]');
                radioButtons.forEach(function(radio) {
                    radio.required = selectedType === 'mobile';
                });
            });



        });
    </script>

@endsection
