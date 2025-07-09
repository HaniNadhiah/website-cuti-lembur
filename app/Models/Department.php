<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = "department";

    protected $fillable = [
        'name',
        'description',
        'id_karyawan',
        'user_id'
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function lembur()
    {
        return $this->hasMany(Lembur::class);
    }
}
