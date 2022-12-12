<?php

namespace App\Controllers;

use App\Models\Musers;
use App\Models\Mhero;

class Home extends BaseController
{
    public function __construct()
    {
        $this->Muser = new Musers();
        $this->Mhero = new Mhero();
    }

    public function index()
    {
        $roleUser = $this->Muser->getRoleUser();
        $hero = $this->Mhero->orderBy('id', 'DESC')->findAll();

        $data = [
            'validation' => \Config\Services::validation(),
            'user' => $roleUser,
            'hero' => $hero,
        ];

        return view('pages/index', $data);
    }

    public function category()
    {
        return view('pages/users/customer/category');
    }
}