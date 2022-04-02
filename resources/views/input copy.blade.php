@extends('template.app')

@section('lib-css')
<link rel="stylesheet" href="{{ asset('js/dropify/dist/css/dropify.css') }}" />
<link rel="stylesheet" href="{{ asset('js/select2/dist/css/select2.css') }}" />
<link rel="stylesheet" href="{{ asset('js/daterangepicker/daterangepicker.css') }}" />
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

    <div class="intro-y col-span-12 lg:col-span-8">
        <div class="intro-y pr-1 mb-5">
            <div class="box p-2">
                <div class="pos__tabs nav-tabs justify-center flex"> 
                    <button data-toggle="tab" data-target="#penelitian" href="{{ route('penelitian.create') }}" class="nav-form flex-1 py-2 rounded-md text-center active">Penelitian</button> 
                    <button data-toggle="tab" data-target="#pkm" href="{{ route('pkm') }}" class="nav-form flex-1 py-2 rounded-md text-center">PKM</button> 
                    <button data-toggle="tab" data-target="#insentif" href="{{ route('insentif') }}" class="nav-form flex-1 py-2 rounded-md text-center ">Insentif</button> 
                    <button data-toggle="tab" data-target="#haki" href="{{ route('haki') }}" class="nav-form flex-1 py-2 rounded-md text-center ">HAKI</button> 
                </div>
            </div>
        </div>


        <div id="wait" class="p-5 text-center">
            <div class="">
                <svg role="status" class="inline mr-2 w-8 h-8 text-gray-400 animate-spin fill-[#ff6f1a]" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                    <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                </svg>
            </div>
        </div>
 

        <div id="form-canvas">
            
        </div>

    </div>

    <div class="col-span-12 lg:col-span-4">
        <div class="intro-y box p-5">
            {{-- <div>
                <label>Ketua</label>
                <div class="box flex mt-2 items-center">
                    <div class="w-10 h-10 flex-none image-fit relative mr-3">
                        <img alt="Profile Picture" class="rounded-full" src="{{ asset('dist/images/'.Auth::user()->pict) }}">
                    </div>
                    <div class="w-full relative text-gray-700">
                        <input type="text" class="input w-full border bg-gray-100 cursor-not-allowed" value="{{Auth::user()->nama}}" disabled="">
                    </div>
                </div>
            </div> --}}
            <div class="">
                <label>Tanggal Dibuat</label>
                <div class="relative mt-2">
                    <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600"><i class="fa-solid fa-calendar"></i></div>
                    <input type="text" class="input pl-12 w-full border col-span-4 bg-gray-100" disabled value="{{date('d/m/Y', time())}}">
                </div>
            </div>
            <div class="mt-4">
                <label>Status</label>
                <div class="flex flex-col sm:flex-row mt-2 status-group">
                    <div class="flex items-center text-gray-700 mr-4">
                        <input type="radio" class="input border mr-2" name="status" value="posted" @auth('dosen') disabled @endauth>
                        <label class="cursor-pointer select-none" for="status-posted">Posted</label>
                    </div>
                    <div class="flex items-center text-gray-700 mr-2">
                        <input type="radio" class="input border mr-2" name="status" value="draft" @auth('dosen') disabled @endauth checked>
                        <label class="cursor-pointer select-none" for="status-draft">Draft</label>
                    </div>
                </div>
            </div>
        </div>
        <button class="save button w-full mt-5 text-white bg-theme-1 shadow-md disabled:bg-theme-4">Submit</button>
    </div>

</div>

@endsection

@section('lib-script')
<script src="{{ asset('js/dropify/dist/js/dropify.js') }}"></script>
<script src="{{ asset('js/select2/dist/js/select2.js') }}"></script>
<script src="{{ asset('js/yearpicker/dist/yearpicker.js') }}"></script>
<script src="{{ asset('js/daterangepicker/moment.min.js') }}"></script>
<script src="{{ asset('js/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('js/bs-datepicker/js/bootstrap-datepicker.js') }}"></script>
@endsection

@section('line-script')
<script>
    $( document ).ready(function() {
        // console.log( "ready!" );
        var url = $('button[data-target="#penelitian"]').attr('href');
        $.ajax({
            type: 'GET',
            url: url,
            dataType: "json",
            success: function(response) {
                $('#form-canvas').html(response.form);
                $( "#wait" ).hide();
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
            }
        });
    });

    $(document).on("click", ".nav-form", function(e) {
        e.preventDefault();
        var url = $(this).attr('href');
        $.ajax({
            type: 'GET',
            url: url,
            dataType: "json",
            beforeSend: function() {
                $( ".form" ).remove();           
                $( "#wait" ).show();           
            },
            success: function(response) {
                $('#form-canvas').html(response.form);
                $( "#wait" ).hide();
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
            }
        });
    });

    $('.save').click(function(event) {
        event.preventDefault();
        var form =  $(".form" ).children('form');
        var stat = $('[name="status"]').serializeArray();
        var data = form.serializeArray();
        data.push(stat[0]);
        $.ajax({
            type: "POST",
            url: form.attr('action'),
            data: data,
            enctype: 'multipart/form-data',
            beforeSend: function() {
                $(this).prop('disabled', true);
                $(this).html(`<svg role="status" class="inline mr-2 w-4 h-4 text-gray-400 animate-spin fill-white" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="white"/>
                    </svg>`);
                $(".form :input").prop("disabled", true);
            },
            complete: function() {
                $(".form :input").not(".dsn_place").prop("disabled", false);
            },
            success: function (response) {
                console.log(response.msg);
            }
        });
        
       
        // form.submit();
        // console.log(form.serializeArray());
    // swal({
    //     title: `Simpan hasil edit ${bagian} ?`,          
    //     icon: "warning",
    //     buttons: true,
    //     dangerMode: true,
    // })
    // .then((willDelete) => {
    //   if (willDelete) {
    //     form.submit();
    //   }
    // });
    });

</script>
@endsection