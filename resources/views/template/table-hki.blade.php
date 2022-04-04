@extends('list')

@section('table')
<div class="intro-y datatable-wrapper box p-5 mt-5">
    <table class="table table-report table-report--bordered display datatable w-full">
        <thead>
            <tr>
                <th class="border-b-2 text-center whitespace-no-wrap">Nama HKI</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Jenis HKI</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Dosen Ketua</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Jumlah</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Tahun</th>
                <th class="border-b-2 text-center whitespace-no-wrap">#</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $d)
            <tr>
                <td class="border-b text-center">
                    <div class="font-medium whitespace-no-wrap">{{$d->judul}}</div>
                </td>
                <td class="text-center border-b">{{$d->jenis_hki}} </td>
                <td class="text-center border-b">{{$d->dosen_ketua->nama}}</td>
                <td class="text-center border-b">{{number_format($d->jumlah)}}</td>
                <td class="text-center border-b">{{$d->tahun}}</td>
                <td class="border-b w-5">
                    <div class="flex sm:justify-center items-center">
                        <button class="button px-2 mr-1 mb-2 bg-theme-14 text-theme-10 tooltip" title="Lihat"> <span class="w-5 h-5 flex items-center justify-center"> <i data-feather="eye" class="w-4 h-4"></i> </span> </button>
                        @auth('pegawai','web')
                        <a href="{{ route('hki.edit', [$d->id]) }}" class="button btn-edit px-2 mr-1 mb-2 bg-theme-17 text-theme-11 tooltip" title="Edit"> <span class="w-5 h-5 flex items-center justify-center"> <i data-feather="edit-3" class="w-4 h-4"></i> </span> </a>
                        <a class="button px-2 mr-1 mb-2 bg-theme-31 text-theme-6 tooltip" title="Tolak"> <span class="w-5 h-5 flex items-center justify-center"> <i data-feather="trash-2" class="w-4 h-4"></i> </span> </a>
                        @endauth
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection