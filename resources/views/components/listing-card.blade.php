@props(['listing'])

<x-card>
    <div class="w-full flex justify-center items-center max-h-64 overflow-hidden">
        <img class="w-full" src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png') }}" alt="Image">
    </div>
    <div class="w-full flex flex-col gap-4">
        <div>
            <a class="text-red-500 font-bold text-2xl underline"
                href="/listings/{{ $listing->id }}">{{ $listing->title }}</a>
        </div>
        <div class="flex flex-col">
            <p>{{ $listing->company }}</p>
            <p class="text-gray-400">{{ $listing->location }}</p>
        </div>
        <div>
            <x-listing-tags :tagsList="$listing->tags" />
        </div>
    </div>
</x-card>
