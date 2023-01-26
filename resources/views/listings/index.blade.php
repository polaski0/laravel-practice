<x-layout>
    @include('partials._hero')
    @include('partials._search')

    <div class="w-full my-8 px-12">
        @unless(count($listings) == 0)
            <div
                class="
                flex flex-col gap-4
                md:grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 md:gap-4 md:auto-cols-max
            ">
                @foreach ($listings as $listing)
                    <x-listing-card :listing="$listing" />
                @endforeach
            </div>
        @else
            <p>No listings found</p>
        @endunless
    </div>

    <div class="mt-8 px-8">
        {{ $listings->links() }}
    </div>

</x-layout>