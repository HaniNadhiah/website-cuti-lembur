@extends('dashboard.base')

@section('no-cards')

@section('content')
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card shadow-lg border-0 rounded-4">
        <div class="card-body p-5">
          <h2 class="text-center mb-3 text-primary">Form Pengajuan Cuti</h2>
          <p class="text-center text-muted mb-4">Silakan isi data berikut untuk mengajukan cuti</p>

          <form action="{{ route('cuti.store') }}" method="POST">
            @csrf

            <div class="mb-3">
              <label class="form-label"><i class="bi bi-person-fill me-2"></i>Nama</label>
              <input type="text" name="nama" class="form-control" 
                     value="{{ auth()->user()->name }}" readonly>
            </div>

            <div class="mb-3">
              <label class="form-label"><i class="bi bi-building me-2"></i>Department</label>
              <input type="text" name="department" class="form-control" 
                     value="{{ auth()->user()->department->nama ?? 'IT' }}" readonly>
            </div>

            <div class="mb-3">
              <label class="form-label"><i class="bi bi-card-heading me-2"></i>ID Karyawan</label>
              <input type="text" name="id_karyawan" class="form-control" 
                     value="{{ auth()->user()->id_karyawan ?? '007' }}" readonly>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label class="form-label"><i class="bi bi-calendar-date me-2"></i>Awal Cuti</label>
                <input type="date" name="awal_cuti" class="form-control" required>
              </div>

              <div class="col-md-6 mb-3">
                <label class="form-label"><i class="bi bi-calendar-check me-2"></i>Akhir Cuti</label>
                <input type="date" name="akhir_cuti" class="form-control" required>
              </div>
            </div>

            <div class="mb-3">
              <label class="form-label"><i class="bi bi-hash me-2"></i>Jumlah Cuti (hari)</label>
              <input type="number" name="jumlah_cuti" class="form-control" value="1" readonly>
            </div>

            <div class="mb-4">
              <label class="form-label"><i class="bi bi-chat-left-dots me-2"></i>Keterangan</label>
              <input type="text" name="keterangan" class="form-control" placeholder="Contoh: Sakit, Kepentingan Keluarga, dll.">
            </div>

            <div class="d-grid">
              <button type="submit" class="btn btn-primary btn-lg rounded-3">
                <i class="bi bi-send-check-fill me-2"></i>Kirim Pengajuan
              </button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Hitung jumlah cuti otomatis -->
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const awal = document.querySelector('input[name="awal_cuti"]');
    const akhir = document.querySelector('input[name="akhir_cuti"]');
    const jumlah = document.querySelector('input[name="jumlah_cuti"]');

    function updateJumlahCuti() {
      if (awal.value && akhir.value) {
        const start = new Date(awal.value);
        const end = new Date(akhir.value);
        const dayDiff = Math.floor((end - start) / (1000 * 60 * 60 * 24)) + 1;
        jumlah.value = dayDiff > 0 ? dayDiff : 1;
      }
    }

    awal.addEventListener('change', updateJumlahCuti);
    akhir.addEventListener('change', updateJumlahCuti);
  });
</script>
@endsection
