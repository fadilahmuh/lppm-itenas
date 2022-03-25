@extends('template.app')

@section('csslib')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css" rel="stylesheet">
@endsection

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
                    <a data-toggle="tab" data-target="#penelitian" href="{{ route('penelitian') }}" class="nav-form flex-1 py-2 rounded-md text-center active">Penelitian</a> 
                    <a data-toggle="tab" data-target="#pkm" href="{{ route('pkm') }}" class="nav-form flex-1 py-2 rounded-md text-center">PKM</a> 
                    <a data-toggle="tab" data-target="#insentif" href="form/insentif" class="nav-form flex-1 py-2 rounded-md text-center ">Insentif</a> 
                    <a data-toggle="tab" data-target="#haki" href="form/haki" class="nav-form flex-1 py-2 rounded-md text-center ">HAKI</a> 
                </div>
            </div>
        </div>

        <div class="intro-y wait" style="display: none;">  
            <div class="p-5">
                <div class="">
                    <i data-loading-icon="oval" data-color="black" class="w-10 h-10 mx-auto"></i>
                </div>
            </div>
        </div>    

        <div id="form-canvas">
            @include('template.user.form-penelitian')
        </div>

    </div>

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

</div>

@endsection

@section('lib-script')
<script src="{{ asset('js/dropify/dist/js/dropify.js') }}"></script>

@endsection

@section('line-script')
<script>
    $(document).on("click", ".nav-form", function(e) {
    e.preventDefault();
    var url = $(this).attr('href');
        $.ajax({
        type: 'GET',
        url: url,
        dataType: "json",
        beforeSend: function() {
            $( ".form" ).remove();           
            $( ".wait" ).show();           
        },
        success: function(response) {
            // console.log(response.form);
            $('#form-canvas').html(response.form);
            $( ".wait" ).hide();

            // $('#editUser').modal('show');
            // console.log(response);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
        }
        });
  });

</script>
@endsection