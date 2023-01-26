@props(['tagsList'])

@php
    $tags = explode(',', $tagsList)
@endphp

<ul class="flex flex-row gap-2">
    @foreach ($tags as $tag)
        <li class="px-4 py-1 bg-black text-white rounded-full text-sm"><a href="/?tag={{trim($tag)}}">{{ucfirst(trim($tag))}}</a></li>
    @endforeach
</ul>