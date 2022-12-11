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

    protected $validationRules = [
        'nama' => 'required',
        'harga' => 'required|numeric',
        'file_name' => 'required|ext_in[filecover,png,jpeg,jpg,gif]|mime_in[filecover,image/png,image/jpeg,image/jpg]|max_size[filecover,1024]',
    ];

    protected $validationMessages = [
        'nama' => [
            'required' => 'Nama produk harus disisi',
        ],
        'harga' => [
            'required' => 'Harga produk harus disisi',
            'numeric' => 'Harga produk harus berisi angka',
        ],
        'file_name' => [
            'required' => 'Foto cover produk harus disisi',
            'ext_in' => 'File foto cover produk yang anda upload bukan',
            'mime_in' => 'File foto cover produk yang anda upload bukan gambar',
            'max_size' => 'File foto cover maks < 1MB',
        ]
    ];
}