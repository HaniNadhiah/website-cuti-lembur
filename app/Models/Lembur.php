<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lembur extends Model
{
    protected $table = "lembur";

    protected $fillable = [
        'user_id',
        'department_id',
        'tanggal',
        'jam_kerja',
        'jam_kerja_actual',
        'keterangan'
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi ke department
    public function departments()
    {
        return $this->belongsTo(Department::class);
    }
}

