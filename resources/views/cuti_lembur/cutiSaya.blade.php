@extends('dashboard.base')

@section('title','Cuti Saya')

@section('content')
<div class="container mt-4">
  <h4 class="fw-bold">Dashboard</h4>
  <p class="text-muted">Karyawan - Pengajuan Cuti</p>

  <form action="{{ route('cuti.store') }}" method="POST">
    @csrf

    <div class="mb-3">
      <label class="form-label fw-bold">Nama</label>
      <input type="text" name="nama" value="{{ old('nama', 'Rara') }}" class="form-control bg-light" readonly>
    </div>

    <div class="mb-3">
      <label class="form-label fw-bold">Department</label>
      <input type="text" name="department" value="{{ old('department', 'IT') }}" class="form-control bg-light" readonly>
    </div>

    <div class="mb-3">
      <label class="form-label fw-bold">ID Karyawan</label>
      <input type="text" name="id_karyawan" value="{{ old('id_karyawan', '007') }}" class="form-control bg-light" readonly>
    </div>

    <div class="mb-3">
      <label class="form-label fw-bold">Awal Cuti</label>
      <div class="input-group">
        <input type="date" name="awal_cuti" value="{{ old('awal_cuti', date('Y-m-d')) }}" class="form-control bg-light">
        <span class="input-group-text"><i class="bi bi-calendar"></i></span>
      </div>
    </div>

    <div class="mb-3">
      <label class="form-label fw-bold">Akhir Cuti</label>
      <input type="date" name="akhir_cuti" value="{{ old('akhir_cuti', date('Y-m-d', strtotime('+1 day'))) }}" class="form-control bg-light">
    </div>

    <div class="mb-3">
      <label class="form-label fw-bold">Jumlah Cuti</label>
      <input type="number" name="jumlah_cuti" value="{{ old('jumlah_cuti', 1) }}" class="form-control bg-light">
    </div>

    <div class="mb-3">
      <label class="form-label fw-bold">Keterangan</label>
      <input type="text" name="keterangan" value="{{ old('keterangan', 'Sakit') }}" class="form-control bg-light">
    </div>

    <div class="text-end">
      <button type="submit" class="btn btn-primary px-4 rounded-pill">Submit</button>
    </div>
  </form>

  @include('dashboard.footer')
</div>
@endsection
