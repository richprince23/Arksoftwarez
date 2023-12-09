@extends('layouts.app')

@section('title', 'Pricing Plans')

@section('navbar-title', 'ARK Softwarez')

@section('content')

    <!-- Page Header -->
  <header class="max-w-lg mx-auto mt-12 text-center">
    <h1 class="text-5xl">Pricing Plans</h1>
    <p class="text-xl text-gray-500 mt-4">Flexible plans to meet your app development needs.</p>
  </header>

  <!-- Pricing Table -->
  <section class="max-w-5xl  mx-5 md:mx-auto my-20">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
    <!-- Small Biz Plan -->
        <div class="flex flex-col justify-between border rounded-lg p-8 text-center mb-8">
            <div>
                <h2 class="text-2xl font-medium mb-4">Starter</h2>
                <p class="text-5xl font-bold mb-8">$800</p>
                {{-- <p class="text-gray-500 mb-8">One Off</p> --}}
                <hr class="mb-5">
                <div class="text-left">
                    <div class="flex items-center mb-4">
                        <span>Ideal for simple apps with limited features and functionality</span>
                    </div>
                    <div class="flex items-center mb-4">
                        <span>Suitable for startups and small businesses with a limited budget</span>
                    </div>
                    <i>Includes: </i>
                    <x-price-feature caption="Design and development of core app features"/>
                    <x-price-feature caption="Single platform (Android/iOS/Web/Desktop)"/>
                    <x-price-feature caption="Basic backend functionality"/>
                    <x-price-feature caption="Basic analytics and reporting"/>
                    <x-price-feature caption="10 GB Cloud Storage"/>
                    <x-price-feature caption="1 Free revision"/>
                </div>
            </div>


            <a href="/request-quote" class="bottom-0 inline-block bg-indigo-600 hover:bg-indigo-500 active:bg-indigo-700 focus-visible:ring ring-indigo-300 text-white text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 px-8 py-3 mt-6">Start Building</a>
        </div>

    <!-- Medium Biz Plan -->
        <div class="flex flex-col justify-between border border-indigo-600 border-2 rounded-lg p-8 text-center">
            <div>
                {{-- <span class="bg-indigo-600 text-white px-3 py-1 rounded-full text-sm font-semibold mb-4 inline-block">Most Popular</span> --}}

                <h2 class="text-2xl font-medium mb-4">Standard</h2>

                <p class="text-5xl font-bold mb-8">$1,500</p>

                {{-- <p class="text-gray-500 mb-8">One Off</p> --}}
                <hr class="mb-5">

                <div class="text-left">

                    <div class="text-left">
                        <div class="flex items-center mb-4">
                            <span>Ideal for apps with more complex features and functionality</span>
                        </div>
                        <div class="flex items-center mb-4">
                            <span>Suitable for startups and businesses looking for a more robust solution</span>
                        </div>
                        <i>Includes: </i>
                        <x-price-feature caption="All features of the Basic plan"/>
                        <x-price-feature caption="Additional features"/>
                        <x-price-feature caption="Multi-platform development (Android and iOS/Web)"/>
                        <x-price-feature caption="More advanced backend functionality"/>
                        <x-price-feature caption="Integration with third-party APIs"/>
                        <x-price-feature caption="Enhanced analytics and reporting"/>
                        <x-price-feature caption="25 GB Cloud Storage"/>
                        <x-price-feature caption="3 Free revisions"/>
                    </div>

                </div>
            </div>
            <a href="/request-quote" class="bottom-0 inline-block bg-indigo-600 hover:bg-indigo-500 active:bg-indigo-700 focus-visible:ring ring-indigo-300 text-white text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 px-8 py-3 mt-6">Get Started</a>

        </div>

    <!-- Enterprise Plan -->
        <div class="flex flex-col justify-between border rounded-lg p-8 text-center mb-8">
            <div>
                <h2 class="text-2xl font-medium mb-4">Enterprise</h2>
                <p class="text-5xl font-bold mb-8">$3,200</p>
                {{-- <p class="text-gray-500 mb-8">One Off</p> --}}
                <hr class="mb-5">

                <div class="text-left">
                    <div class="flex items-center mb-4">
                        <span>Ideal for complex apps with high-level features and functionality</span>
                    </div>
                    <div class="flex items-center mb-4">
                        <span>Suitable for established businesses and organizations with demanding requirements</span>
                    </div>
                    <i>Includes: </i>
                    <x-price-feature caption="All features of the Standard plan"/>
                    <x-price-feature caption="Design and development of custom features"/>
                    <x-price-feature caption="Scalable backend infrastructure"/>
                    <x-price-feature caption="Enhanced security features"/>
                    <x-price-feature caption="Dedicated account manager"/>
                    <x-price-feature caption="Ongoing support and maintenance"/>
                    <x-price-feature caption="75 GB Cloud Storage"/>
                </div>
            </div>
            <a href="/request-quote" class="bottom-0 inline-block bg-indigo-600 hover:bg-indigo-500 active:bg-indigo-700 focus-visible:ring ring-indigo-300 text-white text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 px-8 py-3 mt-6">Start Building</a>
        </div>
  </div>

    <p class="text-gray-500 text-center mt-6 text-sm">Have specific requirements? <a href="#" class="text-indigo-500 font-medium py-3">Contact us</a> to tailor a custom plan.</p>
  </section>

  <!-- Additional Details -->
  <section class="bg-gray-100 p-8">

    <div class="max-w-3xl mx-auto">

      <!-- Additional Fees -->
      <div class="mb-8">
        <h3 class="text-lg font-semibold mb-4">Additional Fees</h3>

        <div class="space-y-2">
          <div class="flex">
            <svg class="w-6 h-6 text-blue-500 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
            <p>App store submission fees (Apple App Store: $99/year, Google Play Store: $25 one-time fee)</p>
          </div>
          <div class="flex">
            <svg class="w-6 h-6 text-blue-500 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
            <p>Domain Name and Web Hosting Renewals (No fixed fee)</p>
          </div>
          <div class="flex">
            <svg class="w-6 h-6 text-blue-500 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
            <p>Design and development of UI, custom graphics and assets</p>
          </div>
          <div class="flex">
            <svg class="w-6 h-6 text-blue-500 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
            <p>Revisions and Ungoing maintenance and updates</p>
          </div>
          <div class="flex">
            <svg class="w-6 h-6 text-blue-500 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
            <p>Integration with specific third-party services</p>
          </div>

        </div>
      </div>

      <!-- Payment Terms -->
      <div class="mb-8">
        <h3 class="text-lg font-semibold mb-4">Payment Terms</h3>

        <div class="space-y-2">
          <div class="flex">
            <svg class="w-6 h-6 text-blue-500 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
            <p>30% deposit upon signing</p>
          </div>
          <div class="flex">
            <svg class="w-6 h-6 text-blue-500 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
            <p>30% due upon development milestone completion</p>
          </div>
          <div class="flex">
            <svg class="w-6 h-6 text-blue-500 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
            <p>40% due upon project completion</p>
          </div>


          <!-- payment term items -->

        </div>
      </div>

      <!-- Disclaimer -->
      <div>
        <p class="text-gray-500 text-sm">
          This is a sample pricing plan. Some of these fees may not be applicable to you. Actual prices may vary based on project needs. We recommend contacting us for a free consultation and customized quote.
        </p>
      </div>

    </div>

  </section>
@endsection
