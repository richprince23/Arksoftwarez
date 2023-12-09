@extends('layouts.app')

@section('title', 'Contact Us')

@section('navbar-title', 'ARK Softwarez')

@section('content')

    <!-- Page Header -->
  <header class="max-w-lg mx-auto mt-12 text-center">
    <h1 class="text-5xl">Contact Us</h1>
    <p class="text-xl text-gray-500">Got a question? We'd love to hear from you!</p>
  </header>

  <!-- Contact Form -->
  <div class="max-w-lg mx-auto p-8 mb-6">
    <form action="{{ route('contact.submit') }}" method="post" class="validate">
        @csrf
      <div class="grid grid-cols-2 gap-4">
        <input id="firstName" class="border border-gray-400 p-2" type="text" placeholder="First Name" name="first_name" required>
        <input id="lastName" class="border border-gray-400 p-2" type="text" placeholder="Last Name" name="last_name" required>
        <input id="email" class="border border-gray-400 p-2 col-span-2" type="email" name="email" placeholder="Email Address" required>
      </div>
      <input id="subject" class="border border-gray-400 p-2 mt-4 w-full" type="text" name="subject" placeholder="Subject" required>
      <textarea  id="message" class="border border-gray-400 p-2 mt-4 w-full" rows="4" name="message" placeholder="How can we help?" required></textarea>
      <button id="submitBtn" class="bg-indigo-500 text-white py-2 px-4 rounded-md hover:bg-indigo-600 mt-4" type="submit">Submit</button>
    </form>
  </div>

  <!-- Contact Details -->
  <section class="bg-gray-100 py-12">
    <div class="max-w-6xl mx-auto px-4">
      <h2 class="text-2xl mb-12 text-center">Contact Details</h2>
      <div class="flex flex-col md:flex-row md:justify-between">

        <div class="text-center mb-8 md:mb-0">
          <h4 class="font-medium mb-4">Phone</h4>
          <p class="text-lg text-gray-500">+233245001476</p>
        </div>

        <div class="text-center mb-8 md:mb-0">
          <h4 class="font-medium mb-4">Email</h4>
          <p class="text-lg text-gray-500">contact@arksoftwarez.com</p>
        </div>

        <div class="text-center mb-8 md:mb-0">
          <h4 class="font-medium mb-4">Address</h4>
          <p class="text-lg text-gray-500">Lagoon Lodge St & University Street, South, Winneba</p>
        </div>

      </div>


      <div id="map">
            <iframe
                class="locmap w-full h-96 rounded-lg my-10"
                {{-- src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.430110511199!2d-0.6202233850443436!3d5.340740096116571!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdfac50da32a71b%3A0x703421c0ffa626ad!2sARK+Softwarez!5e0!3m2!1sen!2sgh!4v1523462139477" --}}
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.430110511199!2d-0.6202233850443436!3d5.340740096116571!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdfac50da32a71b%3A0x703421c0ffa626ad!2sLagoon+Lodge!5e0!3m2!1sen!2sgh!4v1523462139477"

                {{-- width="100%" --}}
                {{-- height="450" --}}
                frameborder="0"
                style="border:0"
                allowfullscreen="">
            </iframe>

        </div>
    </div>

  </section>

  <script>
   document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('.validate');
    const inputs = document.querySelectorAll('.validate input, .validate textarea');



    // validation function
    function validate(field, regex) {
      if (regex.test(field.value)) {
        field.className = 'valid';
      } else {
        field.className = 'invalid';
      }
    }

    inputs.forEach((input) => {
      input.addEventListener('keyup', (e) => {
        // console.log(patterns[e.target.attributes.name.value]);
        validate(e.target, patterns[e.target.attributes.name.value]);
      });
    });

    // form.addEventListener('submit', (e) => {
    //   e.preventDefault();

    //     fetch('/contact', {
    //         method: 'post',
    //         headers: {
    //             'Content-Type': 'application/json',
    //             'Accept': 'application/json, text-plain, */*',
    //             'X-Requested-With': 'XMLHttpRequest',
    //             'X-CSRF-TOKEN': '{{ csrf_token() }}'
    //         },
    //         body: JSON.stringify({
    //             firstName: document.querySelector('#firstName').value,
    //             lastName: document.querySelector('#lastName').value,
    //             email: document.querySelector('#email').value,
    //             subject: document.querySelector('#subject').value,
    //             message: document.querySelector('#message').value
    //         })
    //     }).then((result) => {
    //         alert('Message sent successfully');
    //     }).catch((err) => {
    //         alert('An error occured. Please try again later');
    //     });
    // });



    });

  </script>
@endsection
