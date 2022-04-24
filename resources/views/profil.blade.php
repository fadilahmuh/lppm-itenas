@extends('template.app')

@section('content')


<div class="intro-y flex items-center h-10">
    <h2 class="text-lg font-medium truncate mr-5">
        Profil
    </h2>
</div>  

<div class="grid grid-cols-12 gap-6">
    <!-- BEGIN: Profile Menu -->
    <div class="col-span-12 lg:col-span-4 xxl:col-span-3 flex lg:block flex-col-reverse">
        <div class="intro-y box mt-5">
            <div class="flex flex-1 p-5 items-center justify-center lg:justify-start">
                <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-20 lg:h-20 image-fit relative">
                    <img alt="Profile Picture" class="rounded-full" src="{{ asset('dist/images/'.Auth::user()->pict) }}">
                    <a class="button absolute flex items-center justify-center bottom-0 right-0 bg-theme-1 rounded-full p-2"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-camera w-4 h-4 text-white"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg> </a>
                </div>
                <div class="ml-5">
                    <div class="w-24 sm:w-40 truncate sm:whitespace-normal font-medium text-lg">{{ Auth::user()->nama }}</div>
                </div>
            </div>
        </div>
    </div>

    <!-- END: Profile Menu -->
    <div class="col-span-12 lg:col-span-8 xxl:col-span-9">
        <!-- BEGIN: Daily Sales -->
        <div class="intro-y box lg:mt-5">
            <div class="flex items-center px-5 py-5 sm:py-3 border-b border-gray-200">
                <h2 class="font-medium text-base mr-auto">
                    Statistik Kontribusi
                </h2>
            </div>
        </div>
        <div class="flex flex-row gap-5 mb-5 mt-3 justify-center">

            <div class="basis-1/4 intro-x report-box zoom-in tooltip" data-tooltip-content="#penelitian-tooltip">
                <div class="box p-5 ">
                    <div class="grid grid-cols-12 items-center">
                        <div class="col-span-12">
                            <div class="text-3xl text-center font-bold leading-8 mt-2">2</div>
                            <div class="text-base text-center text-gray-600 mt-1">Penelitian</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tooltip-content">
                <div id="penelitian-tooltip" class="relative flex items-center py-1">
                    <div class="m-1">
                        <div class="font-medium leading-relaxed">1 Ketua Penelitian</div>
                        <div class="font-medium leading-relaxed">1 Anggota Penelitian</div>
                    </div>
                </div>
            </div>
            
            <div class="basis-1/4 intro-x report-box zoom-in tooltip" data-tooltip-content="#pkm-tooltip">
                <div class="box p-5 ">
                    <div class="grid grid-cols-12 items-center">
                        <div class="col-span-12">
                            <div class="text-3xl text-center font-bold leading-8 mt-2">3</div>
                            <div class="text-base text-center text-gray-600 mt-1">PKM</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tooltip-content">
                <div id="pkm-tooltip" class="relative flex items-center py-1">
                    <div class="m-1">
                        <div class="font-medium leading-relaxed">1 Ketua PKM</div>
                        <div class="font-medium leading-relaxed">2 Anggota PKM</div>
                    </div>
                </div>
            </div>

            <div class="basis-1/4 intro-x report-box zoom-in tooltip" data-tooltip-content="#haki-tooltip">
                <div class="box p-5 ">
                    <div class="grid grid-cols-12 items-center">
                        <div class="col-span-12">
                            <div class="text-3xl text-center font-bold leading-8 mt-2">2</div>
                            <div class="text-base text-center text-gray-600 mt-1">Publikasi</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tooltip-content">
                <div id="haki-tooltip" class="relative flex items-center py-1">
                    <div class="m-1">
                        <div class="font-medium leading-relaxed">1 Ketua Penelitian</div>
                        <div class="font-medium leading-relaxed">1 Anggota Penelitian</div>
                    </div>
                </div>
            </div>

            <div class="basis-1/4 intro-x report-box zoom-in tooltip" data-tooltip-content="#haki-tooltip">
                <div class="box p-5 ">
                    <div class="grid grid-cols-12 items-center">
                        <div class="col-span-12">
                            <div class="text-3xl text-center font-bold leading-8 mt-2">2</div>
                            <div class="text-base text-center text-gray-600 mt-1">HAKI</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tooltip-content">
                <div id="haki-tooltip" class="relative flex items-center py-1">
                    <div class="m-1">
                        <div class="font-medium leading-relaxed">1 Ketua Penelitian</div>
                        <div class="font-medium leading-relaxed">1 Anggota Penelitian</div>
                    </div>
                </div>
            </div>

            <div class="basis-1/4 intro-x report-box zoom-in tooltip" data-tooltip-content="#haki-tooltip">
                <div class="box p-5 ">
                    <div class="grid grid-cols-12 items-center">
                        <div class="col-span-12">
                            <div class="text-3xl text-center font-bold leading-8 mt-2">2</div>
                            <div class="text-base text-center text-gray-600 mt-1">Insentif</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tooltip-content">
                <div id="haki-tooltip" class="relative flex items-center py-1">
                    <div class="m-1">
                        <div class="font-medium leading-relaxed">1 Ketua Penelitian</div>
                        <div class="font-medium leading-relaxed">1 Anggota Penelitian</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="intro-y box mt-8">
            <div class="flex items-center px-5 py-5 sm:py-3 border-b border-gray-200">
                <h2 class="font-medium text-base mr-auto">
                    Informasi Personal
                </h2>
            </div>
            <div class="p-5">
                <div class="border-l-2 border-theme-1 pl-4">
                    <p class="font-normal text-gray-600">NIP</p> 
                    <h3 class="font-semibold">{{ Auth::user()->nip }}</h3>
                </div>
                <div class="border-l-2 border-theme-1 pl-4 mt-3">
                    <p class="font-normal text-gray-600">NIDN</p> 
                    <h3 class="font-semibold">{{ Auth::user()->nidn }}</h3>
                </div>
                <div class="border-l-2 border-theme-1 pl-4 mt-3">
                    <p class="font-normal text-gray-600">E-mail</p> 
                    <h3 class="font-semibold">{{ Auth::user()->email }}</h3>
                </div>
            </div>
        </div>

        <div class="intro-y box mt-5">
            <div class="flex items-center px-5 py-5 sm:py-3 border-b border-gray-200">
                <h2 class="font-medium text-base mr-auto">
                    Informasi Tambahan
                </h2>
            </div>
            <div class="p-5">
                <div class="border-l-2 border-theme-1 pl-4">
                    <p class="font-normal text-gray-600">G-scholar ID</p> 
                    <h3 class="font-semibold">5113gb2b</h3>
                </div>
                <div class="border-l-2 border-theme-1 pl-4 mt-3">
                    <p class="font-normal text-gray-600">Scopus ID</p> 
                    <h3 class="font-semibold">24564n2hvh</h3>
                </div>
                <div class="border-l-2 border-theme-1 pl-4 mt-3">
                    <p class="font-normal text-gray-600">Sinta ID</p> 
                    <h3 class="font-semibold">tgvtbfgstyhj334556</h3>
                </div>
            </div>
            <div class="flex items-center px-5 py-5 sm:py-3 border-t border-gray-200">
                <a class="button w-20 text-white bg-theme-1 shadow-md ml-auto">Edit</a>
            </div>
        </div>
    </div>
</div>
@endsection