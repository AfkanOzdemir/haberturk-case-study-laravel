@props([
    'slideType' => '',
    'id' => '',
    'title' => '',
    'hour' => '',
    'content' => '',
    'image' => '',
    'extraClass' => '',
    'newsType' => '',
    'count' => '',
    'categoryUrl' => '',
])

@if ($slideType == 'home')
    <a href="/news/current/{{ Str::slug($title) }}" class="swiper-slide !h-auto !flex items-center justify-center font-poppins">
        <div class="relative flex flex-col items-center justify-center !w-3/4 border-b border-b-textColor pb-7 pt-20">
            <span class="text-textColor text-2xl text-center bg-white">
                {{ $title ?? '' }}
            </span>
            <span class="absolute top-6 text-black font-semibold opacity-20 text-8xl -z-10">
                {{ $count ?? '' }}
            </span>
        </div>
    </a>
@endif

@if ($slideType == 'news')
    <div class="swiper-slide !w-auto">
        <div
            class="w-[calc(320px-4rem)] md:w-[360px] h-full  p-5 border-r border-gray border-opacity-50 text-black transition-all ease-in-out duration-300 bg-white hover:bg-secondary flex items-center justify-center relative">
            <div class="absolute top-10 left-10 font-bold font-poppins text-5xl text-gray opacity-50">{{ $count }}</div>
            @if ($newsType == 'news')
                <div class="space-y-7">
                    <x-base.paragraph type="secondary" extraClass="!text-base !text-black" content="{{ $hour }} Saat Önce" />
                    <x-base.heading type="third" extraClass="line-clamp-3" firstContent='{{ $title }}' />
                    <Image src={{ asset($image) }} alt="{{ $title }}" />
                    <x-base.paragraph type="secondary" extraClass="!text-base" content="{{ $content }}" />
                    <div><x-base.button href="{{$categoryUrl}}/{{ Str::slug($title) }}" content="Detay" type="secondary" /></div>
                </div>
            @elseif ($newsType == 'ads')
                <img src={{ asset($image) }} alt="ads" />
            @endif
        </div>
    </div>
@endif

@if ($slideType == 'details')
    <a href="{{ Str::slug($title) }}" class="swiper-slide !h-auto !w-auto {{Str::slug($title) == request()->segment(3) ? 'bg-secondary' : 'bg-white'}}">
        <div class="transition-all ease-in-out duration-300 hover:bg-secondary cursor-pointer lg:w-full">
            <div class="w-full h-full flex items-center justify-center space-x-4 font-poppins pb-7 pt-12 px-6 lg:px-2 border border-gray border-opacity-50">
                <div class="relative space-x-3  h-full flex justify-center items-center ">
                    <img src="{{asset($image)}}" class="object-cover object-center w-24 h-24 lg:w-60 lg:h-28 z-20" />
                    <span class="absolute -top-5 -left-7 lg:-top-10 lg:-left-4 text-6xl font-bold text-black opacity-10 z-10">{{$count}}</span>
                    <div class="flex lg:w-1/2 flex-col justify-start text-black  space-y-3 sm:space-y-5">
                        <div class="font-bold text-sm lg:text-[1.1rem] max-w-36 lg:w-full line-clamp-4">
                            {{$title}}
                        </div>
                        <div class="text-sm">3 Saat Önce</div>
                    </div>
                </div>
            </div>
        </div>
    </a>
@endif
