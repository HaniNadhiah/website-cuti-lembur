@extends('dashboard.base')

@section('title', 'Pengajuan Cuti')

@section('content')
<div class="container mt-5">
  <h3 class="mb-4">Pengajuan Cuti</h3>
  <h6 class="op-7 mb-2">{{ ucfirst(Auth::user()->role) }}</h6>
  
  <form action="{{ route('cuti.store') }}" method="POST">
    @csrf

    <div class="mb-3">
      <label class="form-label">Nama</label>
      <input type="text" name="nama" class="form-control" value="{{ auth()->user()->name }}" readonly>
    </div>

    <div class="mb-3">
      <label class="form-label">Department</label>
      <input type="text" name="department" class="form-control" value="{{ auth()->user()->department ?? 'IT' }}" readonly>
    </div>

    <div class="mb-3">
      <label class="form-label">ID Karyawan</label>
      <input type="text" name="id_karyawan" class="form-control" value="{{ auth()->user()->id_karyawan ?? '007' }}" readonly>
    </div>

    <div class="mb-3">
      <label class="form-label">Awal Cuti</label>
      <input type="date" name="awal_cuti" class="form-control" value="{{ old('awal_cuti') }}">
    </div>

    <div class="mb-3">
      <label class="form-label">Akhir Cuti</label>
      <input type="date" name="akhir_cuti" class="form-control" value="{{ old('akhir_cuti') }}">
    </div>

    <div class="mb-3">
      <label class="form-label">Jumlah Cuti</label>
      <input type="number" name="jumlah_cuti" class="form-control" value="1" readonly>
    </div>

    <div class="mb-3">
      <label class="form-label">Keterangan</label>
      <input type="text" name="keterangan" class="form-control" placeholder="Contoh: Sakit">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection
