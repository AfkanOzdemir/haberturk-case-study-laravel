@props(['type' => '', 'content' => '', 'extraClass' => ''])

@php
    $primary = 'w-full sm:w-1/2 text-white text-sm pr-4 font-poppins';
    $secondary = 'text-gray text-lg text-start line-clamp-3';
    $third = 'text-textColor pb-0 text-sm xl:text-base';
    $class = match ($type) {
        'primary' => $primary,
        'secondary' => $secondary,
        'third' => $third,
        default => $primary,
    };
    $content = str_replace('&#039;', "'", $content);
    $content = str_replace('&amp;spc', '<br/>', $content);
@endphp

<div class="font-poppins {{ $class }} {{ $extraClass }}">
    {!! $content !!}
</div>
