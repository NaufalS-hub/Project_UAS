<?php

namespace App\Controllers;

use App\Models\PaketModel;

class ProdukController extends BaseController
{
    public function index()
    {
        $model = new PaketModel();
        $data['paket'] = $model->findAll();

        return view('v_paket', $data);
    }
}
