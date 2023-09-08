@extends('layouts.main')

@section('content')
    <a href="{{ route('post.create') }}" class="btn btn-outline-success">Tambah Data</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Gambar</th>
                <th scope="col">Nama</th>
                <th scope="col">Jurusan</th>
                <th scope="col">NISN</th>
                <th scope="col">Alamat</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($Sposts as $Spost)
                <tr>
                    <th scope="row">1</th>
                    <td>{{ $Spost->gambar }}</td>
                    <td>{{ $Spost->nama }}</td>
                    <td>{{ $Spost->nis }}</td>
                    <td>{{ $Spost->jurusan }}</td>
                    <td>{{ $Spost->alamat }}</td>
                    <td>
                        <a href="" class="btn btn-primary">Edit</a>
                        <a href="" class="btn btn-secondary">Lihat</a>
                        <a href="" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            @empty
                <div class="alert alert-danger" role="alert">
                    Data siswa masih kosong!
                </div>
            @endforelse
        </tbody>
    </table>
@endsection
