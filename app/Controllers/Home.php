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
        $produk = $this->MprodukItems->getAllProdukItemsLimit8();

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
        $produk = $this->MprodukItems->getAllProdukItems();

        $data = [
            'produk' => $produk,
        ];

        return view('pages/users/customer/category', $data);
    }

    public function searchCategory()
    {
        $produk = $this->request->getPost();
        $min = number_format($produk['min'], 0, '.', '');
        $max = number_format($produk['max'], 0, '.', '');
        $ungu = '';
        $hijau = '';
        $merah = '';
        $biru = '';
        $kuning = '';
        $hitam = '';
        $putih = '';
        $pink = '';
        $orange = '';

        if (!empty($produk['ungu'])) {
            $ungu = $produk['ungu'];
        } else {
            $ungu = '';
        }
        if (!empty($produk['hijau'])) {
            $hijau = $produk['hijau'];
        } else {
            $hijau = '';
        }
        if (!empty($produk['merah'])) {
            $merah = $produk['merah'];
        } else {
            $merah = '';
        }
        if (!empty($produk['biru'])) {
            $biru = $produk['biru'];
        } else {
            $biru = '';
        }
        if (!empty($produk['kuning'])) {
            $kuning = $produk['kuning'];
        } else {
            $kuning = '';
        }
        if (!empty($produk['hitam'])) {
            $hitam = $produk['hitam'];
        } else {
            $hitam = '';
        }
        if (!empty($produk['putih'])) {
            $putih = $produk['putih'];
        } else {
            $putih = '';
        }
        if (!empty($produk['pink'])) {
            $pink = $produk['pink'];
        } else {
            $pink = '';
        }
        if (!empty($produk['orange'])) {
            $orange = $produk['orange'];
        } else {
            $orange = '';
        }

        $valProduk = $this->MprodukItems->searchProduk(
            $min,
            $max,
            $ungu,
            $hijau,
            $merah,
            $biru,
            $kuning,
            $hitam,
            $putih,
            $pink,
            $orange,
        );

        $data = [
            'produk' => $valProduk,
        ];

        return view('pages/users/customer/category', $data);
    }
}