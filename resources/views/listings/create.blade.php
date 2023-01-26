<x-layout>
    <x-card class="mx-24 xl:mx-96 my-8">
        <form action="/listings" method="post" class="flex flex-col gap-4" enctype="multipart/form-data">
            @csrf
            <div class="flex justify-center items-center">
                <h1 class="text-2xl font-bold">Create Job</h1>
            </div>
            <div class="flex flex-col">
                <label for="title">
                    Job Title
                </label>
                <input class="border-[1px] px-2 py-1" type="text" name="title" id="title"
                    placeholder="Example: Senior Laravel Developer" value="{{ old('title') }}">
                @error('title')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="company">
                    Company
                </label>
                <input class="border-[1px] px-2 py-1" type="text" name="company" id="company"
                    value="{{ old('company') }}">
                @error('company')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="email">
                    Email
                </label>
                <input class="border-[1px] px-2 py-1" type="text" name="email" id="email"
                    value="{{ old('email') }}">
                @error('email')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="location">
                    Location
                </label>
                <input class="border-[1px] px-2 py-1" type="text" name="location" id="location"
                    placeholder="Example: Remote, Boston MA, etc." value="{{ old('location') }}">
                @error('location')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="website">
                    Website
                </label>
                <input class="border-[1px] px-2 py-1" type="text" name="website" id="website"
                    value="{{ old('website') }}">
                @error('website')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="tags">
                    Tags <span class="text-neutral-400">(Comma Separated)</span>
                </label>
                <input class="border-[1px] px-2 py-1" type="text" name="tags" id="tags"
                    placeholder="Example: Laravel, Backend, MySQL" value="{{ old('tags') }}">
                @error('tags')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="logo">
                    Logo
                </label>
                <input type="file" name="logo" id="logo">
                @error('logo')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="description">
                    Description
                </label>
                <textarea class="border-[1px] px-2 py-1 resize-none" name="description" id="description" cols="30" rows="10"
                    placeholder="Include tasks, requirements, salary, etc.">{{ old('description') }}</textarea>
                @error('description')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-row items-center gap-4">
                <button class="px-4 py-2 w-fit text-white font-bold bg-red-500 rounded-md hover:bg-red-600"
                    type="submit">Post Job</button>
                <a class="px-4 py-2 w-fit" href="/">Cancel</a>
            </div>
        </form>
    </x-card>
</x-layout>
