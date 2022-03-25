
<div class="intro-y box form">  
    <div class="p-5" id="input">
        <div>
            <label>Judul Penelitian</label>
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
                        <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600"><i class="fa-solid fa-calendar"></i></div>
                        <input type="text" class="datepicker input pl-12 border pr-0">
                    </div>
                </div>
                <div class="col-span-4">
                    <label for="">Tanggal Selesai</label>
                    <div class="relative w-full mt-2">
                        <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600"><i class="fa-solid fa-calendar"></i></div>
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
                    <input name="proposal" type="file" class="dropify" data-default-file="" />  
                </div>
                <div class="col-span-4 mt-2">
                    <label for="">Laporan Tengah</label>
                    <input name="lap_tengah" type="file" class="dropify" data-default-file="" />  
                </div>
                <div class="col-span-4 mt-2">
                    <label for="">Laporan Keuangan Tengah</label>
                    <input name="lap_uang_tengah" type="file" class="dropify" data-default-file="" />  
                </div>
                <div class="col-span-4 mt-2">
                    <label for="">Laporan Akhir</label>
                    <input name="lap_akhir" type="file" class="dropify" data-default-file="" />  
                </div>
                <div class="col-span-4 mt-2">
                    <label for="">Laporan Keuangan Akhir</label>
                    <input name="lap_uang_akhir" type="file" class="dropify" data-default-file="" />  
                </div>
                <div class="col-span-4 mt-2">
                    <label for="">Publikasi Paper</label>
                    <input name="paper" type="file" class="dropify" data-default-file="" />  
                </div>
            </div>
        </div>
        <div class="mt-3">
            <label>Haki</label>
            <input type="text" class="input w-full border mt-2" placeholder="Jumlah pengajuan dana">
        </div>
     </div>
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
</script>