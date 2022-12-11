<?php

namespace App\Controllers;

use App\Models\Mproduk;
use App\Models\MprodukDetail;

class Staff extends BaseController
{
    public function __construct()
    {
        $this->Mproduk = new Mproduk();
        $this->MprodukDetail = new MprodukDetail();
    }

    public function index()
    {
        $data = [
            'validation' => \Config\Services::validation(),
        ];

        return view('pages/users/admin/index', $data);
    }

    public function upload()
    {
        // if (!$this->validate([
        //     'nama' => [
        //         'rules' => 'required',
        //         'errors' => [
        //             'required' => 'Nama produk harus disisi',
        //         ]
        //     ],
        //     'harga' => [
        //         'rules' => 'required|numeric',
        //         'errors' => [
        //             'required' => 'Harga produk harus disisi',
        //         ]
        //     ],
        //     'warna' => [
        //         'rules' => 'required',
        //         'errors' => [
        //             'required' => 'Warna produk harus disisi',
        //         ]
        //     ],
        //     'filecover' => [
        //         'rules' => 'required|ext_in[filecover,png,jpeg,jpg,gif]|mime_in[filecover,image/png,image/jpeg,image/jpg]|max_size[filecover,1024]',
        //         'errors' => [
        //             'required' => 'Foto cover produk harus disisi',
        //             'ext_in' => 'File foto cover produk yang anda upload bukan',
        //             'mime_in' => 'File foto cover produk yang anda upload bukan gambar',
        //             'max_size' => 'File foto cover maks < 1MB',
        //         ]
        //     ],
        //     'fileproduk' => [
        //         'rules' => 'required|ext_in[fileproduk,png,jpeg,jpg,gif]|mime_in[fileproduk,image/png,image/jpeg,image/jpg]|max_size[fileproduk,1024]',
        //         'errors' => [
        //             'required' => 'Foto produk harus disisi',
        //             'ext_in' => 'File foto produk produk yang anda upload bukan gambar',
        //             'mime_in' => 'File foto produk produk yang anda upload bukan gambar',
        //             'max_size' => 'File foto produk maks < 1MB',
        //         ]
        //     ]
        // ])) {
        //     return redirect()->back()->withInput();
        // };

        $produk = $this->request->getPost();

        // dd($produk['nama']);

        // take a file
        $filecover_name = '';
        $filecover = $this->request->getFile('filecover');
        if ($filecover->getError() == 4) {
            $filecover_name = '';
        } else {
            $filecover_name = $filecover->getRandomName();
            $filecover->move('assets/images/products/cover/', $filecover_name);
        }

        $fileproduk_name = '';
        $fileproduk = $this->request->getFile('fileproduk');
        if ($fileproduk->getError() == 4) {
            $fileproduk_name = '';
        } else {
            $fileproduk_name = $fileproduk->getRandomName();
            $fileproduk->move('assets/images/products/', $fileproduk_name);
        }

        $data = [
            'staff_id' => user_id(),
            'nama' => $produk['nama'],
            'harga' => $produk['harga'],
            'file_name' => $filecover_name,
        ];
        if (!$this->Mproduk->save($data)) {
            return redirect()->back()->withInput()->with('errors', $this->Mproduk->errors());
        }

        session()->setFlashdata('success', 'Produk berhasil diupload');
        return redirect()->back()->withInput();
    }
}