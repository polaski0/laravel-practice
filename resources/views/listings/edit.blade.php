<x-layout>
    <x-card class="mx-24 xl:mx-96 my-8">
        <form action="/listings/{{ $listing->id }}" method="post" class="flex flex-col gap-4"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="flex justify-center items-center">
                <h1 class="text-2xl font-bold">Edit Job</h1>
            </div>
            <div class="flex flex-col">
                <label for="title">
                    Job Title
                </label>
                <input class="border-[1px] px-2 py-1" type="text" name="title" id="title"
                    placeholder="Example: Senior Laravel Developer" value="{{ $listing->title }}">
                @error('title')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="company">
                    Company
                </label>
                <input class="border-[1px] px-2 py-1" type="text" name="company" id="company"
                    value="{{ $listing->company }}">
                @error('company')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="email">
                    Email
                </label>
                <input class="border-[1px] px-2 py-1" type="text" name="email" id="email"
                    value="{{ $listing->email }}">
                @error('email')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="location">
                    Location
                </label>
                <input class="border-[1px] px-2 py-1" type="text" name="location" id="location"
                    placeholder="Example: Remote, Boston MA, etc." value="{{ $listing->location }}">
                @error('location')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="website">
                    Website
                </label>
                <input class="border-[1px] px-2 py-1" type="text" name="website" id="website"
                    value="{{ $listing->website }}">
                @error('website')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="tags">
                    Tags <span class="text-neutral-400">(Comma Separated)</span>
                </label>
                <input class="border-[1px] px-2 py-1" type="text" name="tags" id="tags"
                    placeholder="Example: Laravel, Backend, MySQL" value="{{ $listing->tags }}">
                @error('tags')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="logo">
                    Logo
                </label>
                <input type="file" name="logo" id="logo">
                <img class="h-full max-w-xs max-h-48 mt-4"
                    src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png') }}"
                    alt="Image">
                @error('logo')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="description">
                    Description
                </label>
                <textarea class="border-[1px] px-2 py-1 resize-none" name="description" id="description" cols="30" rows="10"
                    placeholder="Include tasks, requirements, salary, etc.">{{ $listing->description }}</textarea>
                @error('description')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-row items-center gap-4">
                <button class="px-4 py-2 w-fit text-white font-bold bg-red-500 rounded-md hover:bg-red-600"
                    type="submit">Update Job</button>
                <a class="px-4 py-2 w-fit" href="/">Cancel</a>
            </div>
        </form>
    </x-card>
</x-layout>
