<?php

namespace App\Controllers;

use App\Models\Musers;
use App\Models\Mproduk;
use App\Models\MprodukItems;

class Produk extends BaseController
{
    public function __construct()
    {
        $this->Mproduk = new Mproduk();
        $this->MprodukItems = new MprodukItems();
        $this->Muser = new Musers();
    }

    public function index()
    {
        $roleUser = $this->Muser->getRoleUser();
        $produk = $this->Mproduk->orderBy('id', 'DESC')->findAll();
        // dd($produk);

        $data = [
            'validation' => \Config\Services::validation(),
            'user' => $roleUser,
            'produk' => $produk,
        ];

        return view('pages/users/staff/produk', $data);
    }

    public function produkItems()
    {
        $roleUser = $this->Muser->getRoleUser();
        $produk = $this->Mproduk->orderBy('nama', 'ASC')->findAll();
        $produkItem = $this->MprodukItems->getProdukWhereUser();
        // dd($produk);

        $data = [
            'validation' => \Config\Services::validation(),
            'user' => $roleUser,
            'produks' => $produk,
            'produk' => $produkItem,
        ];

        return view('pages/users/staff/produk_items', $data);
    }

    public function mProdukItems()
    {
        $roleUser = $this->Muser->getRoleUser();
        $produk = $this->Mproduk->orderBy('nama', 'ASC')->findAll();
        $produkItem = $this->MprodukItems->getAllProduk();
        // dd($produk);

        $data = [
            'validation' => \Config\Services::validation(),
            'user' => $roleUser,
            'produks' => $produk,
            'produk' => $produkItem,
        ];

        return view('pages/users/staff/produk_items', $data);
    }

    public function acceptProduk()
    {
        $produk = $this->request->getPost();

        $data = [
            'id' => $produk['id'],
            'status' => $produk['status'],
        ];

        // dd($data);

        if (!$this->MprodukItems->save($data)) {
            session()->setFlashdata('error', 'Status produk gagal diperbarui');
            return redirect()->back()->withInput();
        }

        session()->setFlashdata('success', 'Status produk berhasil diperbarui');
        return redirect()->back()->withInput();
    }

    public function deleteProdukItems()
    {
        $produk = $this->request->getPost();
        $valProduk = $this->MprodukItems->getProdukWhereId($produk['id']);

        if (!$this->MprodukItems->delete($produk['id'])) {
            session()->setFlashdata('error', 'Produk gagal didelete');
            return redirect()->back()->withInput();
        }

        unlink('assets/images/products/' . $valProduk->file_name);

        session()->setFlashdata('success', 'Produk berhasil didelete');
        return redirect()->back()->withInput();
    }

    public function updateProdukItems()
    {
        if (!$this->validate([
            'prdId' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Pilih produk harus disisi',
                ]
            ],
            'warna' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Warna produk harus disisi',
                ]
            ],
            'stok' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Stok produk harus disisi',
                ]
            ],
            'fileproduk' => [
                'rules' => 'ext_in[fileproduk,png,jpeg,jpg,gif]|mime_in[fileproduk,image/png,image/jpeg,image/jpg]|max_size[fileproduk,5024]',
                'errors' => [
                    'ext_in' => 'File foto produk produk yang anda upload bukan gambar',
                    'mime_in' => 'File foto produk produk yang anda upload bukan gambar',
                    'max_size' => 'File foto produk maks < 1MB',
                ]
            ]
        ])) {
            return redirect()->back()->withInput();
        };

        $produkItem = $this->request->getPost();
        $valProduk = $this->MprodukItems->getProdukWhereId($produkItem['id']);

        $warnaProduk = ucwords(strtolower($produkItem['warna']));

        // take a file
        $file = $this->request->getFile('fileproduk');
        if ($file->getError() == 4) {
            $file_name = $valProduk->file_name;
        } else {
            $file_name = $file->getRandomName();
            $file->move('assets/images/products/', $file_name);

            unlink('assets/images/products/' . $valProduk->file_name);
        }

        $data = [
            'id' => $produkItem['id'],
            'staff_id' => user_id(),
            'produk_id' => $produkItem['prdId'],
            'warna' => $warnaProduk,
            'stok' => $produkItem['stok'],
            'file_name' => $file_name,
        ];

        // dd($data);

        if (!$this->MprodukItems->save($data)) {
            session()->setFlashdata('error', 'Produk gagal diupdate');
            return redirect()->back()->withInput();
        }

        session()->setFlashdata('success', 'Produk berhasil diupdate');
        return redirect()->back()->withInput();
    }

    public function uploadProdukItems()
    {
        if (!$this->validate([
            'prdId' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Pilih produk harus disisi',
                ]
            ],
            'warna' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Warna produk harus disisi',
                ]
            ],
            'stok' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Stok produk harus disisi',
                ]
            ],
            'fileproduk' => [
                'rules' => 'uploaded[fileproduk]|ext_in[fileproduk,png,jpeg,jpg,gif]|mime_in[fileproduk,image/png,image/jpeg,image/jpg]|max_size[fileproduk,5024]',
                'errors' => [
                    'uploaded' => 'Foto produk harus disisi',
                    'ext_in' => 'File foto produk produk yang anda upload bukan gambar',
                    'mime_in' => 'File foto produk produk yang anda upload bukan gambar',
                    'max_size' => 'File foto produk maks < 1MB',
                ]
            ]
        ])) {
            return redirect()->back()->withInput();
        };

        $produkItem = $this->request->getPost();

        $warnaProduk = ucwords(strtolower($produkItem['warna']));
        // take a file
        $file = $this->request->getFile('fileproduk');
        $file_name = $file->getRandomName();
        $file->move('assets/images/products/', $file_name);

        $data = [
            'staff_id' => user_id(),
            'produk_id' => $produkItem['prdId'],
            'warna' => $warnaProduk,
            'stok' => $produkItem['stok'],
            'file_name' => $file_name,
        ];

        // dd($data);

        if (!$this->MprodukItems->save($data)) {
            session()->setFlashdata('error', 'Produk detail gagal diupload');
            return redirect()->back()->withInput();
        }

        session()->setFlashdata('success', 'Produk berhasil diupload');
        return redirect()->back()->withInput();
    }

    public function delete()
    {
        $produk = $this->request->getPost();
        $valProduk = $this->Mproduk->getProdukWhereId($produk['id']);

        if (!$this->Mproduk->delete($produk['id'])) {
            session()->setFlashdata('error', 'Produk gagal didelete');
            return redirect()->back()->withInput();
        }

        unlink('assets/images/products/cover/' . $valProduk->file_name);

        session()->setFlashdata('success', 'Produk berhasil didelete');
        return redirect()->back()->withInput();
    }

    public function update()
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama produk harus disisi',
                ]
            ],
            'harga' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'Harga produk harus disisi',
                ]
            ],
            'filecover' => [
                'rules' => 'ext_in[filecover,png,jpeg,jpg,gif]|mime_in[filecover,image/png,image/jpeg,image/jpg]|max_size[filecover,5024]',
                'errors' => [
                    'ext_in' => 'File foto cover produk yang anda upload bukan',
                    'mime_in' => 'File foto cover produk yang anda upload bukan gambar',
                    'max_size' => 'File foto cover maks < 1MB',
                ]
            ],
        ])) {
            return redirect()->back()->withInput();
        };

        $produk = $this->request->getPost();
        $valProduk = $this->Mproduk->getProdukWhereId($produk['id']);

        $namaProduk = ucwords(strtolower($produk['nama']));

        // take a file
        $file = $this->request->getFile('filecover');
        if ($file->getError() == 4) {
            $file_name = $valProduk->file_name;
        } else {
            $file_name = $file->getRandomName();
            $file->move('assets/images/products/cover/', $file_name);

            unlink('assets/images/products/cover/' . $valProduk->file_name);
        }

        $data = [
            'id' => $produk['id'],
            'staff_id' => user_id(),
            'nama' => $namaProduk,
            'harga' => $produk['harga'],
            'file_name' => $file_name,
        ];

        if (!$this->Mproduk->save($data)) {
            session()->setFlashdata('error', 'Produk gagal diupdate');
            return redirect()->back()->withInput();
        }

        session()->setFlashdata('success', 'Produk berhasil diupdate');
        return redirect()->back()->withInput();
    }

    public function upload()
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama produk harus disisi',
                ]
            ],
            'harga' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'Harga produk harus disisi',
                ]
            ],
            'filecover' => [
                'rules' => 'uploaded[filecover]|ext_in[filecover,png,jpeg,jpg,gif]|mime_in[filecover,image/png,image/jpeg,image/jpg]|max_size[filecover,5024]',
                'errors' => [
                    'uploaded' => 'Foto cover produk harus disisi',
                    'ext_in' => 'File foto cover produk yang anda upload bukan',
                    'mime_in' => 'File foto cover produk yang anda upload bukan gambar',
                    'max_size' => 'File foto cover maks < 1MB',
                ]
            ],
        ])) {
            return redirect()->back()->withInput();
        };

        $produk = $this->request->getPost();

        // dd($produk['nama']);
        $namaProduk = ucwords(strtolower($produk['nama']));
        // take a file
        $file = $this->request->getFile('filecover');
        $file_name = $file->getRandomName();
        $file->move('assets/images/products/cover/', $file_name);

        $data = [
            'staff_id' => user_id(),
            'nama' => $namaProduk,
            'harga' => $produk['harga'],
            'file_name' => $file_name,
        ];

        if (!$this->Mproduk->save($data)) {
            session()->setFlashdata('error', 'Produk gagal diupload');
            return redirect()->back()->withInput();
        }

        session()->setFlashdata('success', 'Produk berhasil diupload');
        return redirect()->back()->withInput();
    }
}