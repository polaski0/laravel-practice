<x-layout>
    <div class="w-full h-full flex flex-col justify-center items-center">
        <x-card class="w-2/4 mx-24 mt-8 lg:mx-48 gap-6">
            <div class="flex flex-row justify-between items-center">
                <a class="self-start font-bold" href="/">&larr; Back</a>
                <div class="flex flex-row gap-2">
                    <a class="text-sm bg-red-500 px-2 py-1 text-white rounded-md" href="/listings/{{ $listing->id }}/edit">
                        Edit
                    </a>
                    <form action="/listings/{{$listing->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="text-sm px-2 py-1 border rounded-md" type="submit">Delete</button>
                    </form>
                    {{-- <a class="text-sm border px-2 py-1 rounded-md" href="/listings/{{ $listing->id }}/edit">
                        Delete
                    </a> --}}
                </div>
            </div>
            <div class="w-full flex flex-col justify-center items-center gap-2">
                <img class="h-full max-w-56 max-h-56"
                    src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png') }}"
                    alt="Image">
                <p class="text-2xl font-bold">{{ $listing->title }}</p>
                <p class="font-bold">{{ $listing->company }}</p>
                <x-listing-tags :tagsList="$listing->tags" />
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
        </x-card>

        {{-- <x-card class="mt-8">
            <a href="/listings/{{ $listing->id }}/edit">
                Edit
            </a>
        </x-card> --}}
    </div>
</x-layout>
