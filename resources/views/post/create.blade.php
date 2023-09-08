@extends('layouts.main')

@section('content')
    <form method="POST" action="{{ route('post.store') }}">
        @csrf
        <div class="mb-3">
            <label for="formFile" class="form-label">Pilih Foto</label>
            <input class="form-control" type="file" name="gambar" id="formFile">
            @error('gambar')
                <div class="alert alert-danger" role="alert">
                    Foto Tidak Boleh Kosong!
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" aria-describedby="namaHelp"
                placeholder="Masukan Nama Kalian">
            @error('nama')
                <div class="alert alert-danger" role="alert">
                    Nama Tidak Boleh Kosong!
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Jurusan</label>
            <select name="jurusan" class="form-select" aria-label="Default select example">
                <option class="text-center" selected> ---Pilih Jurusan--- </option>
                <option value="PPLG">Pengembangan Perangkat Lunak dan Gim</option>
                <option value="TJKT">Teknik Jaringan Komputer dan Telekomunikasi</option>
                <option value="TO">Teknik Otomotif</option>
                <option value="PEMASARAN">Pemasaran</option>
                <option value="AKL">Akutansi dan Keuangan Lembaga</option>
            </select>
            @error('jurusan')
                <div class="alert alert-danger" role="alert">
                    Jurusan Tidak Boleh Kosong!
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="nis" class="form-label">NIS</label>
            <input type="text" name="nis" class="form-control" id="nis" placeholder="Masukan NISN Kalian">
            @error('nis')
                <div class="alert alert-danger" role="alert">
                    NIS Tidak Boleh Kosong!
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="nis" class="form-label">Alamat</label>
            <textarea class="form-control" name="alamat" placeholder="Masukan Alamat Kalian" id="floatingTextarea2"
                style="height: 100px"></textarea>
            @error('alamat')
                <div class="alert alert-danger" role="alert">
                    Almat Tidak Boleh Kosong!
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <a class="btn btn-danger" href="{{ route('post.index') }}">Kembali</a>
            <button type="reset" class="btn btn-secondary">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
@endsection
