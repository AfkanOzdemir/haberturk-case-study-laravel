@extends('master.default')
@section('title', 'Haberler')
@section('content')
    @include('master.layouts.newsLayout.sidebar')
    <div class="w-[calc(100%-4rem)] flex">
        <div
            class="lg:w-[500px] h-full bg-white hidden lg:flex flex-col items-start justify-center px-10 relative border-r border-gray border-opacity-50">
            <div class="h-[calc(100%-9rem)] flex flex-col items-start justify-center space-y-5">
                <span class="text-black text-lg font-poppins text-start opacity-50">{{ now()->format('d.m.Y') }}</span>
                <x-base.heading type="secondary" firstContent='Bugün ne oldu?' />
                <x-base.paragraph type="secondary" content="{{ $data[0]['content'] }}" />
            </div>
            @include('master.layouts.cophright', ['class' => '!text-gray'])
        </div>
        <div class="w-full lg:w-[calc(100%-500px)] overflow-hidden flex-row bg-white">
            <x-swiper.swiper-wrapper swiperName="news-swiper">
                @php
                    $count = 1;
                @endphp
                {{-- <div class="swiper-slide !w-auto lg:!hidden">
                    <div class="!w-[calc(320px-4rem)] md:!w-[360px] h-full flex items-center justify-center">
                        <div
                            class="h-full bg-white flex flex-col items-start justify-center px-5 relative space-y-3 border-r border-gray border-opacity-50">
                            <span
                                class="text-black text-lg font-poppins text-start opacity-50">{{ now()->format('d.m.Y') }}</span>
                            <x-base.heading type="secondary" firstContent='Bugün ne oldu?' />
                            <x-base.paragraph type="secondary" content="{{ $data[0]['content'] }}" />
                        </div>
                        @include('master.layouts.cophright', ['class' => '!text-gray'])
                    </div>
                </div> --}}

                <div class="swiper-slide !w-auto lg:!hidden">
                    <div class="!w-[calc(320px-4rem)] md:!w-[360px] h-full flex items-center justify-center">
                        <div class="lg:w-[500px] h-full bg-white lg:flex flex-col items-start justify-center px-10 relative border-r border-gray border-opacity-50">
                            <div class="h-[calc(100%-9rem)] flex flex-col items-start justify-center space-y-5">
                                <span class="text-black text-lg font-poppins text-start opacity-50">{{ now()->format('d.m.Y') }}</span>
                                <x-base.heading type="secondary" firstContent='Bugün ne oldu?' extraClass="w-full !text-4xl"  />
                                <x-base.paragraph type="secondary" content="{{ $data[0]['content'] }}" />
                            </div>
                            @include('master.layouts.cophright', ['class' => '!text-gray w-full'])
                        </div>
                    </div>
                </div>


                @foreach ($data as $item)
                    @if (isset($item['title']))
                        <x-swiper.slide>
                            <x-slot name="id">{{ $item['id'] }}</x-slot>
                            <x-slot name="slideType">news</x-slot>
                            <x-slot name="newsType">{{ $item['type'] }}</x-slot>
                            <x-slot name="title">{{ $item['title'] }}</x-slot>
                            <x-slot name="hour">{{ $item['hour'] }}</x-slot>
                            <x-slot name="content">{{ $item['content'] }}</x-slot>
                            <x-slot name="image">{{ $item['image'] }}</x-slot>
                            <x-slot name="count">{{ $count < 10 ? '0' . $count : $count }}</x-slot>
                        </x-swiper.slide>
                        @php
                            $count++;
                        @endphp
                    @else
                        <x-swiper.slide>
                            <x-slot name="id">{{ $item['id'] }}</x-slot>
                            <x-slot name="slideType">news</x-slot>
                            <x-slot name="newsType">{{ $item['type'] }}</x-slot>
                            <x-slot name="image">{{ $item['image'] }}</x-slot>
                            <x-slot name="count">{{ 'Reklam' }}</x-slot>
                        </x-swiper.slide>
                    @endif
                @endforeach
            </x-swiper.swiper-wrapper>
        </div>
    </div>
@endsection
