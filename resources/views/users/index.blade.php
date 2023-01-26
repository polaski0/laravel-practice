<x-layout>

    <x-card class="mx-52 my-8">
        <form class="flex flex-col justify-center items-center gap-6 p-4" action="/users/authenticate" method="post">
            @csrf
            <div class="flex flex-col justify-center items-center">
                <h1 class="text-4xl font-bold">Login</h1>
            </div>
            <div class="flex flex-col w-full">
                <label for="email">
                    Email
                </label>
                <input class="border-[1px] px-2 py-1" type="text" name="email" id="email"
                    value="{{ old('email') }}">
                @error('email')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col w-full">
                <label for="password">
                    Password
                </label>
                <input class="border-[1px] px-2 py-1" type="password" name="password" id="password">
                @error('password')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <button class="bg-red-500 hover:bg-red-600 text-white w-full px-4 py-2 rounded-md"
                type="submit">Login</button>
            <p>Don't have an account? <a class="text-red-500 hover:text-red-600" href="/register">Register</a></p>
        </form>
    </x-card>

</x-layout>
