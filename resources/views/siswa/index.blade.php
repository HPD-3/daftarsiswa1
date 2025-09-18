@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">📋 Daftar Siswa</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('siswa.create') }}" class="btn btn-primary mb-3">➕ Tambah Siswa</a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>NISN</th>
                <th>Nama Lengkap</th>
                <th>Kelas/Jurusan</th>
                <th>Angkatan</th>
                <th>No HP</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($data as $index => $siswa)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $siswa->nisn }}</td>
                    <td>{{ $siswa->nama_lengkap }}</td>
                    <td>{{ $siswa->jurusan }}</td>
                    <td>{{ $siswa->angkatan }}</td>
                    <td>{{ $siswa->no_hp }}</td>
                    <td>
                        <a href="{{ route('siswa.show', $siswa->id) }}" class="btn btn-info btn-sm">Detail</a>
                        <a href="{{ route('siswa.edit', $siswa->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('siswa.destroy', $siswa->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="7" class="text-center">Tidak ada data siswa</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
