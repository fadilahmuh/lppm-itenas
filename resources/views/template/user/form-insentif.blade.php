<div class="intro-y box">  
    <div class="p-5" id="input">
        <label class="mb-3">Insentif</label>
        <div>
            <label>Jenis Insentif</label>
            <input type="text" class="input w-full border mt-2" placeholder="Judul Penelitian">
        </div>
        <div>
            <label>Judul Publikasi</label>
            <input type="text" class="input w-full border mt-2" placeholder="Judul Penelitian">
        </div>
        <div class="mt-3">
            <label>Penulis Anggota</label>
            <input type="text" class="input w-full border mt-2" placeholder="Anggota Dosen">
        </div>
        <div class="mt-3">
            <label>Jenis Publikasi</label>
            <input type="text" class="input w-full border mt-2" placeholder="Nama Hibah">
        </div>
        <div class="mt-3">
            <label>Jurnal</label>
            <input type="text" class="input w-full border mt-2" placeholder="Nama Mitra">
        </div>
        <div class="mt-3">
            <label>URL</label>
            <input type="text" class="input w-full border mt-2" placeholder="Nama Mitra">
        </div>
        
        <div class="mt-3">
            <label for="">Paper</label>
            <input name="proposal" type="file" class="dropify" data-default-file="" />  
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