@extends('layouts.dashboard')


@section('title', 'Admin | Inquiries')

@section('content')
    <div class="text-center p-5 w-full bg-indigo-500 mb-10">
        <h2 class="text-white text-4xl">INQUIRIES</h2>
    </div>


    <table class="table-auto border-collapse border w-full rounded-lg">
        <caption class="caption-top">
            A list of all inquiries.
        </caption>
        <thead>
            <tr>
                <th class="border border-indigo-600">Name</th>
                <th class="border border-indigo-600">Email</th>
                <th class="border border-indigo-600">Subject</th>
                <th class="border border-indigo-600">Message</th>
                <th class="border border-indigo-600">Action</th>
            </tr>
        </thead>
        <tbody class="border border-collapse border-indigo-600">
            @foreach ($inquiries as $inquiry)
                <tr>
                    <td class="border border-collapse border-indigo-600 bg-slate-200">
                        {{ $inquiry->first_name . ' ' . $inquiry->last_name }}</td>
                    <td class="border border-collapse border-indigo-600 bg-slate-200">{{ $inquiry->email }}</td>
                    <td class="border border-collapse border-indigo-600 bg-slate-200">{{ $inquiry->subject }}</td>
                    <td class="border border-collapse border-indigo-600 bg-slate-200 hover:h-52">{{ $inquiry->message }}
                    </td>
                    <td class="border border-collapse border-indigo-600 bg-slate-200 flex justify-around">
                        <form action="{{ route('admin.inquiries.destroy', $inquiry->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="p-0">
                                <span class="material-symbols-outlined">
                                    delete
                                </span>
                            </button>
                        </form>
                        {{--  reply --}}
                        <a href="{{ route('admin.inquiries.reply', $inquiry->id) }}">
                            <span class="material-symbols-outlined">
                                reply
                            </span>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div>
        <i class="text-xs">
            {{ $inquiries->count() == 0 ? 'No Inquiries recieved' : ' No. of Inquiries: ' . $inquiries->count() }}
        </i>
    </div>
@endsection
