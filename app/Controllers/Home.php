<?php

namespace App\Controllers;

use App\Models\Musers;
use App\Models\Mhero;
use App\Models\MprodukItems;

class Home extends BaseController
{
    public function __construct()
    {
        $this->Muser = new Musers();
        $this->Mhero = new Mhero();
        $this->MprodukItems = new MprodukItems();
    }

    public function index()
    {
        $roleUser = $this->Muser->getRoleUser();
        $hero = $this->Mhero->where('status', 'Disetujui')->orderBy('id', 'DESC')->findAll();
        $produk = $this->MprodukItems->getAllProdukItems();

        $data = [
            'validation' => \Config\Services::validation(),
            'user' => $roleUser,
            'hero' => $hero,
            'produk' => $produk,
        ];

        return view('pages/index', $data);
    }

    public function category()
    {
        return view('pages/users/customer/category');
    }
}