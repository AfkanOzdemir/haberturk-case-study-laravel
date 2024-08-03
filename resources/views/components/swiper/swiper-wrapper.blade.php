@props(['swiperName' => '', 'extraClass' => '', 'wrapperClass' => ''])

@php
    $extraClass = '';
    if ($swiperName === 'home-swiper') {
        $extraClass = 'w-full h-screen overflow-hidden relative
            before:content-[""] before:w-full before:h-28 before:absolute before:top-0 before:left-0 before:z-10 before:opacity-95 before:bg-gradient-to-b  before:from-secondary before:to-transparent
            after:content-[""] after:w-full after:h-28 after:absolute after:bottom-0 after:left-0 after:z-10 after:opacity-95 after:bg-gradient-to-t after:from-secondary after:to-transparent';
    } elseif ($swiperName === 'news-swiper') {
        $extraClass = '';
    } else {
        $extraClass = 'w-full';
    }
@endphp



<div class="swiper h-full {{ $swiperName }} {{ $extraClass }}">
    <div class="swiper-wrapper {{$wrapperClass}}">
        {{ $slot }}
    </div>
</div>
