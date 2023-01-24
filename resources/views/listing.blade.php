@extends('layout')

@section('content')
    <div class="w-full h-full flex justify-center items-center">
        <div class="w-2/4 h-full flex flex-col p-12 justify-center items-center gap-6">
            <div class="w-full flex flex-col justify-center items-center gap-2">
                <img class="w-48" src="{{ asset('images/no-image.png') }}" alt="No image">
                <p class="text-2xl font-bold">{{ $listing->title }}</p>
                <p class="font-bold">{{ $listing->company }}</p>
                <p>{{ $listing->tags }}</p>
                <p>{{ $listing->location }}</p>
            </div>
            <div class="w-full h-[1px] bg-slate-600"></div>
            <div class="w-full flex flex-col justify-center items-center gap-2">
                <p class="text-4xl font-bold">Job Description</p>
                <p class="text-center">{{ $listing->description }}</p>
            </div>
            <div class="w-full flex flex-col justify-center items-center gap-2">
                <a class="w-full p-2 rounded-md bg-red-500 text-center text-white"
                    href="mailto:{{ $listing->email }}">Contact Employer</a>
                <a class="w-full p-2 rounded-md bg-black text-center text-white" href="{{ $listing->website }}">Visit
                    Website</a>
            </div>
        </div>
    </div>
@endsection
