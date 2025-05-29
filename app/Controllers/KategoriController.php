<?php

namespace App\Controllers;

use App\Models\KategoriModel;

class KategoriController extends BaseController
{
    protected $kategori;

    public function __construct()
    {
        $this->kategori = new KategoriModel();
    }

    public function index()
    {
        $data['kategori'] = $this->kategori->findAll();
        return view('v_kategori', $data);
    }

    public function create()
    {
        $this->kategori->insert([
            'nama' => $this->request->getPost('nama'),
            'created_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->to('/kategori')->with('success', 'Kategori berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $this->kategori->update($id, [
            'nama' => $this->request->getPost('nama'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->to('/kategori')->with('success', 'Kategori berhasil diubah.');
    }

    public function delete($id)
    {
        $this->kategori->delete($id);
        return redirect()->to('/kategori')->with('success', 'Kategori berhasil dihapus.');
    }
}
