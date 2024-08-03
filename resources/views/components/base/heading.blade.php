@props(['type' => '', 'firstContent' => '', 'secondContent' => '', 'extraClass' => ''])

@php
    $primary =
        'font-abril text-white text-5xl sm:text-8xl md:text-[7rem] 2xl:text-[11rem] tracking-normal leading-none lg:leading-[10rem]';
    $secondary = 'w-full text-black font-abril text-5xl text-start';
    $third = 'font-bold text-2xl font-poppins text-black';

    $class = match ($type) {
        'primary' => $primary,
        'secondary' => $secondary,
        'third' => $third,
        default => $primary,
    };
@endphp


<h1 class="{{ $class }} {{ $extraClass }}">
    {{ $firstContent }}<br />
    {{ $secondContent ?? '' }}
</h1>
