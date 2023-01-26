@if (session()->has('message'))
    <div
        class="animate-slide-in-out fixed -top-[20vh] z-[2] left-1/2 -translate-x-1/2 w-fit bg-green-500 text-center px-4 py-1 rounded-lg"
        x-data="{show: true}"
        x-init="setTimeout(() => show = false, 3000)"
        x-show="show"    
    >
        <p class="text-white">{{ session('message') }}</p>
    </div>
@endif
