<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Siswa extends Entity
{
    protected $datamap = [];
    protected $dates   = ['tanggal_masuk','tanggal_selesai','tanggal_lahir','created_at', 'updated_at'];
    protected $casts   = [];
}
