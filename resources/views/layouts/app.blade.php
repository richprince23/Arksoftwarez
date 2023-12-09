<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    @vite('resources/css/app.css')
    <title>@yield('title', 'App Building Software Startup')</title>
</head>

<body>
    {{-- Navbar --}}
    <nav class="bg-indigo-600 p-4 flex justify-between items-center">
        <div class="text-white font-bold text-2xl">
            <a href="/"> @yield('navbar-title', 'ARK Softwarez')</a>
        </div>
        <!-- Toggle button for small screens -->
        <button id="menu-toggle" class="md:hidden text-white">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
        <div class="text-white hidden md:flex">
            <a href="/about" class="p-2 hover:underline">About</a>
            <a href="/pricing" class="p-2 hover:underline">Pricing</a>
            <a href="/portfolio" class="p-2 hover:underline">Portfolio</a>
            <a href="/contact" class="p-2 hover:underline">Contact</a>
        </div>
    </nav>

    <!-- Mobile navigation menu (hidden by default) -->
    <div id="mobile-menu" class="md:hidden bg-indigo-600 text-white p-4">
        <a href="/about" class="block py-2 hover:underline">About</a>
        <a href="/pricing" class="block py-2 hover:underline">Pricing</a>
        <a href="/portfolio" class="block py-2 hover:underline">Portfolio</a>
        <a href="/contact" class="block py-2 hover:underline">Contact</a>
    </div>

    <!-- Success message -->
    @if (session('success'))
        <div class="bg-green-200 p-4">
            {{ session('success') }}
        </div>
    @endif

    <!-- Content Section -->
    <div class="container mx-auto">
        @yield('content')
    </div>

     <!-- Footer -->
  <footer class="bg-gray-900">
    <div class="container mx-auto px-6 py-10 text-white">
      <div class="md:flex justify-between items-center">
        <div class="mb-6 md:mb-0">
          <a href="#" class="text-2xl font-bold">ARK Softwarez</a>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-y-4">
          <div class="text-sm">
            <h3 class="font-medium mb-4">Product</h3>
            <a href="#">App builder</a>
            <a href="#">App hosting</a>
            <a href="#">App domains</a>
            <a href="#">App market</a>
          </div>
          <div class="text-sm">
            <h3 class="font-medium mb-4">Services</h3>
            <a href="#">Documentation</a>
            <a href="#">Download apps</a>
            <a href="#">Become an affiliate</a>
          </div>
          <div class="text-sm">
            <h3 class="font-medium mb-4">Company</h3>
            <a href="#">About</a>
            <a href="#">Investor relations</a>
            <a href="#">Jobs</a>
            <a href="#">Press kit</a>
          </div>
          <div class="text-sm">
            <h3 class="font-medium mb-4">Community</h3>
            <a href="#">Forums</a>
            <a href="#">Code snippets</a>
            <a href="#">Blog</a>
          </div>
        </div>
      </div>
      <div class="pt-4 flex justify-between items-center border-t border-gray-800">
        <p>&copy; 2023 ARK Softwarez. All rights reserved.</p>
        <div>
          <a href="#" class="w-9 h-9 rounded-full flex justify-center items-center border border-gray-500 text-gray-500 ml-3 hover:text-white hover:bg-gray-500 hover:border-gray-500">
            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M18.6668 6.67334C17.402 6.67334 16.2675 7.00067 15.2802 7.574C14.2929 8.14734 13.4996 8.91734 13 9.83334V9.84V14.3333H17.3333L17.7333 11.2H13V10.92C13 10.6533 13.1408 10.4 13.349 10.325C14.4713 9.99333 15.8408 10 17.3133 10C19.566 10 21 11.9187 21 14.16V17.6666H18V14.5667H17.3333V17.6666H14V14.5667H13.4533L13 14.3333H17.335V9.84668C16.968 9.84668 16.6158 9.67001 16.3192 9.38268C16.0226 9.09534 15.826 8.70067 15.7333 8.26634L15.669 7.83334C15.6035 7.73467 15.5999 7.62001 15.658 7.53334L16.4933 6.00001C16.5808 5.86734 16.6458 5.71734 16.68 5.57734C16.7142 5.43734 16.7175 5.30234 16.69 5.16634C16.6625 5.03034 16.6042 4.90301 16.52 4.80034C16.4358 4.69767 16.3283 4.62001 16.2146 4.57201C16.101 4.52401 15.9814 4.50634 15.86 4.52004C15.4483 4.52004 15.0715 4.59434 14.76 4.74201C14.4485 4.88967 14.2126 5.10234 14.074 5.37334L13 6.00002V6.00002Z" stroke="currentColor" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"></path>
              <path d="M16.6663 9.33301H18.6663C18.9196 9.33301 19.1496 9.46967 19.2929 9.68601C19.4363 9.90234 19.5 10.184 19.5 10.4667V14.5C19.5 14.7826 19.4363 15.064 19.2929 15.2803C19.1496 15.4967 18.9196 15.6333 18.6663 15.6333H16.6663M15 12H17M15 14H17" stroke="currentColor" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
          </a>
          <a href="#" class="w-9 h-9 rounded-full flex justify-center items-center border border-gray-500 text-gray-500 hover:text-white hover:bg-gray-500 hover:border-gray-500">
            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M7.8 20H16.2C17.7167 20 19 18.7308 19 17.2222V6.77777C19 5.26915 17.7167 4 16.2 4H7.8C6.28332 4 5 5.26915 5 6.77777V17.2222C5 18.7308 6.28332 20 7.8 20Z" stroke="currentColor" stroke-width="1.11111" stroke-linecap="round" stroke-linejoin="round"></path>
              <path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="currentColor" stroke-width="1.11111" stroke-linecap="round" stroke-linejoin="round"></path>
              <path d="M3.6 7H20.4" stroke="currentColor" stroke-width="1.11111" stroke-linecap="round" stroke-linejoin="round"></path>
              <path d="M3.6 11H20.4" stroke="currentColor" stroke-width="1.11111" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </footer>


  <script>
    // const button = document.getElementById('navbarToggle');
    // const menu = document.getElementById('navbarMenu');

    // button.addEventListener('click', () => {
    //   menu.classList.toggle('hidden');
    // })

    document.getElementById('menu-toggle').addEventListener('click', function () {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });
  </script>

</body>

</html>
