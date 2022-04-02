@extends('template.app')

@section('content')
<div class="intro-y flex items-center h-10">
    <h2 class="text-lg font-medium truncate mr-5">
        Dashboard
    </h2>
</div>  

<div class="grid grid-cols-12 gap-6">
    <div class="col-span-12 xxl:col-span-9 grid grid-cols-12 gap-6">
        <div class="col-span-12 mt-2">
            <div class="grid grid-cols-12 gap-12 mt-5">
                <div class="col-span-12 sm:col-span-6 md:col-span-3 intro-y">
                    <div class="report-box zoom-in">
                        <div class="box p-5">
                            <div class="grid grid-cols-12">
                                <div class="col-span-4 xl:col-span-12 sm:col-span-4 flex items-center">
                                    <i class="fa-solid fa-microscope text-green-400 text-5xl xl:text-3xl"></i>
                                </div>
                                <div class="col-span-8 xl:col-span-12 sm:col-span-8">
                                    <div class="text-3xl text-right font-bold leading-8 mt-6">{{$penelitians->count()}}</div>
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
                                    <div class="text-3xl text-right font-bold leading-8 mt-6">{{$pkms->count()}}</div>
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
                                    <div class="text-3xl text-right font-bold leading-8 mt-6">{{$hkis->count()}}</div>
                                    <div class="text-base text-right text-gray-600 mt-1">HKI</div>
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
                                    <div class="text-3xl text-right font-bold leading-8 mt-6">{{$insentifs->count()}}</div>
                                    <div class="text-base text-right text-gray-600 mt-1">Insentif</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="intro-y flex items-center h-10 mt-10">
    <h2 class="text-lg font-medium truncate mr-5">
        Statistik
    </h2>
</div>

@if(!empty($panel))
<div class="intro-y flex items-center h-10 mt-10">
    <h2 class="text-lg font-medium truncate mr-5">
        Baru Diposting
    </h2>
</div>  
<div class="grid grid-cols-12 gap-6">
    <div class="col-span-12 xxl:col-span-9 grid grid-cols-12 gap-6">
        <div class="col-span-12 mt-2">
            <div class="grid grid-cols-12 gap-12 mt-5">
                {!!$panel!!}
            </div>
        </div>
    </div>
</div>
@endif 
@endsection

