<?php

namespace App\Models;

use CodeIgniter\Model;

class PaketModel extends Model
{
    protected $table = 'paket';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'deskripsi', 'dari', 
    'sampai', 'durasi', 'harga_reguler', 'harga_vip'];
}
