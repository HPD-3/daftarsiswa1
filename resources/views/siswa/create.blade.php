@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">➕ Tambah Data Siswa</h1>

    <form action="{{ route('siswa.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nisn" class="form-label">NISN</label>
            <input type="text" name="nisn" id="nisn" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" required>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control">
            </div>
            <div class="col-md-6 mb-3">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control">
            </div>
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea name="alamat" id="alamat" class="form-control" rows="2"></textarea>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <input type="text" name="jurusan" id="jurusan" class="form-control">
            </div>
            <div class="col-md-6 mb-3">
                <label for="angkatan" class="form-label">Angkatan</label>
                <input type="text" name="angkatan" id="angkatan" class="form-control">
            </div>
        </div>

        <div class="mb-3">
            <label for="no_hp" class="form-label">No HP</label>
            <input type="text" name="no_hp" id="no_hp" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">💾 Simpan</button>
        <a href="{{ route('siswa.index') }}" class="btn btn-secondary">⬅ Kembali</a>
    </form>
</div>
@endsection
