<?php

namespace App\Controllers\Manager;

use App\Controllers\BaseController;
use App\Models\Musers;
use App\Models\Mhero;

class Hero extends BaseController
{
    public function __construct()
    {
        $this->Muser = new Musers();
        $this->Mhero = new Mhero();
    }
}