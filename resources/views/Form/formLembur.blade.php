@extends('dashboard.base')

@section('no-cards')

@section('content')
    <div class="container mt-5">
        <div class="card shadow-lg border-0 rounded-4 mt-5">
            <div class="card-body p-5">
                <h3 class="text-center mb-5 text-primary">
                    <i class="fas fa-clock me-2"></i>Pengajuan Lembur
                </h3>

                <form action="{{ route('lembur.store') }}" method="POST">
                    @csrf

                    <div id="form-teman-wrapper">
                        <div class="teman-form">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Nama</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
<<<<<<< HEAD
                                        <input type="text" name="name" class="form-control"
=======
                                        <input type="text" name="name[]" class="form-control"
>>>>>>> 978543af861d2e6d23359ce1c10ca3c8c4eb3c90
                                            value="{{ auth()->user()->name }}" readonly>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Departemen</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-building"></i></span>
<<<<<<< HEAD
                                        <input type="text" name="department" class="form-control"
=======
                                        <input type="text" name="department[]" class="form-control"
>>>>>>> 978543af861d2e6d23359ce1c10ca3c8c4eb3c90
                                            value="{{ auth()->user()->department->nama ?? '-' }}" readonly>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Tanggal Lembur</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
<<<<<<< HEAD
                                        <input type="date" name="tanggal" class="form-control" required>
=======
                                        <input type="date" name="tanggal[]" class="form-control" required>
>>>>>>> 978543af861d2e6d23359ce1c10ca3c8c4eb3c90
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Jam Kerja</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-clock"></i></span>
<<<<<<< HEAD
                                        <input type="text" name="jam_kerja" class="form-control"
=======
                                        <input type="text" name="jam_kerja[]" class="form-control"
>>>>>>> 978543af861d2e6d23359ce1c10ca3c8c4eb3c90
                                            placeholder="Contoh: 16:00 - 19:00" required>
                                    </div>
                                </div>

<<<<<<< HEAD
                                <!-- <div class="col-md-6">
                                    <label class="form-label fw-bold">Jumlah Jam Kerja</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-clock"></i></span>
                                        <input type="text" name="jam_kerja" class="form-control"
                                            placeholder="" required>
                                    </div>
                                </div> -->

                                <div class="col-12">
                                    <label class="form-label fw-bold">Keterangan</label>
                                    <textarea name="keterangan" rows="3" class="form-control"
=======
                                <div class="col-12">
                                    <label class="form-label fw-bold">Keterangan</label>
                                    <textarea name="keterangan[]" rows="3" class="form-control"
>>>>>>> 978543af861d2e6d23359ce1c10ca3c8c4eb3c90
                                        placeholder="Tulis keterangan jika perlu..."></textarea>
                                </div>
                            </div>

                            <hr class="my-4">
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <a href="javascript:void(0);" class="btn btn-outline-dark rounded-pill" id="add-teman"
                            title="Tambah Teman">
                            <i class="fas fa-user-plus me-2"></i>Tambah Teman
                        </a>
                        <button type="submit" class="btn btn-primary rounded-pill px-4">
<<<<<<< HEAD
                            <a href="{{ route('lemburSaya') }}"></a>
                            <i class="fas fa-paper-plane me-2" ></i>Submit
=======
                            <i class="fas fa-paper-plane me-2"></i>Submit
>>>>>>> 978543af861d2e6d23359ce1c10ca3c8c4eb3c90
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const addBtn = document.getElementById('add-teman');
            const wrapper = document.getElementById('form-teman-wrapper');

            addBtn.addEventListener('click', function () {
                const firstForm = wrapper.querySelector('.teman-form');
                const clone = firstForm.cloneNode(true);

                // Kosongkan input (kecuali nama & department)
                clone.querySelectorAll('input, textarea').forEach(el => {
                    if (!el.readOnly) el.value = '';
                });

                wrapper.appendChild(clone);
            });
        });
    </script>
<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> 978543af861d2e6d23359ce1c10ca3c8c4eb3c90
