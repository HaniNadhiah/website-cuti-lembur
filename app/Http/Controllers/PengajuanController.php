<?php

namespace App\Http\Controllers;

use App\Models\Lembur;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{

    // Cuti
    public function formCuti()
    {
        return view("Form.formCuti");
    }

    // public function storeCuti(Request $request)
    // {
    //     $request->validate([
    //         'awal_cuti' => 'required|date',
    //         'akhir_cuti' => 'required|date|after_or_equal:awal_cuti',
    //         'jumlah_cuti' => 'required|integer|min:1',
    //         'keterangan' => 'nullable|string',
    //     ]);

    //     Cuti::create([
    //         'user_id' => auth()->user()->id,
    //         'department_id' => auth()->user()->department_id,
    //         'awal_cuti' => $request->awal_cuti,
    //         'akhir_cuti' => $request->akhir_cuti,
    //         'jumlah_cuti' => $request->jumlah_cuti,
    //         'keterangan' => $request->keterangan,
    //     ]);

    //     return redirect()->back()->with('success', 'Pengajuan cuti berhasil dikirim.');
    // }

    // Lembur
    public function formLembur()
    {
        return view("Form.formLembur");
    }

    public function store(Request $request)
    {
        $names = $request->input('name');
        $departments = $request->input('department');
        $tanggal = $request->input('tanggal');
        $jams = $request->input('jam_kerja');
        $keterangans = $request->input('keterangan');

        for ($i = 0; $i < count($tanggal); $i++) {
            Lembur::create([
                'name' => $names[$i],
                'department' => $departments[$i],
                'tanggal' => $tanggal[$i],
                'jam_kerja' => $jams[$i],
                'keterangan' => $keterangans[$i],
            ]);
        }

        return redirect()->route('lembur.index')->with('SUCCESS', 'Pengajuan lembur berhasil dikirim.');
    }

    public function formActual()
    {
        return view("Form.formLembur_actual");
    }

    public function Actual(Request $request)
    {
        $names = $request->input('name');
        $departments = $request->input('department');
        $tanggals = $request->input('tanggal');
        $jamApns = $request->input('jam_apn');
        $jamActuals = $request->input('jam_actual');
        $keterangans = $request->input('keterangan');

        for ($i = 0; $i < count($names); $i++) {
            Lembur::create([
                'user_id' => auth()->id(),
                'department_id' => auth()->user()->department_id,
                'tanggal' => $tanggals[$i],
                'jam_kerja' => $jamApns[$i],
                'jam_kerja_actual' => $jamActuals[$i],
                'keterangan' => $keterangans[$i],
            ]);
        }

        return redirect()->route('lembur.index')->with('success', 'Data lembur berhasil disimpan.');
    }

    public function LemburSaya()
    {
        return view('cuti_lembur.lemburSaya');
    }

}
