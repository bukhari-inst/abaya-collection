<?php

namespace App\Controllers;

use App\Models\Musers;
use App\Models\Mhero;

class Hero extends BaseController
{
    public function __construct()
    {
        $this->Muser = new Musers();
        $this->Mhero = new Mhero();
    }

    public function index()
    {
        $roleUser = $this->Muser->getRoleUser();
        $hero = $this->Mhero->findAll();

        $data = [
            'validation' => \Config\Services::validation(),
            'user' => $roleUser,
            'hero' => $hero,
        ];

        return view('pages/users/staff/hero', $data);
    }

    public function acceptHero()
    {
        $hero = $this->request->getPost();

        $data = [
            'id' => $hero['id'],
            'status' => 'Disetujui',
        ];

        // dd($data);

        if (!$this->Mhero->save($data)) {
            session()->setFlashdata('error', 'Hero gagal disetujui');
            return redirect()->back()->withInput();
        }

        session()->setFlashdata('success', 'Hero berhasil disetujui');
        return redirect()->back()->withInput();
    }

    public function delete()
    {
        $hero = $this->request->getPost();
        $valHero = $this->Mhero->getHeroWhereId($hero['id']);

        if (!$this->Mhero->delete($hero['id'])) {
            session()->setFlashdata('error', 'Hero gagal didelete');
            return redirect()->back()->withInput();
        }

        unlink('assets/images/slideshows/' . $valHero->file_name);

        session()->setFlashdata('success', 'Hero berhasil didelete');
        return redirect()->back()->withInput();
    }

    public function update()
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama hero harus disisi',
                ]
            ],
            'filehero' => [
                'rules' => 'ext_in[filehero,png,jpeg,jpg,gif]|mime_in[filehero,image/png,image/jpeg,image/jpg]|max_size[filehero,5024]',
                'errors' => [
                    'ext_in' => 'File foto hero yang anda upload bukan gambar',
                    'mime_in' => 'File foto hero yang anda upload bukan gambar',
                    'max_size' => 'File foto hero maks < 1MB',
                ]
            ]
        ])) {
            return redirect()->back()->withInput();
        };

        $hero = $this->request->getPost();
        $valHero = $this->Mhero->getHeroWhereId($hero['id']);

        $nama = ucwords(strtolower($hero['nama']));

        // take a file
        $file = $this->request->getFile('filehero');
        if ($file->getError() == 4) {
            $file_name = $valHero->file_name;
        } else {
            $file_name = $file->getRandomName();
            $file->move('assets/images/slideshows/', $file_name);

            unlink('assets/images/slideshows/' . $file_name);
        }

        $data = [
            'id' => $hero['id'],
            'staff_id' => user_id(),
            'nama' => $nama,
            'file_name' => $file_name,
        ];

        // dd($data);

        if (!$this->Mhero->save($data)) {
            session()->setFlashdata('error', 'Hero gagal diupdate');
            return redirect()->back()->withInput();
        }

        session()->setFlashdata('success', 'Hero berhasil diupdate');
        return redirect()->back()->withInput();
    }

    public function upload()
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama hero harus disisi',
                ]
            ],
            'filehero' => [
                'rules' => 'uploaded[filehero]|ext_in[filehero,png,jpeg,jpg,gif]|mime_in[filehero,image/png,image/jpeg,image/jpg]|max_size[filehero,5024]',
                'errors' => [
                    'uploaded' => 'Foto hero harus disisi',
                    'ext_in' => 'File foto hero yang anda upload bukan gambar',
                    'mime_in' => 'File foto hero yang anda upload bukan gambar',
                    'max_size' => 'File foto hero maks < 1MB',
                ]
            ]
        ])) {
            return redirect()->back()->withInput();
        };

        $hero = $this->request->getPost();

        $nama = ucwords(strtolower($hero['nama']));
        // take a file
        $file = $this->request->getFile('filehero');
        $file_name = $file->getRandomName();
        $file->move('assets/images/slideshows/', $file_name);

        $data = [
            'staff_id' => user_id(),
            'nama' => $nama,
            'file_name' => $file_name,
        ];

        // dd($data);

        if (!$this->Mhero->save($data)) {
            session()->setFlashdata('error', 'Hero gagal diupload');
            return redirect()->back()->withInput();
        }

        session()->setFlashdata('success', 'Hero berhasil diupload');
        return redirect()->back()->withInput();
    }
}