<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class LemburController extends Controller
{

    public function form()
    {
        return view("Form.formLembur");
    }

    public function store(Request $request)
    {
        $names = $request->input('name');
        $departments = $request->input('department');
        $tanggals = $request->input('tanggal');
        $jams = $request->input('jam_kerja');
        $keterangans = $request->input('keterangan');

        for ($i = 0; $i < count($tanggals); $i++) {
            \App\Models\Lembur::create([
                'name' => $names[$i],
                'department' => $departments[$i],
                'tanggal' => $tanggals[$i],
                'jam_kerja' => $jams[$i],
                'keterangan' => $keterangans[$i],
            ]);
        }

        return redirect()->route('lembur.index')->with('success', 'Pengajuan lembur berhasil dikirim.');
    }

}
