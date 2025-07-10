<?php

namespace App\Http\Controllers;

use App\Models\Departments;
use Illuminate\Http\Request;

class DepartmentsController extends Controller
{
    public function index()
    {
        $departments = Departments::all();
        return view('dashboard.depart.indexDepart', compact('departments'));
    }

    public function create()
    {
        return view('dashboard.depart.createDepart');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name_departments' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        Departments::create($request->all());
        return redirect()->route('departments.index')->with('success', 'Departemen berhasil ditambahkan.');
    }

    public function edit(Departments $department)
    {
        return view('dashboard.depart.editDepart', compact('department'));
    }

    public function update(Request $request, Departments $department)
    {
        $request->validate([
            'name_departments' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        $department->update($request->all());
        return redirect()->route('departments.index')->with('succsess', 'Departemen berhasil diupdate.');
    }

    public function destroy(Departments $department)
    {
        $department->delete();
        return redirect()->route('departments.index')->with('DELETE', 'Departemen berhasil dihapus.');
    }
}
