<nav class="side-nav">
    <a href="{{ route('base') }}" class="intro-x flex items-center pl-5 pt-4">
        <img alt="LP2M" class="w-6" src="{{asset('logo-itenas.svg') }}">
        <span class="hidden xl:block text-black font-medium text-lg ml-3"><span class="font-bold text-white">LP2M </span>itenas</span>
    </a>
    <div class="side-nav__devider my-6"></div>
    <ul>
        <li>
            <a href="{{ route('base') }}" class="side-menu @if(url()->current()==route('base')) side-menu--active @endif">
                <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                <div class="side-menu__title"> Dashboard </div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="book"></i> </div>
                <div class="side-menu__title"> List Data Hibah <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="index.html" class="side-menu">
                        <div class="side-menu__icon"> <i class="fa-solid fa-microscope"></i> </div>
                        <div class="side-menu__title"> Penelitian </div>
                    </a>
                </li>
                <li>
                    <a href="simple-menu-dashboard.html" class="side-menu">
                        <div class="side-menu__icon"> <i class="fa-solid fa-calendar-days"></i> </div>
                        <div class="side-menu__title"> PKM </div>
                    </a>
                </li>
                <li>
                    <a href="top-menu-dashboard.html" class="side-menu">
                        <div class="side-menu__icon"> <i class="fa-solid fa-receipt"></i> </div>
                        <div class="side-menu__title"> Insentif </div>
                    </a>
                </li>
                <li>
                    <a href="top-menu-dashboard.html" class="side-menu">
                        <div class="side-menu__icon"> <i class="fa-solid fa-file-invoice"></i> </div>
                        <div class="side-menu__title"> Haki </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="{{ route('input')}}" class="side-menu @if(url()->current()==route('input')) side-menu--active @endif">
                <div class="side-menu__icon"> <i data-feather="inbox"></i> </div>
                <div class="side-menu__title"> Input data Hibah </div>
            </a>
        </li>
        <li>
            <a href="side-menu-file-manager.html" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="hard-drive"></i> </div>
                <div class="side-menu__title"> Riwayat Input Data </div>
            </a>
        </li>
    </ul>
</nav>