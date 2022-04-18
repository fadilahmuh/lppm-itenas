<form action="{{ route('insentif.store') }}" method="POST" enctype="multipart/form-data">
@csrf
<input type="hidden" name="jenis" value=" insentif">
    <div class="box p-5" id="input">
        <div class="">
            <label class="mb-2">Jenis Insentif</label>
            <select name="jenis_insentif" class="select2 input w-full border mt-2 select-insentif" style="width: 100%" data-placeholder="--Pilih Jenis Hibah--" data-list="{{ route('get_insentif') }}"></select>
        </div>
        <div class="mt-3">
            <label>Judul Publikasi</label>
            <input name="judul_publikasi" type="text" class="input w-full border mt-2" placeholder="--Judul Publikasi--">
        </div>
        <div class="mt-3">
            <label>Penulis Ketua</label>
            @if(Auth::guard('pegawai')->check())
            <select name="dosen_ketua" class="select2 input w-full border mt-2 select-dosen" data-placeholder="----Pilih dosen ketua----" data-list="{{ route('get_dosen') }}"></select>
            @elseif(Auth::guard('dosen')->check())
            <input type="text" class="input w-full border mt-2 dsn_place" placeholder="{{Auth::user()->nama}}" disabled>
            <input name="dosen_ketua" type="hidden" class="input w-full border mt-2" value="{{Auth::user()->nip}}">
            @endif 
        </div>
        <div class="mt-3">
            <label class="mb-2">Penulis Anggota</label>
            <select name="dosen_anggota[]" class="select2 input w-full border mt-2 select-dosen" multiple data-placeholder="--Pilih penulis anggota--" data-list="{{ route('get_dosen') }}"></select>
        </div>
        <div class="mt-3">
            <label class="mb-2">Jenis Publikasi</label>
            <select name="jenis_publikasi" class="select2 input w-full border mt-2 select-pub" style="width: 100%" data-placeholder="--Pilih jenis publikasi--" data-list="{{ route('get_pub') }}"></select>
        </div>
        <div class="mt-3">
            <label>Jurnal</label>
            <input name="jurnal" type="text" class="input w-full border mt-2" placeholder="--Nama Jurnal--">
        </div>
        <div class="mt-3" id="inline-form">
            <div class="grid grid-cols-12 gap-2">
                <div class="col-span-4">
                    <label for="">Tahun</label>
                    <div class="relative mt-2">
                        <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600"><i class="fa-solid fa-calendar-week"></i></div>
                        <input name="tahun" type="text" class="bs-yearpicker input pl-12 w-full border col-span-4" value="" placeholder="--Pilih Tahun--"  autocomplete="off">
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-3">
            <label>Jumlah</label>
            <div class="relative mt-2">
                <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600">Rp. </div>
                <input name="jumlah" type="text" class="input rupiah pl-12 w-full border col-span-4" value="" placeholder="--Jumlah Dana Hibah--"  autocomplete="off">
            </div>
        </div>

    </div>
    <div class="box p-5 mt-4">
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
                    <input type="radio" class="input border mr-2" name="status" value="1" @auth('dosen') disabled @endauth>
                    <label class="cursor-pointer select-none" for="status-posted">Posted</label>
                </div>
                <div class="flex items-center text-gray-700 mr-2">
                    <input type="radio" class="input border mr-2" name="status" value="0" @auth('dosen') checked @endauth >
                    <label class="cursor-pointer select-none" for="status-draft">Draft</label>
                </div>
            </div>
        </div>
    </div>
    <button type="submit" class="button w-full mt-5 text-white bg-theme-1 shadow-md disabled:bg-theme-4">Submit</button>
</form>