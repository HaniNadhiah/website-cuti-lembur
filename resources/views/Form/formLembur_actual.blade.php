@extends('dashboard.base')

@section('no-cards')

@section('content')
    <div class="container mt-5">
        <div class="card shadow-lg border-0 rounded-4 mt-5">
            <div class="card-body p-5">
                <h3 class="text-center mb-5 text-primary">
                    <i class="fas fa-clock me-2"></i>Pengajuan Lembur Actual
                </h3>

                <form action="{{ route('lembur.storeActual') }}" method="POST">
                    @csrf

                    <div id="form-teman-wrapper">
                        <div class="teman-form">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Nama</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        <input type="text" name="name[]" class="form-control"
                                            value="{{ auth()->user()->name }}" readonly>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Departemen</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-building"></i></span>
                                        <input type="text" name="department[]" class="form-control"
                                            value="{{ auth()->user()->department->nama ?? '-' }}" readonly>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Tanggal Lembur</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                        <input type="date" name="tanggal[]" class="form-control" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Jam APN</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-clock"></i></span>
                                        <input type="text" name="jam_kerja" class="form-control"
                                            placeholder="Contoh: 16:00 - 19:00" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Jam Actual</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-clock"></i></span>
                                        <input type="text" name="jam_kerja[]" class="form-control"
                                            placeholder="Contoh: 16:00 - 19:00" required>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label class="form-label fw-bold">Keterangan</label>
                                    <textarea name="keterangan[]" rows="3" class="form-control"
                                        placeholder="Tulis keterangan jika perlu..."></textarea>
                                </div>
                            </div>

                            <hr class="my-4">
                        </div>
                    </div>

                    <div class="text-start mt-4">
                        <button type="submit" class="btn btn-primary rounded-pill px-4">
                            <i class="fas fa-paper-plane me-2"></i>Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
