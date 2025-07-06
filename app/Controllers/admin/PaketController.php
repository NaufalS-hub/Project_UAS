<?php

namespace App\Controllers;

use App\Models\PaketModel;

class PaketController extends BaseController
{
    public function index()
    {
        $model = new PaketModel();
        $data['paket'] = $model->findAll();
        return view('admin/paket/index', $data);
    }

    public function create()
    {
        return view('admin/paket/tambah');
    }

    public function store()
    {
        $data = [
            'nama_paket' => $this->request->getPost('nama_paket'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'harga' => $this->request->getPost('harga'),
        ];

        $model = new PaketModel();
        $model->insert($data);

        return redirect()->to('/admin/paket');
    }

    public function edit($id)
    {
        $model = new PaketModel();
        $data['paket'] = $model->find($id);
        return view('admin/paket/edit', $data);
    }

    public function update($id)
    {
        $data = [
            'nama_paket' => $this->request->getPost('nama_paket'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'harga' => $this->request->getPost('harga'),
        ];

        $model = new PaketModel();
        $model->update($id, $data);

        return redirect()->to('/admin/paket');
    }

    public function delete($id)
    {
        $model = new PaketModel();
        $model->delete($id);

        return redirect()->to('/admin/paket');
    }
}
