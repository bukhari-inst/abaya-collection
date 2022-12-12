<?php

namespace App\Models;

use CodeIgniter\Model;

class Mhero extends Model
{
    protected $table = 'hero';
    protected $primaryKey = 'id';

    protected $useTimestamps = true;
    protected $useSoftDeletes = false;
    protected $returnType = 'object';

    protected $allowedFields = [
        'staff_id', 'nama', 'status', 'deleted_status', 'file_name',
        'created_at', 'updated_at', 'deleted_at'
    ];

    public function getHeroWhereId($id = false)
    {
        return $this->where(['id' => $id])->first();
    }
}