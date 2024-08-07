@extends('master.default')
@section('title', 'Anasayfa')
@section('content')
    <div
        class="w-full xl:w-8/12 flex bg-[url('http://127.0.0.1:8000/images/16x9/1.png')] bg-no-repeat bg-cover bg-center z-20 before:content-[''] before:w-full before:xl:w-8/12 before:h-screen before:bg-primary-100 before:absolute before:-z-10 before:left-0 before:top-0 before:opacity-95">
        @include('master.layouts.homeLayout.sidebar')
        <div class="w-full h-full px-5 lg:pl-16 flex flex-col items-start justify-center">
            <div class="w-full h-[calc(100%-6rem)] sm:ml-0 flex flex-col items-start justify-center space-y-5">
                <span class="text-white text-xl md:text-4xl font-thin font-abril">{{ now()->format('d.m.Y') }}</span>
                <x-base.heading type="primary" firstContent='Bugün' secondContent="ne oldu?" />
                <x-base.paragraph type="primary"
                    content="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text..." />
                <div class="flex items-start justify-center space-x-5">
                    <div class="h-full flex flex-col items-center justify-between">
                        @for ($i = 0; $i < 6; $i++)
                            <span class="w-11 border border-white"></span>
                        @endfor
                    </div>
                    <x-base.button href="news/current" content="Görüntüle" type="primary" />
                </div>
            </div>
            @include('master.layouts.cophright')
        </div>
    </div>
    <div class="w-4/12 hidden xl:block bg-white">
        <x-swiper.swiper-wrapper swiperName="home-swiper" wrapperClass="flex items-center">
            @php
                $counter = 1;
            @endphp
            @foreach ($data['current'] as $item)
                @if (isset($item['title']))
                    <x-swiper.slide>
                        <x-slot name="id">{{ $item['id'] }}</x-slot>
                        <x-slot name="slideType">home</x-slot>
                        <x-slot name="count">{{ $counter < 10 ? '0' . $counter : $counter }}</x-slot>
                        <x-slot name="title">{{ $item['title'] }}</x-slot>
                    </x-swiper.slide>
                    @php
                        $counter++;
                    @endphp
                @endif
            @endforeach
        </x-swiper.swiper-wrapper>
    </div>
@endsection
