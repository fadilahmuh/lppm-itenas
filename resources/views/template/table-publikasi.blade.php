@extends('list')

@section('table')
<div class="intro-y datatable-wrapper box p-5 mt-5">
    <table class="table table-report table-report--bordered display nowrap datatable w-full">
        <thead>
            <tr>
                <th class="border-b-2 text-center whitespace-nowrap">Judul</th>
                <th class="border-b-2 text-center whitespace-nowrap">Jurusan</th>
                <th class="border-b-2 text-center whitespace-nowrap">Penulis Utama Internal</th>
                <th class="border-b-2 text-center whitespace-nowrap">Penulis Utama Eksternal</th>
                <th class="border-b-2 text-center whitespace-nowrap">Penulis Anggota Internal</th>
                <th class="border-b-2 text-center whitespace-nowrap">Penulis Anggota Eksternal</th>
                <th class="border-b-2 text-center whitespace-nowrap">Jurnal/Proceeding/Penerbit</th>
                <th class="border-b-2 text-center whitespace-nowrap">URL</th>
                <th class="border-b-2 text-center whitespace-nowrap">Jenis Publikasi</th>
                <th class="border-b-2 text-center whitespace-nowrap">Lingkup Publikasi</th>
                <th class="border-b-2 text-center whitespace-nowrap">Sumber Dana</th>
                <th class="border-b-2 text-center whitespace-nowrap">Jumlah Dana</th>
                <th class="border-b-2 text-center whitespace-nowrap">Tahun</th>
                @auth('pegawai','web')
                <th class="border-b-2 text-center whitespace-nowrap">#</th>
                @endauth
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $d)
            <tr>
                <td class="border-b text-center">
                    <div class="font-medium whitespace-nowrap">{{$d->judul}}</div>
                </td>
                <td class="text-center border-b">{{$d->getjurusan()}} </td>
                <td class="text-center border-b">{{$d->dosen_ketua->nama}} </td>
                <td class="text-center border-b">                    
                    @if(!empty($d->ketua_external))
                    <div class="font-medium whitespace-nowrap text-center">{{$da}}</div>
                @else
                -
                @endif</td>
                <td class="text-center border-b">
                    @if(!empty($d->getPenulisInternal()))
                    @foreach ($d->getPenulisInternal() as $da)
                        <div class="font-medium whitespace-nowrap text-center">{{$da->nama}}</div>
                    @endforeach
                @else
                -
                @endif</td>
                <td class="text-center border-b">
                    @if(!empty($d->getPenulisExternal()))
                    @foreach ($d->getPenulisExternal() as $da)
                        <div class="font-medium whitespace-nowrap text-center">{{$da}}</div>
                    @endforeach
                @else
                -
                @endif</td>
                <td class="text-center border-b">{{$d->jurnal}}</td>
                <td class="text-center border-b">{{$d->jenis_publikasi->nama}} </td>
                <td class="text-center border-b">{{$d->sumber_dana}}</td>
                <td class="text-center border-b">{{$d->lingkup}}</td>
                <td class="text-center border-b">{{$d->tanggal_publish}}</td>
                <td class="text-center border-b">{{$d->tahun}}</td>
                <td class="text-center border-b">{{$d->jumlah}}</td>
                <td class="text-center border-b">{{$d->status}}</td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection