@extends('template.app')

@section('content')

<div class="col-span-12 mt-8">
    <div class="intro-y flex items-center h-10">
        <h2 class="text-lg font-medium truncate mr-5">
            Tambah Data Baru
        </h2>
    </div>
</div>      
<div class="pos intro-y grid grid-cols-12 gap-5 mt-5">
    <!-- BEGIN: Post Content -->
    <div class="intro-y col-span-12 lg:col-span-8">
        <div class="intro-y pr-1 mb-5">
            <div class="box p-2">
                <div class="pos__tabs nav-tabs justify-center flex"> 
                    <a data-toggle="tab" data-target="#penelitian" href="javascript:;" class="flex-1 py-2 rounded-md text-center active">Penelitian</a> 
                    <a data-toggle="tab" data-target="#pkm" href="javascript:;" class="flex-1 py-2 rounded-md text-center">PKM</a> 
                    <a data-toggle="tab" data-target="#insentif" href="javascript:;" class="flex-1 py-2 rounded-md text-center ">Insentif</a> 
                    <a data-toggle="tab" data-target="#haki" href="javascript:;" class="flex-1 py-2 rounded-md text-center ">HAKI</a> 
                </div>
            </div>
        </div>

        <div class="intro-y box">
            <div class="p-5" id="input">
                <div>
                    <label>Judul</label>
                    <input type="text" class="input w-full border mt-2" placeholder="Judul Penelitian">
                </div>
                <div class="mt-3">
                    <label>Anggota Dosen</label>
                    <input type="text" class="input w-full border mt-2" placeholder="Anggota Dosen">
                </div>
                <div class="mt-3">
                    <label>Anggota Mahasiswa</label>
                    <input type="text" class="input w-full border mt-2" placeholder="Kosongkan jika tida ada">
                </div>
                <div class="mt-3">
                    <label>Nama Hibah</label>
                    <input type="text" class="input w-full border mt-2" placeholder="Nama Hibah">
                </div>
                <div class="mt-3">
                    <label>Mitra</label>
                    <input type="text" class="input w-full border mt-2" placeholder="Nama Mitra">
                </div>
                <div class="mt-3" id="inline-form">
                    <div class="grid grid-cols-12 gap-2">
                        <div class="col-span-4">
                            <label for="">Tanggal Mulai</label>
                            <div class="relative w-full mt-2">
                                <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600"> <i data-feather="calendar" class="w-4 h-4"></i> </div>
                                <input type="text" class="datepicker input pl-12 border pr-0">
                            </div>
                        </div>
                        <div class="col-span-4">
                            <label for="">Tanggal Selesai</label>
                            <div class="relative w-full mt-2">
                                <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600"> <i data-feather="calendar" class="w-4 h-4"></i> </div>
                                <input type="text" class="datepicker input pl-12 border pr-0">
                            </div>
                        </div>
                        <div class="col-span-4">
                            <label for="">Tahun</label>
                            <div class="mt-2"> <select class="input border mr-2 w-full">
                                <option>2019</option>
                                <option>2020</option>
                                <option>2021</option>
                            </select> </div>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <label>Jumlah</label>
                    <input type="text" class="input w-full border mt-2" placeholder="Jumlah pengajuan dana">
                </div>

                <div class="mt-3">
                    <label>Berkas-berkas</label>
                </div>
                <div class="border border-gray-200 rounded-md p-5 mt-3">
                    <div class="grid grid-cols-12 gap-2">
                        <div class="col-span-4 mt-2">
                            <label for="">Proposal</label>
                            <div data-single="true" action="/file-upload" class="dropzone border-gray-200 border-dashed">
                                <div class="fallback">
                                    <input name="file" type="file" />
                                </div>
                                <div class="dz-message" data-dz-message>
                                    <div class="text-lg font-medium">Drop files here or click to upload.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-4 mt-2">
                            <label for="">Laporan Tengah</label>
                            <div data-single="true" action="/file-upload" class="dropzone border-gray-200 border-dashed">
                                <div class="fallback">
                                    <input name="file" type="file" />
                                </div>
                                <div class="dz-message" data-dz-message>
                                    <div class="text-lg font-medium">Drop files here or click to upload.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-4 mt-2">
                            <label for="">Laporan Keuangan Tengah</label>
                            <div data-single="true" action="/file-upload" class="dropzone border-gray-200 border-dashed">
                                <div class="fallback">
                                    <input name="file" type="file" />
                                </div>
                                <div class="dz-message" data-dz-message>
                                    <div class="text-lg font-medium">Drop files here or click to upload.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-4 mt-2">
                            <label for="">Laporan Akhir</label>
                            <div data-single="true" action="/file-upload" class="dropzone border-gray-200 border-dashed">
                                <div class="fallback">
                                    <input name="file" type="file" />
                                </div>
                                <div class="dz-message" data-dz-message>
                                    <div class="text-lg font-medium">Drop files here or click to upload.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-4 mt-2">
                            <label for="">Laporan Keuangan Akhir</label>
                            <div data-single="true" action="/file-upload" class="dropzone border-gray-200 border-dashed">
                                <div class="fallback">
                                    <input name="file" type="file" />
                                </div>
                                <div class="dz-message" data-dz-message>
                                    <div class="text-lg font-medium">Drop files here or click to upload.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-4 mt-2">
                            <label for="">Publikasi Paper</label>
                            <div data-single="true" action="/file-upload" class="dropzone border-gray-200 border-dashed">
                                <div class="fallback">
                                    <input name="file" type="file" />
                                </div>
                                <div class="dz-message" data-dz-message>
                                    <div class="text-lg font-medium">Drop files here or click to upload.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <label>Haki</label>
                    <input type="text" class="input w-full border mt-2" placeholder="Jumlah pengajuan dana">
                </div>
             </div>
        </div>
    </div>
    <!-- END: Post Content -->
    <!-- BEGIN: Post Info -->
    <div class="col-span-12 lg:col-span-4">
        <div class="intro-y box p-5">
            <div>
                <label>Ketua</label>
                <div class="dropdown relative mt-2">
                    <button class="dropdown-toggle button w-full border flex items-center">
                        <div class="w-6 h-6 absolute image-fit mr-3">
                            <img class="rounded" alt="Midone Tailwind HTML Admin Template" src="dist/images/profile-2.jpg">
                        </div>
                        <div class="ml-8 pl-1 truncate">John Travolta</div>
                        <i class="w-4 h-4 ml-auto" data-feather="chevron-down"></i> 
                    </button>
                    <div class="dropdown-box mt-10 absolute w-full top-0 right-0 z-20">
                        <div class="dropdown-box__content box p-2">
                            <a href="javascript:;" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                <div class="w-6 h-6 absolute image-fit mr-3">
                                    <img class="rounded" alt="Midone Tailwind HTML Admin Template" src="dist/images/profile-2.jpg">
                                </div>
                                <div class="ml-8 pl-1">John Travolta</div>
                            </a>
                            <a href="javascript:;" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                <div class="w-6 h-6 absolute image-fit mr-3">
                                    <img class="rounded" alt="Midone Tailwind HTML Admin Template" src="dist/images/profile-1.jpg">
                                </div>
                                <div class="ml-8 pl-1">Tom Cruise</div>
                            </a>
                            <a href="javascript:;" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                <div class="w-6 h-6 absolute image-fit mr-3">
                                    <img class="rounded" alt="Midone Tailwind HTML Admin Template" src="dist/images/profile-15.jpg">
                                </div>
                                <div class="ml-8 pl-1">Al Pacino</div>
                            </a>
                            <a href="javascript:;" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                <div class="w-6 h-6 absolute image-fit mr-3">
                                    <img class="rounded" alt="Midone Tailwind HTML Admin Template" src="dist/images/profile-11.jpg">
                                </div>
                                <div class="ml-8 pl-1">Leonardo DiCaprio</div>
                            </a>
                            <a href="javascript:;" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                <div class="w-6 h-6 absolute image-fit mr-3">
                                    <img class="rounded" alt="Midone Tailwind HTML Admin Template" src="dist/images/profile-2.jpg">
                                </div>
                                <div class="ml-8 pl-1">Kevin Spacey</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-3">
                <label>Tanggal Dibuat</label>
                <input data-timepicker="true" class="datepicker input w-full border mt-2">
            </div>
            
        </div>
    </div>
    <!-- END: Post Info -->
</div>

@endsection