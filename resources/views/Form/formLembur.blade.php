  @extends('dashboard.base')  

  @section('title','Form Pengajuan Lembur')

  @section('content')
  <div class="container mt-4">
        <h3>Pengajuan Lembur</h3>

        <form action="{{ route('lembur.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="name" class="form-control" value="{{ auth()->user()->name }}" readonly>
            </div>

            <div class="mb-3">
                <label>Department</label>
                <input type="text" name="department" class="form-control"
                    value="{{ auth()->user()->department->nama ?? '-' }}" readonly>
            </div>

            <div class="mb-3">
                <label>Tanggal</label>
                <input type="date" name="tanggal" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Jam</label>
                <input type="text" name="jam_kerja" class="form-control" placeholder="Contoh: 16:00 - 19:00" required>
            </div>

            <div class="mb-3">
                <label>Keterangan</label>
                <input type="text" name="keterangan" class="form-control">
            </div>

            <div class="d-flex justify-content-between align-items-center">
                <a href="#" class="btn btn-dark rounded-circle" title="Tambah Teman">
                    <i class="fas fa-user-plus"></i>
                </a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
  @endsection  