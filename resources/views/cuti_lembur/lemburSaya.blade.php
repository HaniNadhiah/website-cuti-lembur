@extends('dashboard.base')

@section('content')
<div class="container mt-5">
    <div class="card shadow border-0 rounded-4">
        <div class="card-body p-5">
            <h3 class="text-center text-primary mb-4">
                <i class="fas fa-history me-2"></i>Riwayat Lembur Saya
            </h3>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if ($lemburs->count())
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Departemen</th>
                                <th>ID Karyawan</th>
                                <th>Tanggal</th>
                                <th>Jam Kerja</th>
                                <th>Jumlah Jam</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($lemburs as $index => $lembur)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $lembur->user->name }}</td>
                                    <td>{{ $lembur->user->department->nama ?? '-' }}</td>
                                    <td>{{ $lembur->user->id_karyawan }}</td>
                                    <td>{{ $lembur->tanggal }}</td>
                                    <td>{{ $lembur->jam_kerja }}</td>>
                                    <td>{{ $lembur->keterangan }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="alert alert-info text-center">
                    Belum ada riwayat lembur.
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
