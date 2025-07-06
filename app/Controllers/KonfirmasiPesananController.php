<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class KonfirmasiPesananController extends BaseController
{
    #--------------------------------------------------------------------
    # RAJAONGKIR API
    #--------------------------------------------------------------------
    const COST_KEY = "I2IzkSScad4c3a6c0260c8e4vF3fDbBM";

    #--------------------------------------------------------------------
    # TOKO API 
    #--------------------------------------------------------------------
    const API_KEY = "random123678abcghi" ;

    public function konfirmasi_wa()
    {
      $data = [
            'nama' => $this->request->getPost('nama'),
            'nomorhp' => $this->request->getPost('nomorhp'),
            'paket'     => $this->request->getPost('paket'),
            'harga'     => $this->request->getPost('harga'),
        ];
        log_message('info', 'Konfirmasi Pesanan: ' . json_encode($data));
//isi dengan perintah u/ mengirim pesan WA
        // Contoh: kirim pesan ke WhatsApp menggunakan API atau library yang sesuai
        // $this->whatsappService->sendMessage($data['nomorhp'], "Pesanan Anda: " . json_encode($data));

        // Simpan data ke session atau database jika perlu
        // session()->set('konfirmasi_pesanan', $data);
        // Redirect atau tampilkan pesan sukses
        //return redirect()->to('/notifikasi');
        //doSomething(self::COST_KEY, self::API_KEY); 
      return view('notifikasi');
    }
}