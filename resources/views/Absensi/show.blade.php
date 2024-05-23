@extends('Layout.App')
@section('title', 'Detail Absensi')

@section('content')
<div class="container mt-4">
    <h1>Detail Absensi untuk Semua Siswa</h1>
    <a href="{{ route('absensi.create', $idEkskul) }}">
        <button class="btn btn-lg btn-primary">Buat Absen</button>
    </a>
    <table class="table table-bordered mt-2">
        <thead>
            <tr>
                <th>Siswa</th>
                @foreach ($tanggalAbsensi as $tanggal)
                    <th>{{ $tanggal }}</th>
                @endforeach
                <th class="bg-green" width="20px">H</th>
                <th class="bg-yellow" width="20px">I</th>
                <th class="bg-red" width="20px">S</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($semuaSiswa as $siswa)
                <tr>
                    <td>{{ $siswa->nama_siswa }}</td>
                    @foreach ($absensi[$siswa->id] as $data)
                        <td>
                            @if ($data->kehadiran == 'hadir')
                                <span class="badge badge-success">Hadir</span>
                            @elseif ($data->kehadiran == 'sakit')
                                <span class="badge badge-warning">Sakit</span>
                            @elseif ($data->kehadiran == 'izin')
                                <span class="badge badge-primary">Izin</span>
                            @else
                                <span class="badge badge-light"></span>
                            @endif
                        </td>
                    @endforeach
                    <td>{{ $jumlahHadir[$siswa->id] }}</td>
                    <td>{{ $jumlahIzin[$siswa->id] }}</td>
                    <td>{{ $jumlahSakit[$siswa->id] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection