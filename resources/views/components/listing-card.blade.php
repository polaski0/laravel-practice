@props(['listing'])

<div class="border-[1px] max-h-max bg-white shadow-md flex flex-col gap-2 p-4 rounded-lg">
    <div class="w-full flex justify-center items-center max-h-64 overflow-hidden">
        {{-- <div class="w-full h-64 bg-auto bg-center bg-no-repeat bg-[url('/public/images/no-image.png')]"></div> --}}
        <img class="w-full h-full" src="{{ asset('/images/no-image.png') }}" alt="No image available">
    </div>
    <div class="w-full flex flex-col gap-4">
        <div>
            <a class="text-red-500 font-bold text-2xl" href="/listing/{{ $listing->id }}">{{ $listing->title }}</a>
        </div>
        <div class="flex flex-col">
            <p>{{ $listing->company }}</p>
            <p class="text-gray-400">{{ $listing->location }}</p>
        </div>
        <div>
            <p>{{ $listing->tags }}</p>
        </div>
    </div>
</div>
