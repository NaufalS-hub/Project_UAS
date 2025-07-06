<?php

// app/Controllers/TransaksiController.php
namespace App\Controllers;

use App\Models\PaketModel;

class TransaksiController extends BaseController
{
    public function index()
    {
        $keranjang = session()->get('keranjang') ?? [];

        if (empty($keranjang)) {
            $data['keranjang'] = [];
        } else {
            $paketModel = new PaketModel();
            $data['keranjang'] = $paketModel->whereIn('id', $keranjang)->findAll();
        }

        return view('v_keranjang', $data);
    }

    public function tambah($id)
    {
        $keranjang = session()->get('keranjang') ?? [];

        // Cegah duplikat ID
        if (!in_array($id, $keranjang)) {
            $keranjang[] = $id;
        }

        session()->set('keranjang', $keranjang);

        return $this->response->setJSON(['status' => 'success']);
    }

    public function hapus($id)
{
    $keranjang = session()->get('keranjang') ?? [];

    if (($key = array_search($id, $keranjang)) !== false) {
        unset($keranjang[$key]);
        session()->set('keranjang', $keranjang);
    }

    return redirect()->to('/keranjang')->with('success', 'Item berhasil dihapus.');
}

    
}

