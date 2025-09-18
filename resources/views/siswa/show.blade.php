@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>👤 Detail Siswa</h4>
    </div>
    <div class="card-body">
        <p><strong>NISN:</strong> {{ $siswa->nisn }}</p>
        <p><strong>Nama Lengkap:</strong> {{ $siswa->nama_lengkap }}</p>
        <p><strong>Tempat Lahir:</strong> {{ $siswa->tempat_lahir }}</p>
        <p><strong>Tanggal Lahir:</strong> {{ $siswa->tanggal_lahir }}</p>
        <p><strong>Alamat:</strong> {{ $siswa->alamat }}</p>
        <p><strong>Jurusan:</strong> {{ $siswa->jurusan }}</p>
        <p><strong>Angkatan:</strong> {{ $siswa->angkatan }}</p>
        <p><strong>No HP:</strong> {{ $siswa->no_hp }}</p>
        <p><strong>Status:</strong> {{ $siswa->is_active == 1 ? 'Aktif' : 'Tidak Aktif' }}</p>
    </div>
    <div class="card-footer d-flex justify-content-between">
        <a href="{{ route('siswa.edit', $siswa->id) }}" class="btn btn-warning">✏️ Edit</a>
        <form action="{{ route('siswa.destroy', $siswa->id) }}" method="POST" onsubmit="return confirm('Apakah yakin ingin menghapus data ini?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">🗑 Hapus</button>
        </form>
        <a href="{{ route('siswa.index') }}" class="btn btn-secondary">⬅ Kembali</a>
    </div>
</div>
@endsection
