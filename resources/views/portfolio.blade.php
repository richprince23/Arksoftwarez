@extends('layouts.app')

@section('title', 'Porfolio')

@section('navbar-title', 'ARK Softwarez')

@section('content')

<header class="max-w-lg mx-auto mt-12 text-center">
    <h1 class="text-5xl mb-2">Apps Powered By Our Platform</h1>
    <p class="text-xl text-gray-500">Hundreds of startups and schools build their apps faster with us.</p>
  </header>

  <!-- Portfolio Gallery -->
  <section class="max-w-6xl mx-auto my-20">

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 mx-5" >

        @foreach ($portfolios as $item)
        <a href="#" class="group h-96 block bg-gray-100 rounded-lg overflow-hidden relative ">
            <img src="{{asset($item->image)}}" loading="lazy" alt="app image" class="w-full h-full object-cover object-center group-hover:scale-110 transition duration-200">
            <div class="bg-gray-900 bg-opacity-50 absolute inset-0 flex justify-center items-center text-white font-bold text-3xl">
              {{$item->name}}
            </div>
          </a>
        @endforeach
      <!-- App 1 -->

      <a href="#" class="group h-96 block bg-gray-100 rounded-lg overflow-hidden relative">
        <img src="{{asset('images/samples/doc.png')}}" loading="lazy" alt="app image" class="w-full h-full object-cover object-center group-hover:scale-110 transition duration-200">
        <div class="bg-gray-900 bg-opacity-50 absolute inset-0 flex justify-center items-center text-white font-bold text-3xl">
          HealthTec
        </div>
      </a>

      <!-- More apps -->
      <a href="#" class="group h-96 block bg-gray-100 rounded-lg overflow-hidden relative">
        <!-- App content -->
      </a>

    </div>

    <div class="text-center mt-12">
      <a href="#" class="inline-block bg-indigo-600 hover:bg-indigo-500 active:bg-indigo-700 focus-visible:ring ring-indigo-300 text-white text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 px-8 py-3">Load More</a>
    </div>

  </section>


@endsection
