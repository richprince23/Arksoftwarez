@extends('layouts.app')

@section('title', 'App Building Startup')

@section('navbar-title', 'Ark Softwarez')

@section('content')
<?php
    $services = ["Tech Support","Search Engine Optimization", "Software Consulting", "Social Media Marketing", "Software Integration", "Data Analytics & Visualization", "App Migration & Upgrading", "App Performance Optimization", "Software Training & Education"];
?>
    <!-- Hero Section -->
    <section id="hero">
        <div class="container mx-auto p-12 md:flex justify-between items-center">
            <div class="space-y-5">
                <h1 class="text-6xl md:text-7xl font-bold max-w-lg mb-5">Build Stunning Mobile & Web Apps</h1>
                <p class="text-lg text-gray-800 mb-5">Our software startup helps businesses build, deploy and
                    scale beautiful, functional apps with ease that grows sale and online presence.</p>
                <button class="bg-indigo-600 hover:bg-indigo-500 rounded-md py-4 px-8 text-white text-lg mb-6">Get Started</button>
            </div>
            <img src="{{asset('images/bg.jpg')}}" alt='Photo by <a href="https://unsplash.com/@jiaweizhao?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash">Jiawei Zhao</a> on <a href="https://unsplash.com/photos/black-laptop-computer-on-brown-wooden-table-lHgHO7IBVFg?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash">Unsplash</a>
            ' class="w-96 md:ml-10 rounded-md mt-6" loading="lazy">
        </div>
    </section>

    <!-- Features Grid -->
    <section id="features" class="bg-gray-100  pt-10 pb-20">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-medium mb-12 text-center">Our Services</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                <!-- Feature 1-->
                <div class="border border-indigo-400 rounded-lg p-6 hover:shadow-lg hover:bg-white">
                    <h3 class="text-xl mb-2 font-medium">B2B App Development</h3>
                    <p>We specialize in building enterprise-grade B2B applications that streamline workflows, boost
                        productivity, and enhance customer experiences.</p>
                </div>
                <!-- Feature 2-->
                <div class="border border-indigo-400 rounded-lg p-6 hover:shadow-lg hover:bg-white">
                    <h3 class="text-xl mb-2 font-medium">Consumer App Development</h3>
                    <p>We create engaging and user-friendly consumer apps that solve real problems, attract new users, and
                        foster brand loyalty.</p>
                </div>
                <!-- Feature 3-->
                <div class="border border-indigo-400 rounded-lg p-6 hover:shadow-lg hover:bg-white">
                    <h3 class="text-xl mb-2 font-medium">UI/UX Design</h3>
                    <p>Our experienced designers create intuitive and aesthetically pleasing user interfaces that deliver
                        exceptional user experiences</p>
                </div>

                <div class="border border-indigo-400 rounded-lg p-6 hover:shadow-lg hover:bg-white">
                    <h3 class="text-xl mb-2 font-medium">Freelance Software Development</h3>
                    <p>We connect you with experienced freelance software developers to tackle specific projects or augment
                        your in-house team.</p>
                </div>

                <div class="border border-indigo-400 rounded-lg p-6 hover:shadow-lg hover:bg-white">
                    <h3 class="text-xl mb-2 font-medium">Cybersecurity Consulting and Services</h3>
                    <p>We help you assess, plan, and implement robust cybersecurity measures to protect your organization's
                        data and infrastructure.</p>
                </div>

                <div class="border border-indigo-400 rounded-lg p-6 hover:shadow-lg hover:bg-white">
                    <h3 class="text-xl mb-2 font-medium">Network Design and Implementation</h3>
                    <p>We design, implement, and manage secure and scalable network solutions to support your business
                        connectivity needs.</p>
                </div>
            </div>

            <div class="text-center my-5">
                <h3 class ="text-xl font-medium">Other Services</h3>

            </div>
        <div class="flex flex-col md:flex-row flex-wrap justify-center">
            @each("components.services", $services, 'service')
        </div>
    </section>

    <section id="bg-image-section" class="my-5">
        <img src="{{asset('images/bg1.png')}}" alt="Happy clients">
    </section>

    <!-- Testimonials & Video Section -->
    <section id="video" class="pt-5 pb-10">
        <div class="container mx-auto px-6 flex flex-col md:flex-row">
            <!-- Left video -->
            <div class="w-full basis-3/5 md:pr-7 md:w-3/5">
                <h3 class="text-3xl mb-5 font-medium">Develop with confidence</h3>
                <p class="mb-4 text-gray-600">Our platform helps businesses expand and scale faster. </p>
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/YOUTUBE_VIDEO_ID"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
            <!-- Right testimonials-->
            <div class="w-full mt-12 basis-2/5 md:ml-7 md:mt-0 md:w-2/5">
                <h3 class="text-xl font-medium mb-6">Clients' Feedback</h3>
                <div class="flex mb-6">
                    <img src="{{asset('images/bukyia.png')}}" alt="bukyia logo" class="w-20 h-20 rounded-full">
                    <div class="pl-4">
                        <p class="italic font-medium">"Ark Softwarez provided us with the best team to put our business online and helped us scale quickly."</p>
                        <p class="font-medium text-gray-500">Bukyia</p>
                    </div>
                </div>
                <div class="flex">
                    <img src="{{asset('images/infoctess_logo_bg.png')}}" alt="person photo" class="w-20 h-20 rounded-full">
                    <div class="pl-4">
                        <p class="italic font-medium">"We were able to get our mobile app ready within a few weeks and they also helped us onboard members onto the platform"</p>
                        <p class="font-medium text-gray-500">Infoctess UEW</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section id="cta" class="bg-indigo-600">
        <div class="container mx-auto px-6 py-20">
            <h2 class="text-4xl font-bold leading-tight text-white text-center">Start Building Your App Today</h2>
            <div class="mt-12 text-center">
                <a href="{{route('request-quote.form')}}"
                    class="inline-block bg-white hover:bg-gray-100 active:bg-gray-200 focus-visible:ring ring-indigo-300 text-indigo-600 text-lg font-semibold text-center rounded-lg outline-none transition duration-100 px-8 py-3">Get
                    Started</a>
            </div>
        </div>
    </section>

@endsection
