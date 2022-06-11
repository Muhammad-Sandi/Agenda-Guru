<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;

    protected $table = "agendas";

    protected $fillable = [
        'nama_guru',
        'mata_pelajaran',
        'materi_pelajaran',
        'jam_pelajaran',
        'siswa_yang_tidak_hadir',
        'kelas',
        'link_pembelajaran',
        'dokumentasi',
        'keterangan'
    ];
}
