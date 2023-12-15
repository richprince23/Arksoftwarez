<!-- resources/views/layouts/dashboard.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('images/brand/ark_logo_white.png')}}" type="image/x-icon">
    <title>@yield('title')</title>
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Styles -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20,400,0,0" />

</head>

<body>
    <div class=" h-screen ">
        <div class="p-3 m-0 bg-indigo-600 flex flex-row justify-between md:hidden">
            <a href="/" class="text-white font-bold text-xl">ARK Softwarez</a>
            <button id="menu-toggle" class="md:hidden text-white">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7">
                    </path>
                </svg>
            </button>
        </div>

        <div class="flex flex-col md:flex-row h-full">
            <!-- Side navigation -->
            <nav id="side-nav" class="bg-gray-800 w-full md:w-60 px-2 h-100 hidden md:block">

                <div class="py-3 mb-6">
                    <a href="/" class="text-white font-bold text-xl">ARK Softwarez</a>
                </div>
                @auth

                <ul>
                    <li>
                        <a href="{{ route('admin.home') }}"
                            class="flex text-sm text-gray-400 py-2 px-3 rounded hover:text-white">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                </path>
                            </svg>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.team') }}"
                            class="flex text-gray-400 py-2 px-3 rounded hover:text-white">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                                </path>
                            </svg>

                            Team
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.inquiries') }}"
                            class="flex text-gray-400 py-2 px-3 rounded hover:text-white">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-2m-4-1v8m0 0l3-3m-3 3L9 8m-5 5h2.586a1 1 0 01.707.293l2.414 2.414a1 1 0 00.707.293h3.172a1 1 0 00.707-.293l2.414-2.414a1 1 0 01.707-.293H20">
                                </path>
                            </svg>
                            Inquiries
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.quotes') }}"
                            class="flex text-gray-400 py-2 px-3 rounded hover:text-white">
                            <span class="material-symbols-outlined mr-2">
                                request_quote
                            </span>
                            Requests
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.portfolio') }}"
                            class="flex text-gray-400 py-2 px-3 rounded hover:text-white">

                            <span class="material-symbols-outlined mr-2">
                                work
                            </span>
                            Portfolio
                        </a>
                    </li>
                    <li>
                        <a href="/users" class="flex text-gray-400 py-2 px-3 rounded hover:text-white">
                            <span class="material-symbols-outlined mr-2">
                                manage_accounts
                            </span>
                            Users
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.news')}}" class="flex text-gray-400 py-2 px-3 rounded hover:text-white">
                            <span class="material-symbols-outlined mr-2">
                                newspaper
                                </span>
                            News
                        </a>
                    </li>

                </ul>

                <div class="mt-auto">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="">
                        @csrf
                        <button type="submit"
                            class="flex items-center text-red-500 py-2 px-3 rounded hover:bg-red-500 hover:text-white">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Logout
                        </button>
                    </form>
                </div>
                @endauth

            </nav>



            <!-- Page content -->
            <main class="p-6 flex-1 overflow-y-auto">
                <!-- Success message -->
                @if (session('success'))
                    <div class="bg-green-200 p-4">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="bg-red-500 p-4 text-white">
                        {{ session('error') }}
                    </div>
                @endif

                @yield('content')
            </main>

        </div>


    </div>

    <script>
        document.getElementById('menu-toggle').addEventListener('click', function() {
            document.getElementById('side-nav').classList.toggle('hidden');
        });
    </script>
</body>

</html>
