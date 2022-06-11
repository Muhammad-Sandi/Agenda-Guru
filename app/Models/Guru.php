<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $table = "gurus";

    protected $fillable = [
        'nama_guru',
        'nik_guru',
        'mata_pelajaran',
        'user_id'
    ];
}
