@extends('template.app')

@section('content')
<div class="grid grid-cols-12 gap-6">
    <div class="col-span-12 xxl:col-span-9 grid grid-cols-12 gap-6">

        {{-- <div class="col-span-12 mt-8">
            <div class="intro-y flex items-center h-10">
                <h2 class="text-lg font-medium truncate mr-5">
                    Dashboard
                </h2>
            </div>
            <div class="grid grid-cols-12 gap-12 mt-5">
                <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                    <div class="report-box zoom-in">
                        <div class="box p-5">
                            <div class="grid grid-cols-12">
                                <div class="col-span-4 xl:col-span-12 sm:col-span-4 flex items-center">
                                    <i class="fa-solid fa-microscope text-green-400 text-5xl xl:text-3xl"></i>
                                </div>
                                <div class="col-span-8 xl:col-span-12 sm:col-span-8">
                                    <div class="text-3xl text-right font-bold leading-8 mt-6">37</div>
                                    <div class="text-base text-right text-gray-600 mt-1">Penelitian</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                    <div class="report-box zoom-in">
                        <div class="box p-5">
                            <div class="grid grid-cols-12">
                                <div class="col-span-4 xl:col-span-12 sm:col-span-4 flex items-center">
                                    <i class="fa-solid fa-calendar-days text-orange-500 text-5xl xl:text-3xl"></i>
                                </div>
                                <div class="col-span-8 xl:col-span-12 sm:col-span-8">
                                    <div class="text-3xl text-right font-bold leading-8 mt-6">52</div>
                                    <div class="text-base text-right text-gray-600 mt-1">PKM</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                    <div class="report-box zoom-in">
                        <div class="box p-5">
                            <div class="grid grid-cols-12">
                                <div class="col-span-4 xl:col-span-12 sm:col-span-4 flex items-center">
                                    <i class="fa-solid fa-receipt text-5xl xl:text-3xl"></i>
                                </div>
                                <div class="col-span-8 xl:col-span-12 sm:col-span-8">
                                    <div class="text-3xl text-right font-bold leading-8 mt-6">12</div>
                                    <div class="text-base text-right text-gray-600 mt-1">Haki</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                    <div class="report-box zoom-in">
                        <div class="box p-5">
                            <div class="grid grid-cols-12">
                                <div class="col-span-4 xl:col-span-12 sm:col-span-4 flex items-center">
                                    <i class="fa-solid fa-file-invoice text-5xl xl:text-3xl"></i>
                                </div>
                                <div class="col-span-8 xl:col-span-12 sm:col-span-8">
                                    <div class="text-3xl text-right font-bold leading-8 mt-6">37</div>
                                    <div class="text-base text-right text-gray-600 mt-1">Insentif</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        
        <div class="col-span-12 mt-8">
            <div class="intro-y flex items-center h-10">
                <h2 class="text-lg font-medium truncate mr-5">
                    Dashboard
                </h2>
            </div>
            <div class="grid grid-cols-12 gap-12 mt-5">
                <div class="col-span-12 sm:col-span-6 md:col-span-3 intro-y">
                    <div class="report-box zoom-in">
                        <div class="box p-5">
                            <div class="grid grid-cols-12">
                                <div class="col-span-4 xl:col-span-12 sm:col-span-4 flex items-center">
                                    <i class="fa-solid fa-microscope text-green-400 text-5xl xl:text-3xl"></i>
                                </div>
                                <div class="col-span-8 xl:col-span-12 sm:col-span-8">
                                    <div class="text-3xl text-right font-bold leading-8 mt-6">37</div>
                                    <div class="text-base text-right text-gray-600 mt-1">Penelitian</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-6 md:col-span-3 intro-y">
                    <div class="report-box zoom-in">
                        <div class="box p-5">
                            <div class="grid grid-cols-12">
                                <div class="col-span-4 xl:col-span-12 sm:col-span-4 flex items-center">
                                    <i class="fa-solid fa-calendar-days text-orange-500 text-5xl xl:text-3xl"></i>
                                </div>
                                <div class="col-span-8 xl:col-span-12 sm:col-span-8">
                                    <div class="text-3xl text-right font-bold leading-8 mt-6">52</div>
                                    <div class="text-base text-right text-gray-600 mt-1">PKM</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-6 md:col-span-3 intro-y">
                    <div class="report-box zoom-in">
                        <div class="box p-5">
                            <div class="grid grid-cols-12">
                                <div class="col-span-4 xl:col-span-12 sm:col-span-4 flex items-center">
                                    <i class="fa-solid fa-receipt text-5xl xl:text-3xl"></i>
                                </div>
                                <div class="col-span-8 xl:col-span-12 sm:col-span-8">
                                    <div class="text-3xl text-right font-bold leading-8 mt-6">12</div>
                                    <div class="text-base text-right text-gray-600 mt-1">Haki</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-6 md:col-span-3 intro-y">
                    <div class="report-box zoom-in">
                        <div class="box p-5">
                            <div class="grid grid-cols-12">
                                <div class="col-span-4 xl:col-span-12 sm:col-span-4 flex items-center">
                                    <i class="fa-solid fa-file-invoice text-5xl xl:text-3xl"></i>
                                </div>
                                <div class="col-span-8 xl:col-span-12 sm:col-span-8">
                                    <div class="text-3xl text-right font-bold leading-8 mt-6">37</div>
                                    <div class="text-base text-right text-gray-600 mt-1">Insentif</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-span-12 mt-8">
            <div class="intro-y flex items-center h-10">
                <h2 class="text-lg font-medium truncate mr-5">
                    Baru Diposting
                </h2>
            </div>
            <div class="grid grid-cols-12 gap-10 mt-5">
                <div class="md:col-span-6 col-span-12 box intro-x">
                    <div class="px-5 py-3 mb-3 flex ">
                        <div class="flex items-start">
                            <i class="mr-2 fa-solid fa-microscope text-5xl xl:text-5xl"></i>
                        </div>
                        <div class="ml-4 mr-auto items-center">
                            <div class="text-gray-600 font-normal">Hibah Penelitian</div>
                            <div class="border-l-2 border-theme-1 pl-4 mt-3">
                                <h3 class="font-semibold text-xl">Potato Leaf Desease</h3>
                            </div>
                            <div class="text-gray-600 font-normal mt-3 text-sm">Ketua Penelitian</div>
                            <a href="#" class="font-semibold text-base tooltip" data-tooltip-content="#profil-dosen" data-theme="light">Uung Ungkawa</a>
                            <div class="tooltip-content">
                                <div id="profil-dosen" class="relative flex items-center py-1">
                                    <div class="w-12 h-12 image-fit"> <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-13.jpg"> </div>
                                    <div class="ml-4 mr-auto">
                                        <div class="font-medium leading-relaxed">Uung Ungkawa</div>
                                        <div class="text-gray-600">https://unkl347.com/</div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-gray-600 font-normal mt-3 text-sm">Tahun</div>
                            <h3 class="font-semibold text-base">2022</h3>
                            <div class="text-gray-600 font-normal mt-3 text-sm">Jumlah</div>
                            <h3 class="font-semibold text-base">Rp. 10.000.000</h3>
                        </div>
                    </div>
                    <div class="flex items-center px-5 py-5 sm:py-3 border-t border-gray-200">
                        <a class="button w-20 text-white bg-theme-1 shadow-md ml-auto">Detail</a>
                    </div>
                </div>
                <div class="md:col-span-6 col-span-12 box intro-x">
                    <div class="px-5 py-3 mb-3 flex ">
                        <div class="flex items-start">
                            <i class="mr-2 fa-solid fa-microscope text-5xl xl:text-5xl"></i>
                        </div>
                        <div class="ml-4 mr-auto items-center">
                            <div class="text-gray-600 font-normal">Hibah Penelitian</div>
                            <div class="border-l-2 border-theme-1 pl-4 mt-3">
                                <h3 class="font-semibold text-xl">Potato Leaf Desease</h3>
                            </div>
                            <div class="text-gray-600 font-normal mt-3 text-sm">Ketua Penelitian</div>
                            <h3 class="font-semibold text-base">Uung Ungkawa</h3>
                            <div class="text-gray-600 font-normal mt-3 text-sm">Tahun</div>
                            <h3 class="font-semibold text-base">2022</h3>
                            <div class="text-gray-600 font-normal mt-3 text-sm">Jumlah</div>
                            <h3 class="font-semibold text-base">Rp. 10.000.000</h3>
                        </div>
                    </div>
                    <div class="flex items-center px-5 py-5 sm:py-3 border-t border-gray-200">
                        <a class="button w-20 text-white bg-theme-1 shadow-md ml-auto">Detail</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection