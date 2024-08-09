@extends('master.default')
@section('title', 'Detaylar')
@section('content')
    @include('master.layouts.newsLayout.sidebar')

    <div class="w-full h-screen flex overflow-hidden">
        <div class="w-full h-screen flex flex-col lg:flex-row  overflow-hidden">
            <div
                class="w-full h-auto xl:w-[500px] bg-white lg:flex lg:flex-col lg:items-start lg:justify-center space-y-3 border-r border-gray border-opacity-50">
                <x-swiper.swiper-wrapper swiperName="details-swiper">
                    @php
                        $count = 1;
                    @endphp
                    @foreach ($data as $item)
                        @if (isset($item['title']))
                            <x-swiper.slide>
                                <x-slot name="id">{{ $item['id'] }}</x-slot>
                                <x-slot name="slideType">details</x-slot>
                                <x-slot name="newsType">{{ $item['type'] }}</x-slot>
                                <x-slot name="title">{{ $item['title'] }}</x-slot>
                                <x-slot name="content">{{ $item['content'] }}</x-slot>
                                <x-slot name="image">{{ $item['image'] }}</x-slot>
                                <x-slot name="count">{{ $count < 10 ? '0' . $count : $count }}</x-slot>
                            </x-swiper.slide>
                            @php
                                $count++;
                            @endphp
                        @endif
                    @endforeach
                </x-swiper.swiper-wrapper>
            </div>
            <div class="w-full h-full xl:w-[calc(100%-500px)] flex-row bg-secondary font-poppins overflow-auto">
                <div class="w-full font-poppins xl:max-w-[1150px] flex flex-col m-auto p-4 xl:p-24">
                    <div class="w-full xl:w-3/4 xl:pl-12 mb-5">
                        <x-base.heading type="third" firstContent="{{ $news['title'] }}" />
                        <x-base.paragraph type="third" content="{{ $news['content'] }}" />
                        <div class="w-full border-b border-gray border-dashed pb-5"></div>
                    </div>
                    <img src="{{ asset($news['image']) }}" />
                    <div class="bg-secondary -mt-10 w-[calc(100%-10px)] xl:w-[calc(100%-40px)] h-full p-3">
                        @foreach (explode('\n', $news['contentDetails']) as $item)
                            <x-base.paragraph type="third" content="{{ $item }}" />
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
