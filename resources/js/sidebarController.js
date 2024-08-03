document.addEventListener('DOMContentLoaded', function () {
    let isOpen = false;
    const menuBarsSection = document.querySelector('.menu-bars-section');
    const menuBars = document.querySelectorAll('.menu-bars');
    const toggleClasses = ['bg-white', '!m-0'];
    const megaSidebar = document.querySelector('.mega-sidebar');
    const sidebarBg = document.querySelector('.sidebar-background');
    const sidebarDot = document.querySelector('.sidebar-dot');
    menuBarsSection?.addEventListener('click', function () {
        isOpen = !isOpen;
        isOpen ? menuBars[0].classList.add(...toggleClasses, "-rotate-45") : menuBars[0].classList.remove(...toggleClasses, "-rotate-45");
        isOpen ? menuBars[1].classList.add(...toggleClasses, "rotate-45", "-translate-x-2") : menuBars[1].classList.remove(...toggleClasses, "rotate-45", "-translate-x-2");
        megaSidebar.classList.toggle('translate-x-[-100%]');
        sidebarBg.classList.toggle('!h-full');
        sidebarDot.classList.toggle('bg-white');
    });
});
