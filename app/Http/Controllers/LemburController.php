<?php

namespace App\Http\Controllers;

use App\Models\Lembur;
use Illuminate\Http\Request;

class LemburController extends Controller
{

    public function form(){
        return view("Form.formLembur");
    }

    public function store(Request $request)
    {

        $request->validate([
            'lembur.*.nama' => 'required|string',
            'lembur.*.department' => 'required|string',
            'lembur.*.tanggal' => 'required|date',
            'lembur.*.jam_kerja' => 'required|string',
            'lembur.*.keterangan' => 'nullable|string',
        ]);

        foreach ($request->lembur as $item) {
            Lembur::create([
                'user_id' => auth()->id(),
                'department_id' => auth()->user()->department_id,
                'tanggal' => $item['tanggal'],
                'jam_kerja' => $item['jam_kerja'],
                'keterangan' => $item['keterangan'] ?? null,
            ]);
        }

        return redirect()->back()->with('success', 'Pengajuan lembur berhasil dikirim.');
    }
}
