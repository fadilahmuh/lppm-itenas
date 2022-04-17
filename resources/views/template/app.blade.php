<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link href="dist/images/logo.svg" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="LP2M ITENAS">
        <meta name="decription" content="E-Office LP2M ITENAS">
        <meta name="decription" content="Sistem Informasi Lembaga Penelitian dan Pengabdian kepada Masyarakat">
        <title>@isset($title){{$title}} -@endisset LP2M ITENAS</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }} " />
        <link rel="stylesheet" href="{{ asset('dist/css/fontawesome/css/all.min.css') }}">
        @yield('lib-css')

    </head>

    <body class="app">

       @include('template.mobile-menu')

        <div class="flex">

           @include('template.side-menu')


            <!-- BEGIN: Content -->
            <div class="content">
                <!-- BEGIN: Top Bar -->
                <div class="top-bar">
                    <!-- BEGIN: Breadcrumb -->
                    <div class="-intro-x breadcrumb mr-auto hidden sm:flex"><p>Sistem Informasi Lembaga Penelitian dan Pengabdian kepada Masyarakat</p></div>
                    <!-- END: Breadcrumb -->
                    <!-- BEGIN: Notifications -->
                    {{-- <div class="intro-x dropdown relative mr-auto sm:mr-6">
                        <div class="dropdown-toggle notification notification--bullet cursor-pointer"> <i data-feather="bell" class="notification__icon"></i> </div>
                        <div class="notification-content dropdown-box mt-8 absolute top-0 left-0 sm:left-auto sm:right-0 z-20 sm:ml-0">
                            <div class="notification-content__box dropdown-box__content box">
                                <div class="notification-content__title">Notifications</div>
                                <div class="cursor-pointer relative flex items-center ">
                                    <div class="w-12 h-12 flex-none image-fit mr-1">
                                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-13.jpg">
                                        <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                    </div>
                                    <div class="ml-2 overflow-hidden">
                                        <div class="flex items-center">
                                            @if(Auth::guard('pegawai')->check())
                                            <a href="javascript:;" class="font-medium truncate mr-5">{{ Auth::guard('pegawai')->user()->nama }}</a> 
                                            @elseif(Auth::guard('dosen')->check())
                                            <a href="javascript:;" class="font-medium truncate mr-5">{{ Auth::guard('dosen')->user()->nama }}</a> 
                                            @endif
                                            <div class="text-xs text-gray-500 ml-auto whitespace-nowrap">05:09 AM</div>
                                        </div>
                                        <div class="w-full truncate text-gray-600">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                                    </div>
                                </div>
                                <div class="cursor-pointer relative flex items-center mt-5">
                                    <div class="w-12 h-12 flex-none image-fit mr-1">
                                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-2.jpg">
                                        <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                    </div>
                                    <div class="ml-2 overflow-hidden">
                                        <div class="flex items-center">
                                            <a href="javascript:;" class="font-medium truncate mr-5">Johnny Depp</a> 
                                            <div class="text-xs text-gray-500 ml-auto whitespace-nowrap">05:09 AM</div>
                                        </div>
                                        <div class="w-full truncate text-gray-600">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
                                    </div>
                                </div>
                                <div class="cursor-pointer relative flex items-center mt-5">
                                    <div class="w-12 h-12 flex-none image-fit mr-1">
                                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-14.jpg">
                                        <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                    </div>
                                    <div class="ml-2 overflow-hidden">
                                        <div class="flex items-center">
                                            <a href="javascript:;" class="font-medium truncate mr-5">Russell Crowe</a> 
                                            <div class="text-xs text-gray-500 ml-auto whitespace-nowrap">01:10 PM</div>
                                        </div>
                                        <div class="w-full truncate text-gray-600">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                                    </div>
                                </div>
                                <div class="cursor-pointer relative flex items-center mt-5">
                                    <div class="w-12 h-12 flex-none image-fit mr-1">
                                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-6.jpg">
                                        <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                    </div>
                                    <div class="ml-2 overflow-hidden">
                                        <div class="flex items-center">
                                            <a href="javascript:;" class="font-medium truncate mr-5">Al Pacino</a> 
                                            <div class="text-xs text-gray-500 ml-auto whitespace-nowrap">05:09 AM</div>
                                        </div>
                                        <div class="w-full truncate text-gray-600">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
                                    </div>
                                </div>
                                <div class="cursor-pointer relative flex items-center mt-5">
                                    <div class="w-12 h-12 flex-none image-fit mr-1">
                                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-5.jpg">
                                        <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                    </div>
                                    <div class="ml-2 overflow-hidden">
                                        <div class="flex items-center">
                                            <a href="javascript:;" class="font-medium truncate mr-5">Edward Norton</a> 
                                            <div class="text-xs text-gray-500 ml-auto whitespace-nowrap">01:10 PM</div>
                                        </div>
                                        <div class="w-full truncate text-gray-600">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <!-- END: Notifications -->
                    <!-- BEGIN: Account Menu -->
                    <div class="intro-x dropdown w-8 h-8 relative">
                        <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in">
                            @if(Auth::guard('pegawai')->check())
                            <img alt="Profile Picture" src="{{ asset('dist/images/'.Auth::guard('pegawai')->user()->pict) }}">
                            @elseif(Auth::guard('dosen')->check())
                            <img alt="Profile Picture" src="{{ asset('dist/images/'.Auth::guard('dosen')->user()->pict) }}">
                            @endif
                            
                        </div>
                        <div class="dropdown-box mt-10 absolute w-56 top-0 right-0 z-20">
                            <div class="dropdown-box__content bg-theme-1 box text-white">
                                <div class="p-4 border-b border-theme-2">

                                    @if(Auth::guard('pegawai')->check())
                                    <div class="font-medium"> {{ Auth::guard('pegawai')->user()->nama }}</div>
                                    @elseif(Auth::guard('dosen')->check())
                                    <div class="font-medium"> {{ Auth::guard('dosen')->user()->nama }}</div>
                                    @endif
                                    
                                    @if(Auth::guard('pegawai')->check())
                                    <div class="text-xs text-theme-2">Pegawai</div>
                                    @elseif(Auth::guard('dosen')->check())
                                    <div class="text-xs text-theme-2">Dosen</div>
                                    @endif

                                </div>
                                <div class="p-2">
                                    <a href="{{ route('profil') }}" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="user" class="w-4 h-4 mr-2"></i> Profile </a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="help-circle" class="w-4 h-4 mr-2"></i> Help </a>
                                </div>
                                <div class="p-2 border-t border-theme-2">
                                    <a href="{{ route('logout') }}" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> 
                                        <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Logout 
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Account Menu -->
                </div>
                <!-- END: Top Bar -->

                @yield('content')

            </div>
        </div>
        <!-- BEGIN: JS Assets-->
        <script src="{{ asset('js/jquery/dist/jquery.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        <!-- END: JS Assets-->

        @yield('lib-script')
        @yield('line-script')
    </body>
</html>