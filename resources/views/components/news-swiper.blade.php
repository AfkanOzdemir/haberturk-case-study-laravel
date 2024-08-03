{{--
<div class="swiper-slide !w-[calc(320px-4rem)] md:!w-[360px] h-full">
    <div
        class="w-full h-full p-5 border-r border-gray border-opacity-50 text-black transition-all ease-in-out duration-300 bg-white hover:bg-secondary flex items-center justify-center">
        <div class="absolute top-10 left-10 font-bold font-poppins text-5xl text-gray opacity-50">

        </div>
        @if ($data['type'] !== 'news')
            <img src="{{ $data['image'] }}" alt="news Image" class="w-full object-cover">
        @else
            <div class="w-full h-full flex flex-col items-start justify-center space-y-7" key={index}>
                <span class="font-bold text-sm text-start opacity-50">
                    {{ $data['hour'] }} Saat Önce
                </span>
                <h2 class="font-bold text-2xl">{{ $data['title'] }}</h2>
                <img src="{{ $data['image'] }}" alt="news Image">
                <p class="text-gray line-clamp-3">{{ $data['content'] }}</p>
                <a href="newsDetails/{{ $data['id'] }}" class="px-5 py-2 font-bold text-black border border-opacity-50 border-gray transition-all ease-in-out duration-300 hover:bg-primary-100 hover:text-white">Detay</a>
            </div>
        @endif
    </div>
</div> --}}
