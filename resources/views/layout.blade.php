<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
    @vite('resources/css/app.css')
</head>

<body class="min-h-screen flex flex-col justify-between z-[1]">

    <nav class="flex flex-row justify-between items-center w-full h-24 px-12 border-b-[1px] shadow-md">
        <div>
            <a class="text-4xl font-bold" href="/"><span class="text-red-500">Lara</span>Gigs</a>
        </div>
        <div class="flex flex-row gap-4 justify-center items-center">
            <a class="px-4 py-2 underline" href="/register">Register</a>
            <a class="px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600" href="/login">Login</a>
        </div>
    </nav>

    {{-- VIEW --}}
    <main>
        @yield('content')
    </main>

    <footer class="flex flex-row justify-center items-center w-full h-24 px-12 bg-red-500 relative z-[1]">
            <p class="text-white font-bold">Copyright &copy; 2023, All Rights reserved</p>
            <a class="px-4 py-2 bg-black text-white rounded-md font-bold absolute right-8" href="/post">Post Job</a>
    </footer>

</body>

</html>
