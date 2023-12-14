@extends('layouts.dashboard')


@section('title', 'Admin | Inquiries')

@section('content')
    <div class="text-center p-5 w-full bg-indigo-500 mb-10">
        <h2 class="text-white text-4xl">INQUIRIES</h2>
    </div>


    <table class="min-w-full bg-white border border-gray-300">
        <thead>
            <tr class="bg-gray-100">
                <th class="py-2 px-4 border-b">First Name</th>
                <th class="py-2 px-4 border-b">Last Name</th>
                <th class="py-2 px-4 border-b">Email</th>
                <th class="py-2 px-4 border-b">Subject</th>
                <th class="py-2 px-4 border-b">Message</th>
            </tr>
        </thead>
        <tbody>
            @foreach($inquiries as $item)
                <tr data-popover-target="popover-default{{$item->id}}">
                    <td class="py-2 px-4 border-b">{{ $item->first_name}}</td>
                    <td class="py-2 px-4 border-b">{{ $item['last_name'] }}</td>
                    <td class="py-2 px-4 border-b">{{ $item['email'] }}</td>
                    <td class="py-2 px-4 border-b">{{ $item['subject'] }}</td>

                    <td class="py-2 px-4 border-b">{{ $item['message'] }}</td>


                </tr>

                <div data-popover id="popover-default{{$item->id}}" role="tooltip" class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                    <div class="px-3 py-2 bg-indigo-600 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                        <h3 class="font-semibold text-white dark:text-white">{{ $item->subject }}</h3>
                    </div>
                    <div class="px-3 py-2">
                        <p>{{ $item->message }}</p>
                    </div>
                    <div data-popper-arrow></div>
                </div>
            @endforeach
        </tbody>
    </table>
    <div>
        <i class="text-xs">
            {{ $inquiries->count() == 0 ? 'No Inquiries recieved' : ' No. of Inquiries: ' . $inquiries->count() }}
        </i>
    </div>

    <?php $val = false; ?>
    <div class="alert" hidden>
        <x-alert-modal title="Send Reply" details="Send new messaage"/>
    </div>
    <script>
        document.addEventListener("DOMContentloaded", function() {

            // // Get references to modal and button
            // const modal = document.querySelector('.alertModal');
            // const openModalButton = document.getElementById('openModalButton');

            // Add an event listener to the button
            openModalButton.addEventListener('click', () => {
                alert('open')

                // Show the modal by adding the necessary classes
                modal.classList.toggle('hidden');

            });

            // const cancelButton = document.querySelector('.cancelBtn');
            // // const modal = document.querySelector('.alertModal');

            // cancelButton.addEventListener('click', () => {
            //     // Close the modal by removing the necessary classes
            //     alert("close");
            //     modal.classList.remove('opacity-100', 'translate-y-0', 'sm:scale-100');
            // });


        });
    </script>
@endsection
