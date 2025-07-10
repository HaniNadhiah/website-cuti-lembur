@extends('dashboard.base')

@section('no-cards')

@section('content')
    <div class="container" style="padding-top: 100px;">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3 class="mb-0">Daftar Departemen</h3>
            <a href="{{ route('departments.create') }}" class="btn btn-primary">
                <i class="bi bi-plus-circle me-1"></i> Tambah Departments
            </a>
        </div>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card shadow-sm">
            <div class="card-body p-0">
                <table class="table table-hover table-bordered m-0">
                    <thead class="table-light">
                        <tr>
                            <th>Nama Departemen</th>
                            <th>Deskripsi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($departments as $dept)
                            <tr>
                                <td>{{ $dept->name_departments }}</td>
                                <td>{{ $dept->deskripsi }}</td>
                                <td class="text-center">
                                    <a href="{{ route('departments.edit', $dept->id) }}" class="btn btn-warning btn-sm me-1">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <form action="{{ route('departments.destroy', $dept->id) }}" method="POST"
                                        style="display:inline-block;"
                                        onsubmit="return confirm('Yakin ingin menghapus departemen ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                        @if($departments->isEmpty())
                            <tr>
                                <td colspan="3" class="text-center text-muted">Belum ada departemen.</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
