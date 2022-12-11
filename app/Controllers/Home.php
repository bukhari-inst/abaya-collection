<?php

namespace App\Controllers;

use App\Models\Musers;

class Home extends BaseController
{
    public function __construct()
    {
        $this->Muser = new Musers();
    }

    public function index()
    {
        $roleUser = $this->Muser->getRoleUser();

        $data = [
            'validation' => \Config\Services::validation(),
            'form' => \Config\Services::form(),
            'user' => $roleUser
        ];

        return view('pages/index', $data);
    }

    public function category()
    {
        return view('pages/users/customer/category');
    }
}