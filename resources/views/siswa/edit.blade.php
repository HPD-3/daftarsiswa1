@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>✏️ Edit Data Siswa</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nisn" class="form-label">NISN</label>
                <input type="text" name="nisn" value="{{ old('nisn', $siswa->nisn) }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" value="{{ old('nama_lengkap', $siswa->nama_lengkap) }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" value="{{ old('tempat_lahir', $siswa->tempat_lahir) }}" class="form-control">
            </div>

            <div class="mb-3">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir', $siswa->tanggal_lahir) }}" class="form-control">
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea name="alamat" class="form-control">{{ old('alamat', $siswa->alamat) }}</textarea>
            </div>

            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <input type="text" name="jurusan" value="{{ old('jurusan', $siswa->jurusan) }}" class="form-control">
            </div>

            <div class="mb-3">
                <label for="angkatan" class="form-label">Angkatan</label>
                <input type="text" name="angkatan" value="{{ old('angkatan', $siswa->angkatan) }}" class="form-control">
            </div>

            <div class="mb-3">
                <label for="no_hp" class="form-label">No HP</label>
                <input type="text" name="no_hp" value="{{ old('no_hp', $siswa->no_hp) }}" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">💾 Update</button>
            <a href="{{ route('siswa.index') }}" class="btn btn-secondary">⬅ Cancel</a>
        </form>
    </div>
</div>
@endsection
