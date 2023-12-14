@extends('layouts.app')

@section('title', 'About Us')

@section('navbar-title', 'ARK Softwarez')

@section('content')

    <!-- Hero Section -->
    <!-- Page Header -->
    <header class=" mx-auto mt-12 text-center">
        <h1 class="text-5xl">About Us</h1>
        <p class="text-xl text-gray-500">Learn more about our platform.</p>
    </header>

    <section id="bg-image-section" class="mt-5">
        <img src="{{ asset('images/img4.jpg') }}" alt="Happy clients" class=" img-responsive">
    </section>

    <!-- About Details -->
    <section class="max-w mx-auto mt-5 mb-20 p-12">
        <h2 class="text-3xl mb-6">Helping Businesses Succeed</h2>
        <p class="text-gray-500 mb-6">
            Our software startup began as a solution for ourselves before becoming a fully fledged business. As developers,
            we understand first-hand the challenges businesses face while building apps. Because of this, we decided to
            build a solution that empowers businesses to grow faster and smarter.
        </p>

        <h2 class="text-3xl mb-6 mt-10">Revolutionalizing Education</h2>
        <p class="text-gray-500 mb-6">
            We're not just building apps – we're building a brighter future for education. We're working with schools to
            develop innovative software solutions that empower both students and teachers, leading to a more engaging and
            effective learning experience.
        </p>

        <h2 class="text-3xl mb-6 mt-10">Causing Societal Change</h2>
        <p class="text-gray-500 mb-6">
            We are also working with NGOs to help them build apps that will help them achieve their goals. We are working
            with NGOs that are working to achieve the Sustainable Development Goals (SDGs) to help them achieve their goals.
        </p>

        <p class="text-gray-500 mb-6">
            Today, over 100+ schools and businesses use our platform to work faster and smarter. We're proud to be helping
            businesses and schools succeed, and we're excited for what the future holds.
        </p>

        <div class="">
            {{-- mission and vision --}}
            <div class="text-center my-20 border border-indigo-600 rounded-xl p-8 md:p-20">
                <h3 class="text-2xl mb-5 underline decoration-indigo-600">Our Mission</h3>
                <p class="text-gray-500">Leverage software innovation to propel small business success, transform education,
                    and build an equitable society</p>

                <h3 class="text-2xl mb-5 mt-5 underline decoration-indigo-600">Our Vision</h3>
                <p class="text-gray-500">To be a catalyst for positive social change, leveraging the power of technology to
                    address critical issues and build a better future</p>
            </div>

            <!-- Founders -->
            <h3 class="text-2xl my-20 text-center">Our Team</h3>
            <div class="flex-column md:flex md:flex-row flex-wrap justify-center">
                @foreach ($team as $member)
                <div class="text-center m-5">
                    <img src="{{ asset($member->image) }}" alt="founder photo"
                        class="w-48 h-48 rounded-full inline-block mb-2">
                    <p class="text-xl font-medium">{{$member->name}}</p>
                    <p class="italic text-gray-500">{{$member->position}}</p>
                </div>

                @endforeach
                {{-- <div class="text-center m-5">
                    <img src="{{ asset('images/team/aba.jpg') }}" alt="founder photo"
                        class="w-48 h-48 rounded-full inline-block mb-2">
                    <p class="text-xl font-medium">Maame Aba Crentsil</p>
                    <p class="italic text-gray-500">Product Designer</p>
                </div>
                <div class="text-center m-5">
                    <img src="{{ asset('images/team/ernest.jpg') }}" alt="founder photo"
                        class="w-48 h-48 rounded-full inline-block mb-2">
                    <p class="text-xl font-medium">Ernest Trekpah</p>
                    <p class="italic text-gray-500">Project Manager</p>
                </div>
                <div class="text-center m-5">
                    <img src="{{ asset('images/team/desmond.jpg') }}" alt="founder photo"
                        class="w-48 h-48 rounded-full inline-block mb-2">
                    <p class="text-xl font-medium">Desmond Adabe</p>
                    <p class="italic text-gray-500">Software Developer</p>
                </div> --}}
            </div>
        </div>

        <!-- Investors & Partners -->
        <div class="mt-16">
            <h2 class="text-2xl mb-6 text-center ">Investors & Partners</h2>

            <div class="flex flex-wrap justify-center">
                <img class="h-20 object-contain" src="{{ asset('images/bukyia.png') }}">
            </div>
        </div>

    </section>

    <!-- Call to Action -->
    <section id="cta" class="bg-indigo-600">
        <div class="container mx-auto px-6 py-20 text-center text-white">
            <h2 class="text-4xl font-bold mb-2">Join the multitude of businesses and schools already building with us</h2>
            <p class="mb-8 text-xl opacity-90">Contact us today to start building your apps faster and smarter!</p>
            <a href="/request-quote"
                class="py-3 px-8 text-lg bg-white hover:bg-gray-100 active:bg-gray-200 rounded text-indigo-600 font-semibold">Get
                Started</a>
        </div>
    </section>
@endsection
