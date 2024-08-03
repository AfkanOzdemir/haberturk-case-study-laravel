<div class="bg-red-500 w-16 relative font-poppins">
    <div class="w-16 h-screen bg-white fixed z-50 border-r border-[#D9D9D9]">
        <div class="w-full h-1/6 bg-primary-100 relative flex items-start justify-center p-3">
            <a href="/">
                <img src="/images/icons/Logo-white.svg" alt="logo" class="w-14 h-14"/>
            </a>
        </div>
        <div class="w-full h-4/6 relative z-10 text-primary-100 text-center flex justify-center items-center">
            <div class="menu-bars-section cursor-pointer w-full">
                <span
                    class="menu-bars h-10 w-[2px] inline-block transition-all ease-in-out duration-200 bg-textColor"></span>
                <span
                    class="menu-bars h-10 w-[2px] inline-block transition-all ease-in-out duration-200 ml-1 bg-textColor"></span>
            </div>
        </div>
        <div class="w-full h-1/6 relative z-10 flex items-center justify-center">
            <span class="sidebar-dot rounded-full w-3 h-3 bg-primary-100"></span>
        </div>
        <div
            class="sidebar-background w-full absolute top-0 bg-primary-100 -z-10 h-1/6 transition-all ease-in-out duration-200">
        </div>
    </div>
    @include('master.layouts.newsLayout.megaMenu')
</div>
