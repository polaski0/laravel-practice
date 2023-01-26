<x-layout>

    <x-card class="mx-24 mt-8">
        <h1 class="font-bold text-2xl text-center">Manage Lisitings</h1>
        <table>
            <thead>
                <tr>
                    <th class="text-left">Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @unless($listings->isEmpty())
                    @foreach ($listings as $listing)
                        <tr class="even:bg-slate-100">
                            <td class="p-2">
                                {{ $listing->title }}
                            </td>
                            <td class="p-2 w-48">
                                <div class="flex flex-row w-full h-full gap-2 justify-evenly">
                                    <a class="border flex-1 text-center border-blue-600 text-blue-600 px-2 py-1 rounded-lg hover:bg-blue-600 hover:text-white"
                                        href="/listings/{{ $listing->id }}/edit">Edit</a>
                                    <form
                                        class="border flex-1 text-center border-red-600 text-red-600 px-2 py-1 rounded-lg hover:bg-red-600 hover:text-white"
                                        action="/listings/{{ $listing->id }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="2">No listings!</td>
                    </tr>
                @endunless
            </tbody>
        </table>
    </x-card>

</x-layout>
