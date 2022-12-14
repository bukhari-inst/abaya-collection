<?php

namespace App\Models;

use CodeIgniter\Model;

class Mproduk extends Model
{
    protected $table = 'produk';
    protected $primaryKey = 'id';

    protected $useTimestamps = true;
    protected $useSoftDeletes = false;
    protected $returnType = 'object';

    protected $allowedFields = [
        'staff_id', 'nama', 'harga', 'diskon', 'file_name',
        'created_at', 'updated_at', 'deleted_at'
    ];

    public function getProdukWhereId($id = false)
    {
        return $this->where(['id' => $id])->first();
    }
}