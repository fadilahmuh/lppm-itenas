
<div class="intro-y box form">  
<form action="" method="POST" enctype="multipart/form-data">
@csrf
    <div class="p-5" id="input">
        <div>
            <label>Judul Penelitian</label>
            <input type="text" class="input w-full border mt-2" placeholder="Judul Penelitian">
        </div>
        <div class="mt-3">
            <label>Anggota Dosen</label>
            {{-- <input type="text" class="input w-full border mt-2" placeholder="Anggota Dosen"> --}}
            <select name="anggota-dosen" class="select2 input w-full border mt-2 select-dosen" data-placeholder="Pilih anggota dosen">
                <option value="-1">Pilih anggota dosen</option>
                <option>Jasman Pardede</option>
                <option>Winarno Sugeng</option>
                <option>Galih Azhari</option>
            </select>
        </div>
        <div class="mt-3">
            <label>Anggota Mahasiswa</label>
            <select name="anggota-dosen" class="select2 input w-full border mt-2 select-mhs" multiple style="width: 100%" data-placeholder="Pilih anggota mahasiswa">
                <option>152018002 - Fannie M Fadilah S</option>
                <option>152018019 - Andika Fauzi</option>
                <option>152018033 - Gilang Rama</option>
                <option>152018002 - Fannie M Fadilah S</option>
                <option>152018019 - Andika Fauzi</option>
                <option>152018033 - Gilang Rama</option>
            </select>
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
                    <div class="relative mt-2">
                        <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600"><i class="fa-solid fa-calendar"></i></div>
                        <input type="text" class="input datepicker pl-12 w-full border col-span-4" placeholder="Pilih Tanggal">
                    </div>
                </div>
                <div class="col-span-4">
                    <label for="">Tanggal Selesai</label>
                    <div class="relative mt-2">
                        <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600"><i class="fa-solid fa-calendar"></i></div>
                        <input type="text" class="input datepicker pl-12 w-full border col-span-4" placeholder="Pilih Tanggal">
                    </div>
                </div>
                <div class="col-span-4">
                    <label for="">Tahun</label>
                    <div class="relative mt-2">
                        <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600"><i class="fa-solid fa-calendar-week"></i></div>
                        <input type="text" class="yearpicker input pl-12 w-full border col-span-4" value="" placeholder="Pilih Tahun">
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-3">
            <label>Jumlah</label>
            <div class="relative mt-2">
                <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600">Rp. </div>
                <input type="number" class="input pl-12 w-full border col-span-4" value="" placeholder="Jumlah Pengajuan dana">
            </div>
        </div>

        <div class="mt-3">
            <label>Berkas-berkas</label>
        </div>
        <div class="border border-gray-200 rounded-md p-5 mt-3">
            <div class="grid grid-cols-12 gap-2">
                <div class="col-span-6 md:col-span-4 lg:col-span-4 mt-2">
                    <label for="">Proposal</label>
                    <input name="proposal" type="file" class="dropify" data-default-file="" />  
                </div>
                <div class="col-span-6 md:col-span-4 lg:col-span-4 mt-2">
                    <label for="">Laporan Tengah</label>
                    <input name="lap_tengah" type="file" class="dropify" data-default-file="" />  
                </div>
                <div class="col-span-6 md:col-span-4 lg:col-span-4 mt-2">
                    <label for="">Laporan Keuangan Tengah</label>
                    <input name="lap_uang_tengah" type="file" class="dropify" data-default-file="" />  
                </div>
                <div class="col-span-6 md:col-span-4 lg:col-span-4 mt-2">
                    <label for="">Laporan Akhir</label>
                    <input name="lap_akhir" type="file" class="dropify" data-default-file="" />  
                </div>
                <div class="col-span-6 md:col-span-4 lg:col-span-4 mt-2">
                    <label for="">Laporan Keuangan Akhir</label>
                    <input name="lap_uang_akhir" type="file" class="dropify" data-default-file="" />  
                </div>
                <div class="col-span-6 md:col-span-4 lg:col-span-4 mt-2">
                    <label for="">Publikasi Paper</label>
                    <input name="paper" type="file" class="dropify" data-default-file="" />  
                </div>
            </div>
        </div>
        <div class="mt-3">
            <label>Haki</label>
            <input type="text" class="input w-full border mt-2" placeholder="Dokumen HAKI yang sudah diunggah">
        </div>
     </div>
</form>
</div>

<script>
    $('.dropify').dropify({
        messages: {
        'default': 'Tarik dan lepaskan file atau klik disini',
        'replace': 'Tarik dan lepaskan file atau klik untuk ganti',
        'remove':  'Hapus',
        'error':   'Ooops, terjadi kesalahan.'
        }
    });

    $('.select-dosen').select2({
        placeholder: {
            id: '-1',
            text: 'Pilih anggota dosen'
        },
        width: "100%",
    });

    $('.select-mhs').select2({
        placeholder: 'Pilih Anggota Mahasiswa',
    });

    $(".yearpicker").yearpicker({
        startYear: 2000,
        endYear: new Date().getFullYear()
    });

    $('.datepicker').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        autoUpdateInput: true,
        locale: {
            cancelLabel: 'Hapus',
            applyLabel: 'Terapkan',
            format: 'DD/MM/YYYY'
        }
  });
</script>