<?php

namespace App\Models;

use CodeIgniter\Model;

class MprodukDetail extends Model
{
    protected $table = 'produk_detail';
    protected $primaryKey = 'id';

    protected $useTimestamps = true;
    protected $useSoftDeletes = false;
    protected $returnType = 'object';

    protected $allowedFields = [];
}