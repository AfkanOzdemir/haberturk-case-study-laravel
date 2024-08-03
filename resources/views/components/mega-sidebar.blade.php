@php
    $navItems = [
        [
            'title' => 'Anasayfa',
            'href' => '/',
        ],
        [
            'title' => 'Gündem',
            'href' => '/gundem',
        ],
        [
            'title' => 'Ekonomi',
            'href' => '/ekonomi',
        ],
        [
            'title' => 'Spor',
            'href' => '/spor',
        ],
        [
            'title' => 'Magazin',
            'href' => '/magazin',
        ],
        [
            'title' => 'Dünya',
            'href' => '/dunya',
        ],
        [
            'title' => 'Teknoloji',
            'href' => '/teknoloji',
        ],
        [
            'title' => 'Sağlık',
            'href' => '/saglik',
        ],
    ];

    $socialItems = [
        [
            'title' => 'Facebook',
            'size' => 10,
            'href' => 'https://www.facebook.com/haberturk',
            'icon' => 'icons/Facebook-white.svg',
        ],
        [
            'title' => 'Twitter',
            'size' => 20,
            'href' => 'https://twitter.com/haberturk',
            'icon' => 'icons/Twitter-white.svg',
        ],
        [
            'title' => 'Linkedin',
            'size' => 20,
            'href' => 'https://www.linkedin.com/company/haberturk/',
            'icon' => 'icons/Linkedin-white.svg',
        ],
    ];
@endphp

<div
    class="mega-sidebar absolute transition-all ease-linear duration-200 w-screen md:w-[500px] left-16 z-40 h-screen bg-primary-100 transform translate-x-[-100%] text-white">

    <div class="w-96 h-full flex flex-col relative items-center justify-center">
        <div class="w-3/4 h-[calc(100%-150px)] flex items-center justify-stat">
            <ul class="space-y-5">
                @foreach ($navItems as $item)
                    <li>
                        <a href="{{ $item['href'] }}"
                            class="text-white transition-all ease-in-out text-4xl font-bold hover:text-primary-200">{{ $item['title'] }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="w-3/4 flex flex-col items-start justify-stat text-sm space-y-8">
            <ul class="flex space-x-3 items-end">
                @foreach ($socialItems as $item)
                    <li>
                        <a href="{{ $item['href'] }}">
                            <img src="{{ asset($item['icon']) }}" alt="{{ $item['title'] }}" class="w-6 h-6">
                        </a>
                    </li>
                @endforeach
            </ul>
            <span> Copyright © 2017 - Tüm hakları saklıdır. Habertürk Gazetecilik A.Ş.</span>
        </div>
    </div>
</div>
