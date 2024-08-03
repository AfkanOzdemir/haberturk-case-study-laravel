{{-- <x-base.button href="/news" content="Görüntüle" type="primary" /> --}}

@props(['type' => '', 'content' => '', 'href' => ''])

@php
    $primary = "font-poppins px-3 md:px-6 lg:px-10 lg:py-3 bg-white text-lg font-black text-primary-100";
    $secondary = "font-poppins px-5 font-bold text-black border border-opacity-50 border-gray transition-all ease-in-out duration-300 hover:bg-primary-100  hover:text-white";
    $class = ($type === 'primary') ? $primary : $secondary;
@endphp

<a href="{{ $href }}"
    class="{{ $class }} py-2">
    {{ $content }}
</a>
