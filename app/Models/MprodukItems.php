<?php

namespace App\Models;

use CodeIgniter\Model;

class MprodukItems extends Model
{
    protected $table = 'produk_items';
    protected $primaryKey = 'id';

    protected $useTimestamps = true;
    protected $useSoftDeletes = false;
    protected $returnType = 'object';

    protected $allowedFields = [
        'staff_id', 'produk_id', 'warna', 'stok',
        'terjual', 'star', 'status', 'file_name',
        'created_at', 'updated_at', 'deleted_at'
    ];

    public function searchProduk(
        $min = false,
        $max = false,
        $ungu = false,
        $hijau = false,
        $merah = false,
        $biru = false,
        $kuning = false,
        $hitam = false,
        $abu = false,
        $putih = false,
        $pink = false,
        $orange = false
    ) {
        $colors = [
            "$ungu", "$hijau", "$merah", "$biru",
            "$kuning", "$hitam", "$abu", "$putih", "$pink", "$orange"
        ];
        return $this->select('produk_items.id as idPd, 
        produk_items.file_name as prdtFileName, warna, stok, 
        prd.file_name as prdFileName, status, nama, harga, prd.id as prdId')
            ->join('produk prd', 'prd.id = produk_items.produk_id')
            ->where('harga >=', $min)
            ->where('harga <=', $max)
            ->whereIn('warna', $colors)
            ->findAll();
    }

    public function getAllProdukItems()
    {
        return $this->select('produk_items.id as idPd, 
        produk_items.file_name as prdtFileName, warna, stok, 
        prd.file_name as prdFileName, status, nama, harga, prd.id as prdId')
            ->join('produk prd', 'prd.id = produk_items.produk_id')
            ->where('status', 'Disetujui')
            ->groupBy('prdFileName')
            ->orderBy('idPd', 'DESC')
            ->findAll();
    }

    public function getProdukWhereId($id = false)
    {
        return $this->where(['id' => $id])->first();
    }

    public function getAllProduk()
    {
        return $this->select('produk_items.id as idPd, 
        produk_items.file_name as prdtFileName, warna, stok, 
        prd.file_name as prdFileName, status, nama, harga, prd.id as prdId')
            ->join('produk prd', 'prd.id = produk_items.produk_id')
            ->findAll();
    }
}