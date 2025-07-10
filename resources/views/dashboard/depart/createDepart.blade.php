@extends('dashboard.base')

@section('no-cards')

@section('content')
<div class="container">
    <h3>Tambah Departemen</h3>
    <form action="{{ route('departments.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name_departments" class="form-label">Nama Departemen</label>
            <input type="text" name="name_departments" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea name="deskripsi" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('departments.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>

