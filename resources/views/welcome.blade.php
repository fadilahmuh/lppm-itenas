<!DOCTYPE html>
<html lang="en">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="dist/images/logo.svg" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Midone admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title>@isset($title){{$title}} -@endisset LP2M ITENAS</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{{ asset('css/app.css') }} " />
        <link rel="stylesheet" href="{{ asset('dist/css/fontawesome/css/all.min.css') }}">
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="app">
        <!-- BEGIN: Mobile Menu -->
        <div class="mobile-menu md:hidden">
            <div class="mobile-menu-bar">
                <a href="" class="flex mr-auto">
                    <img alt="LP2M ITENAS" class="w-6" src="{{ asset('logo-itenas.svg') }}">
                </a>
                <a href="javascript:;" id="mobile-menu-toggler"> <i data-feather="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
            </div>
            <ul class="border-t border-theme-2 py-5 hidden">
                <li>
                    <a href="index.html" class="menu menu--active">
                        <div class="menu__icon"> <i data-feather="home"></i> </div>
                        <div class="menu__title"> Dashboard </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="book"></i> </div>
                        <div class="menu__title"> List Data Hibah <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="index.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Penelitian </div>
                            </a>
                        </li>
                        <li>
                            <a href="simple-menu-dashboard.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> PKM </div>
                            </a>
                        </li>
                        <li>
                            <a href="top-menu-dashboard.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Insentif </div>
                            </a>
                        </li>
                        <li>
                            <a href="top-menu-dashboard.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Haki </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="side-menu-inbox.html" class="menu">
                        <div class="menu__icon"> <i data-feather="inbox"></i> </div>
                        <div class="menu__title"> Input data Hibah </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-file-manager.html" class="menu">
                        <div class="menu__icon"> <i data-feather="hard-drive"></i> </div>
                        <div class="menu__title"> Riwayat Input Data </div>
                    </a>
                </li>
            </ul>
        </div>
        <!-- END: Mobile Menu -->
        <div class="flex">
            <!-- BEGIN: Side Menu -->
            <nav class="side-nav">
                <a href="" class="intro-x flex items-center pl-5 pt-4">
                    <img alt="LP2M" class="w-6" src="{{asset('logo-itenas.svg') }}">
                    <span class="hidden xl:block text-black font-medium text-lg ml-3"><span class="font-bold text-white">LP2M </span>itenas</span>
                </a>
                <div class="side-nav__devider my-6"></div>
                <ul>
                    <li>
                        <a href="index.html" class="side-menu side-menu--active">
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
                        <a href="side-menu-inbox.html" class="side-menu">
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
            <!-- END: Side Menu -->
            <!-- BEGIN: Content -->
            <div class="content">
                <!-- BEGIN: Top Bar -->
                <div class="top-bar">
                    <!-- BEGIN: Breadcrumb -->
                    <div class="-intro-x breadcrumb mr-auto hidden sm:flex"><p>Sistem Informasi Lembaga Penelitian dan Pengabdian kepada Masyarakat</p></div>
                    <!-- END: Breadcrumb -->
                    <!-- BEGIN: Notifications -->
                    <div class="intro-x dropdown relative mr-auto sm:mr-6">
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
                                            <a href="javascript:;" class="font-medium truncate mr-5">Angelina Jolie</a> 
                                            <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">05:09 AM</div>
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
                                            <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">05:09 AM</div>
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
                                            <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">01:10 PM</div>
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
                                            <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">05:09 AM</div>
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
                                            <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">01:10 PM</div>
                                        </div>
                                        <div class="w-full truncate text-gray-600">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Notifications -->
                    <!-- BEGIN: Account Menu -->
                    <div class="intro-x dropdown w-8 h-8 relative">
                        <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in">
                            <img alt="Midone Tailwind HTML Admin Template" src="dist/images/profile-12.jpg">
                        </div>
                        <div class="dropdown-box mt-10 absolute w-56 top-0 right-0 z-20">
                            <div class="dropdown-box__content bg-theme-1 box text-white">
                                <div class="p-4 border-b border-theme-2">
                                    <div class="font-medium">Angelina Jolie</div>
                                    <div class="text-xs text-theme-2">Software Engineer</div>
                                </div>
                                <div class="p-2">
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="user" class="w-4 h-4 mr-2"></i> Profile </a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="edit" class="w-4 h-4 mr-2"></i> Add Account </a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="lock" class="w-4 h-4 mr-2"></i> Reset Password </a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="help-circle" class="w-4 h-4 mr-2"></i> Help </a>
                                </div>
                                <div class="p-2 border-t border-theme-2">
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Account Menu -->
                </div>
                <!-- END: Top Bar -->

                <div class="intro-y flex items-center mt-8">
                    <h2 class="text-lg font-medium mr-auto">
                        Profile Layout
                    </h2>
                </div>
                <div class="grid grid-cols-12 gap-6">
                    <!-- BEGIN: Profile Menu -->
                    <div class="col-span-12 lg:col-span-4 xxl:col-span-3 flex lg:block flex-col-reverse">
                        <div class="intro-y box mt-5">
                            <div class="relative flex items-center p-5">
                                <div class="w-12 h-12 image-fit">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-14.jpg">
                                </div>
                                <div class="ml-4 mr-auto">
                                    <div class="font-medium text-base">John Travolta</div>
                                    <div class="text-gray-600">Software Engineer</div>
                                </div>
                                <div class="dropdown relative">
                                    <a class="dropdown-toggle w-5 h-5 block" href="javascript:;"> <i data-feather="more-horizontal" class="w-5 h-5 text-gray-700"></i> </a>
                                    <div class="dropdown-box mt-5 absolute w-56 top-0 right-0 z-20">
                                        <div class="dropdown-box__content box">
                                            <div class="p-4 border-b border-gray-200 font-medium">Export Options</div>
                                            <div class="p-2">
                                                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="activity" class="w-4 h-4 text-gray-700 mr-2"></i> English </a>
                                                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                                    <i data-feather="box" class="w-4 h-4 text-gray-700 mr-2"></i> Indonesia 
                                                    <div class="text-xs text-white px-1 rounded-full bg-theme-6 ml-auto">10</div>
                                                </a>
                                                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="layout" class="w-4 h-4 text-gray-700 mr-2"></i> English </a>
                                                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="sidebar" class="w-4 h-4 text-gray-700 mr-2"></i> Indonesia </a>
                                            </div>
                                            <div class="px-3 py-3 border-t border-gray-200 font-medium flex">
                                                <button type="button" class="button button--sm bg-theme-1 text-white">Settings</button>
                                                <button type="button" class="button button--sm bg-gray-200 text-gray-600 ml-auto">View Profile</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-5 border-t border-gray-200">
                                <a class="flex items-center text-theme-1 font-medium" href=""> <i data-feather="activity" class="w-4 h-4 mr-2"></i> Personal Information </a>
                                <a class="flex items-center mt-5" href=""> <i data-feather="box" class="w-4 h-4 mr-2"></i> Account Settings </a>
                                <a class="flex items-center mt-5" href=""> <i data-feather="lock" class="w-4 h-4 mr-2"></i> Change Password </a>
                                <a class="flex items-center mt-5" href=""> <i data-feather="settings" class="w-4 h-4 mr-2"></i> User Settings </a>
                            </div>
                            <div class="p-5 border-t border-gray-200">
                                <a class="flex items-center" href=""> <i data-feather="activity" class="w-4 h-4 mr-2"></i> Email Settings </a>
                                <a class="flex items-center mt-5" href=""> <i data-feather="box" class="w-4 h-4 mr-2"></i> Saved Credit Cards </a>
                                <a class="flex items-center mt-5" href=""> <i data-feather="lock" class="w-4 h-4 mr-2"></i> Social Networks </a>
                                <a class="flex items-center mt-5" href=""> <i data-feather="settings" class="w-4 h-4 mr-2"></i> Tax Information </a>
                            </div>
                            <div class="p-5 border-t flex">
                                <button type="button" class="button button--sm block bg-theme-1 text-white">New Group</button>
                                <button type="button" class="button button--sm border text-gray-700 ml-auto">New Quick Link</button>
                            </div>
                        </div>
                        <div class="intro-y box p-5 bg-theme-1 text-white mt-5">
                            <div class="flex items-center">
                                <div class="font-medium text-lg">Important Update</div>
                                <div class="text-xs bg-white text-gray-800 px-1 rounded-md ml-auto">New</div>
                            </div>
                            <div class="mt-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                            <div class="font-medium flex mt-5">
                                <button type="button" class="button button--sm border border-white text-white">Take Action</button>
                                <button type="button" class="button button--sm ml-auto">Dismiss</button>
                            </div>
                        </div>
                    </div>
                    <!-- END: Profile Menu -->
                    <div class="col-span-12 lg:col-span-8 xxl:col-span-9">
                        <!-- BEGIN: Daily Sales -->
                        <div class="intro-y box lg:mt-5">
                            <div class="flex items-center px-5 py-5 sm:py-3 border-b border-gray-200">
                                <h2 class="font-medium text-base mr-auto">
                                    Daily Sales
                                </h2>
                                <div class="dropdown relative ml-auto sm:hidden">
                                    <a class="dropdown-toggle w-5 h-5 block" href="javascript:;"> <i data-feather="more-horizontal" class="w-5 h-5 text-gray-700"></i> </a>
                                    <div class="dropdown-box mt-5 absolute w-40 top-0 right-0 z-20">
                                        <div class="dropdown-box__content box p-2">
                                            <a href="javascript:;" class="flex items-center p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="file" class="w-4 h-4 mr-2"></i> Download Excel </a>
                                        </div>
                                    </div>
                                </div>
                                <button class="button border relative flex items-center text-gray-700 hidden sm:flex"> <i data-feather="file" class="w-4 h-4 mr-2"></i> Download Excel </button>
                            </div>
                            <div class="p-5">
                                <div class="relative flex items-center">
                                    <div class="w-12 h-12 flex-none image-fit">
                                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-14.jpg">
                                    </div>
                                    <div class="ml-4 mr-auto">
                                        <a href="" class="font-medium">John Travolta</a> 
                                        <div class="text-gray-600 mr-5 sm:mr-5">Bootstrap 4 HTML Admin Template</div>
                                    </div>
                                    <div class="font-medium text-gray-700">+$19</div>
                                </div>
                                <div class="relative flex items-center mt-5">
                                    <div class="w-12 h-12 flex-none image-fit">
                                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-7.jpg">
                                    </div>
                                    <div class="ml-4 mr-auto">
                                        <a href="" class="font-medium">Angelina Jolie</a> 
                                        <div class="text-gray-600 mr-5 sm:mr-5">Tailwind HTML Admin Template</div>
                                    </div>
                                    <div class="font-medium text-gray-700">+$25</div>
                                </div>
                                <div class="relative flex items-center mt-5">
                                    <div class="w-12 h-12 flex-none image-fit">
                                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-7.jpg">
                                    </div>
                                    <div class="ml-4 mr-auto">
                                        <a href="" class="font-medium">Johnny Depp</a> 
                                        <div class="text-gray-600 mr-5 sm:mr-5">Vuejs HTML Admin Template</div>
                                    </div>
                                    <div class="font-medium text-gray-700">+$21</div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Daily Sales -->
                        <!-- BEGIN: Announcement -->
                        <div class="intro-y box mt-5">
                            <div class="flex items-center px-5 py-3 border-b border-gray-200">
                                <h2 class="font-medium text-base mr-auto">
                                    Announcement
                                </h2>
                                <button data-carousel="announcement" data-target="prev" class="slick-navigator button px-2 border text-white relative flex items-center text-gray-700 mr-2"> <i data-feather="chevron-left" class="w-4 h-4"></i> </button>
                                <button data-carousel="announcement" data-target="next" class="slick-navigator button px-2 border text-white relative flex items-center text-gray-700"> <i data-feather="chevron-right" class="w-4 h-4"></i> </button>
                            </div>
                            <div class="slick-carousel py-5" id="announcement">
                                <div class="px-5">
                                    <div class="font-medium text-lg">Midone Admin Template</div>
                                    <div class="text-gray-700 mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                                    <div class="flex items-center mt-5">
                                        <div class="px-3 py-2 bg-theme-14 text-theme-10 rounded font-medium">02 June 2021</div>
                                        <button class="button justify-center block bg-gray-200 text-gray-600 ml-auto">View Details</button>
                                    </div>
                                </div>
                                <div class="px-5">
                                    <div class="font-medium text-lg">Midone Admin Template</div>
                                    <div class="text-gray-700 mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                                    <div class="flex items-center mt-5">
                                        <div class="px-3 py-2 bg-theme-14 text-theme-10 rounded font-medium">02 June 2021</div>
                                        <button class="button justify-center block bg-gray-200 text-gray-600 ml-auto">View Details</button>
                                    </div>
                                </div>
                                <div class="px-5">
                                    <div class="font-medium text-lg">Midone Admin Template</div>
                                    <div class="text-gray-700 mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                                    <div class="flex items-center mt-5">
                                        <div class="px-3 py-2 bg-theme-14 text-theme-10 rounded font-medium">02 June 2021</div>
                                        <button class="button justify-center block bg-gray-200 text-gray-600 ml-auto">View Details</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Announcement -->
                        <!-- BEGIN: Projects -->
                        <div class="intro-y box mt-5">
                            <div class="flex items-center px-5 py-3 border-b border-gray-200">
                                <h2 class="font-medium text-base mr-auto">
                                    Projects
                                </h2>
                                <button data-carousel="projects" data-target="prev" class="slick-navigator button px-2 border text-white relative flex items-center text-gray-700 mr-2"> <i data-feather="chevron-left" class="w-4 h-4"></i> </button>
                                <button data-carousel="projects" data-target="next" class="slick-navigator button px-2 border text-white relative flex items-center text-gray-700"> <i data-feather="chevron-right" class="w-4 h-4"></i> </button>
                            </div>
                            <div class="slick-carousel py-5" id="projects">
                                <div class="px-5">
                                    <div class="font-medium text-lg">Midone Admin Template</div>
                                    <div class="text-gray-700 mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                                    <div class="mt-5">
                                        <div class="flex">
                                            <div class="text-gray-700 mr-auto">Pending Tasks</div>
                                            <div class="font-medium">20%</div>
                                        </div>
                                        <div class="w-full h-1 mt-2 bg-gray-400 rounded-full">
                                            <div class="w-1/2 h-full bg-theme-1 rounded-full"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-5">
                                    <div class="font-medium text-lg">Midone Admin Template</div>
                                    <div class="text-gray-700 mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                                    <div class="mt-5">
                                        <div class="flex">
                                            <div class="text-gray-700 mr-auto">Pending Tasks</div>
                                            <div class="font-medium">20%</div>
                                        </div>
                                        <div class="w-full h-1 mt-2 bg-gray-400 rounded-full">
                                            <div class="w-1/2 h-full bg-theme-1 rounded-full"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-5">
                                    <div class="font-medium text-lg">Midone Admin Template</div>
                                    <div class="text-gray-700 mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                                    <div class="mt-5">
                                        <div class="flex">
                                            <div class="text-gray-700 mr-auto">Pending Tasks</div>
                                            <div class="font-medium">20%</div>
                                        </div>
                                        <div class="w-full h-1 mt-2 bg-gray-400 rounded-full">
                                            <div class="w-1/2 h-full bg-theme-1 rounded-full"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Projects -->
                        <!-- BEGIN: Today's Schedule -->
                        <div class="intro-y box mt-5">
                            <div class="flex items-center px-5 py-3 border-b border-gray-200">
                                <h2 class="font-medium text-base mr-auto">
                                    Today's Schedule
                                </h2>
                                <button data-carousel="todays-schedule" data-target="prev" class="slick-navigator button px-2 border text-white relative flex items-center text-gray-700 mr-2"> <i data-feather="chevron-left" class="w-4 h-4"></i> </button>
                                <button data-carousel="todays-schedule" data-target="next" class="slick-navigator button px-2 border text-white relative flex items-center text-gray-700"> <i data-feather="chevron-right" class="w-4 h-4"></i> </button>
                            </div>
                            <div class="slick-carousel py-5" id="todays-schedule">
                                <div class="px-5 text-center sm:text-left">
                                    <div class="font-medium">Developing rest API with Laravel 7</div>
                                    <div class="text-theme-1 font-medium text-lg mt-2">11:15AM - 12:30PM</div>
                                    <div class="flex flex-col sm:flex-row items-center mt-5">
                                        <div class="flex items-center text-gray-600"> <i data-feather="map-pin" class="hidden sm:block w-4 h-4 mr-2"></i> 1396 Pooh Bear Lane, New Market </div>
                                        <button class="button button--sm justify-center block bg-gray-200 text-gray-600 sm:ml-auto mt-3 sm:mt-0">View On Map</button>
                                    </div>
                                </div>
                                <div class="px-5 text-center sm:text-left">
                                    <div class="font-medium">Developing rest API with Laravel 7</div>
                                    <div class="text-theme-1 font-medium text-lg mt-2">11:15AM - 12:30PM</div>
                                    <div class="flex flex-col sm:flex-row items-center mt-5">
                                        <div class="flex items-center text-gray-600"> <i data-feather="map-pin" class="hidden sm:block w-4 h-4 mr-2"></i> 1396 Pooh Bear Lane, New Market </div>
                                        <button class="button button--sm justify-center block bg-gray-200 text-gray-600 sm:ml-auto mt-3 sm:mt-0">View On Map</button>
                                    </div>
                                </div>
                                <div class="px-5 text-center sm:text-left">
                                    <div class="font-medium">Developing rest API with Laravel 7</div>
                                    <div class="text-theme-1 font-medium text-lg mt-2">11:15AM - 12:30PM</div>
                                    <div class="flex flex-col sm:flex-row items-center mt-5">
                                        <div class="flex items-center text-gray-600"> <i data-feather="map-pin" class="hidden sm:block w-4 h-4 mr-2"></i> 1396 Pooh Bear Lane, New Market </div>
                                        <button class="button button--sm justify-center block bg-gray-200 text-gray-600 sm:ml-auto mt-3 sm:mt-0">View On Map</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Today's Schedule -->
                        <!-- BEGIN: Top Products -->
                        <div class="intro-y box mt-5">
                            <div class="flex items-center p-5 border-b border-gray-200">
                                <h2 class="font-medium text-base mr-auto">
                                    Top Products
                                </h2>
                                <div class="dropdown relative ml-auto">
                                    <a class="dropdown-toggle w-5 h-5 block" href="javascript:;"> <i data-feather="more-horizontal" class="w-5 h-5 text-gray-700"></i> </a>
                                    <div class="dropdown-box mt-5 absolute w-40 top-0 right-0 z-20">
                                        <div class="dropdown-box__content box p-2">
                                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="edit-2" class="w-4 h-4 mr-2"></i> New Chat </a>
                                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-5">
                                <div class="boxed-tabs nav-tabs justify-center flex flex-col sm:flex-row text-gray-700">
                                    <a data-toggle="tab" data-target="#laravel" href="javascript:;" class="w-full sm:w-20 mb-2 sm:mb-0 py-2 rounded-md box text-center sm:mx-2 active"> <i data-feather="box" class="w-6 h-6 mb-2 mx-auto"></i> Laravel </a>
                                    <a data-toggle="tab" data-target="#symfony" href="javascript:;" class="w-full sm:w-20 mb-2 sm:mb-0 py-2 rounded-md box text-center sm:mx-2"> <i data-feather="inbox" class="w-6 h-6 mb-2 mx-auto"></i> Symfony </a>
                                    <a data-toggle="tab" data-target="#bootstrap" href="javascript:;" class="w-full sm:w-20 mb-2 sm:mb-0 py-2 rounded-md box text-center sm:mx-2"> <i data-feather="activity" class="w-6 h-6 mb-2 mx-auto"></i> Bootstrap </a>
                                </div>
                                <div class="tab-content mt-8">
                                    <div class="tab-content__pane active" id="laravel">
                                        <div class="flex flex-col sm:flex-row items-center">
                                            <div class="mr-auto">
                                                <a href="" class="font-medium">Wordpress Template</a> 
                                                <div class="text-gray-600 mt-1">HTML, PHP, Mysql</div>
                                            </div>
                                            <div class="w-full sm:w-auto flex items-center mt-3 sm:mt-0">
                                                <div class="bg-theme-18 text-theme-9 rounded px-2 mr-5">+20%</div>
                                                <div class="w-full sm:w-40 h-1 bg-gray-400 rounded-full">
                                                    <div class="w-1/2 h-full bg-theme-1 rounded-full"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col sm:flex-row items-center mt-5">
                                            <div class="mr-auto">
                                                <a href="" class="font-medium">Laravel Template</a> 
                                                <div class="text-gray-600 mt-1">PHP, Mysql</div>
                                            </div>
                                            <div class="w-full sm:w-auto flex items-center mt-3 sm:mt-0">
                                                <div class="bg-theme-18 text-theme-9 rounded px-2 mr-5">+55%</div>
                                                <div class="w-full sm:w-40 h-1 bg-gray-400 rounded-full">
                                                    <div class="w-2/3 h-full bg-theme-1 rounded-full"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col sm:flex-row items-center mt-5">
                                            <div class="mr-auto">
                                                <a href="" class="font-medium">Tailwind HTML Template</a> 
                                                <div class="text-gray-600 mt-1">HTML, CSS, JS</div>
                                            </div>
                                            <div class="w-full sm:w-auto flex items-center mt-3 sm:mt-0">
                                                <div class="bg-theme-18 text-theme-9 rounded px-2 mr-5">+40%</div>
                                                <div class="w-full sm:w-40 h-1 bg-gray-400 rounded-full">
                                                    <div class="w-3/4 h-full bg-theme-1 rounded-full"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Top Products -->
                        <!-- BEGIN: Work In Progress -->
                        <div class="intro-y box mt-5">
                            <div class="flex items-center px-5 py-5 sm:py-0 border-b border-gray-200">
                                <h2 class="font-medium text-base mr-auto">
                                    Work In Progress
                                </h2>
                                <div class="dropdown relative ml-auto sm:hidden">
                                    <a class="dropdown-toggle w-5 h-5 block" href="javascript:;"> <i data-feather="more-horizontal" class="w-5 h-5 text-gray-700"></i> </a>
                                    <div class="nav-tabs dropdown-box mt-5 absolute w-40 top-0 right-0 z-20">
                                        <div class="dropdown-box__content box p-2"> <a href="javascript:;" data-toggle="tab" data-target="#new" class="block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">New</a> <a href="javascript:;" data-toggle="tab" data-target="#last-week" class="block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">Last Week</a> </div>
                                    </div>
                                </div>
                                <div class="nav-tabs ml-auto hidden sm:flex"> <a data-toggle="tab" data-target="#work-in-progress-new" href="javascript:;" class="py-5 ml-6 active">New</a> <a data-toggle="tab" data-target="#work-in-progress-last-week" href="javascript:;" class="py-5 ml-6">Last Week</a> </div>
                            </div>
                            <div class="p-5">
                                <div class="tab-content">
                                    <div class="tab-content__pane active" id="work-in-progress-new">
                                        <div>
                                            <div class="flex">
                                                <div class="text-gray-700 mr-auto">Pending Tasks</div>
                                                <div class="font-medium">20%</div>
                                            </div>
                                            <div class="w-full h-1 mt-2 bg-gray-400 rounded-full">
                                                <div class="w-1/2 h-full bg-theme-1 rounded-full"></div>
                                            </div>
                                        </div>
                                        <div class="mt-5">
                                            <div class="flex">
                                                <div class="text-gray-700 mr-auto">Completed Tasks</div>
                                                <div class="font-medium">2 / <span class="text-gray-600">20</span></div>
                                            </div>
                                            <div class="w-full h-1 mt-2 bg-gray-400 rounded-full">
                                                <div class="w-1/4 h-full bg-theme-1 rounded-full"></div>
                                            </div>
                                        </div>
                                        <div class="mt-5">
                                            <div class="flex">
                                                <div class="text-gray-700 mr-auto">Tasks In Progress</div>
                                                <div class="font-medium">42</div>
                                            </div>
                                            <div class="w-full h-1 mt-2 bg-gray-400 rounded-full">
                                                <div class="w-3/4 h-full bg-theme-1 rounded-full"></div>
                                            </div>
                                        </div>
                                        <a href="" class="button w-40 mx-auto justify-center block bg-gray-200 text-gray-600 mt-5">View More Details</a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Work In Progress -->
                        <!-- BEGIN: Latest Tasks -->
                        <div class="intro-y box mt-5">
                            <div class="flex items-center px-5 py-5 sm:py-0 border-b border-gray-200">
                                <h2 class="font-medium text-base mr-auto">
                                    Latest Tasks
                                </h2>
                                <div class="dropdown relative ml-auto sm:hidden">
                                    <a class="dropdown-toggle w-5 h-5 block" href="javascript:;"> <i data-feather="more-horizontal" class="w-5 h-5 text-gray-700"></i> </a>
                                    <div class="nav-tabs dropdown-box mt-5 absolute w-40 top-0 right-0 z-20">
                                        <div class="dropdown-box__content box p-2"> <a href="javascript:;" data-toggle="tab" data-target="#new" class="block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">New</a> <a href="javascript:;" data-toggle="tab" data-target="#last-week" class="block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">Last Week</a> </div>
                                    </div>
                                </div>
                                <div class="nav-tabs ml-auto hidden sm:flex"> <a data-toggle="tab" data-target="#latest-tasks-new" href="javascript:;" class="py-5 ml-6 active">New</a> <a data-toggle="tab" data-target="#latest-tasks-last-week" href="javascript:;" class="py-5 ml-6">Last Week</a> </div>
                            </div>
                            <div class="p-5">
                                <div class="tab-content">
                                    <div class="tab-content__pane active" id="latest-tasks-new">
                                        <div class="flex items-center">
                                            <div class="border-l-2 border-theme-1 pl-4">
                                                <a href="" class="font-medium">Create New Campaign</a> 
                                                <div class="text-gray-600">10:00 AM</div>
                                            </div>
                                            <input class="input input--switch ml-auto border" type="checkbox">
                                        </div>
                                        <div class="flex items-center mt-5">
                                            <div class="border-l-2 border-theme-1 pl-4">
                                                <a href="" class="font-medium">Meeting With Client</a> 
                                                <div class="text-gray-600">02:00 PM</div>
                                            </div>
                                            <input class="input input--switch ml-auto border" type="checkbox">
                                        </div>
                                        <div class="flex items-center mt-5">
                                            <div class="border-l-2 border-theme-1 pl-4">
                                                <a href="" class="font-medium">Create New Repository</a> 
                                                <div class="text-gray-600">04:00 PM</div>
                                            </div>
                                            <input class="input input--switch ml-auto border" type="checkbox">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Latest Tasks -->
                        <!-- BEGIN: General Statistics -->
                        <div class="intro-y box mt-5">
                            <div class="flex items-center px-5 py-3 border-b border-gray-200">
                                <h2 class="font-medium text-base mr-auto">
                                    General Statistics
                                </h2>
                                <div class="dropdown relative ml-auto">
                                    <a class="dropdown-toggle w-5 h-5 block sm:hidden" href="javascript:;"> <i data-feather="more-horizontal" class="w-5 h-5 text-gray-700"></i> </a>
                                    <button class="dropdown-toggle button font-normal border text-white relative items-center text-gray-700 hidden sm:flex"> Export <i data-feather="chevron-down" class="w-4 h-4 ml-2"></i> </button>
                                    <div class="dropdown-box mt-5 sm:mt-12 absolute w-40 top-0 right-0 z-20">
                                        <div class="dropdown-box__content box">
                                            <div class="px-4 py-2 border-b border-gray-200 font-medium">Export Tools</div>
                                            <div class="p-2">
                                                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="printer" class="w-4 h-4 text-gray-700 mr-2"></i> Print </a>
                                                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="external-link" class="w-4 h-4 text-gray-700 mr-2"></i> Excel </a>
                                                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="file-text" class="w-4 h-4 text-gray-700 mr-2"></i> CSV </a>
                                                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="archive" class="w-4 h-4 text-gray-700 mr-2"></i> PDF </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-5">
                                <div class="flex flex-col sm:flex-row items-center">
                                    <div class="flex flex-wrap sm:flex-no-wrap mr-auto">
                                        <div class="flex items-center mr-5 mb-1 sm:mb-0">
                                            <div class="w-2 h-2 bg-theme-11 rounded-full mr-3"></div>
                                            <span>Author Sales</span> 
                                        </div>
                                        <div class="flex items-center mr-5 mb-1 sm:mb-0">
                                            <div class="w-2 h-2 bg-theme-1 rounded-full mr-3"></div>
                                            <span>Product Profit</span> 
                                        </div>
                                    </div>
                                    <div class="dropdown relative mt-3 sm:mt-0 mr-auto sm:mr-0">
                                        <button class="dropdown-toggle button font-normal border text-white relative flex items-center text-gray-700"> Filter by Month <i data-feather="chevron-down" class="w-4 h-4 ml-2"></i> </button>
                                        <div class="dropdown-box mt-10 absolute w-40 top-0 right-0 z-20">
                                            <div class="dropdown-box__content box p-2 overflow-y-auto h-32"> <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">January</a> <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">February</a> <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">March</a> <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">June</a> <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">July</a> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="report-chart mt-8">
                                    <canvas id="report-line-chart" height="130"></canvas>
                                </div>
                            </div>
                        </div>
                        <!-- END: General Statistics -->
                    </div>
                </div>

            </div>
            <!-- END: Content -->
        </div>
        <!-- BEGIN: JS Assets-->
        <script src="{{ asset('js/jquery/dist/jquery.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        <!-- END: JS Assets-->
    </body>
</html>