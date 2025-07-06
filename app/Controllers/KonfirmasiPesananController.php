<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class KonfirmasiPesananController extends BaseController
{
    const WHATSAPP_API_TOKEN = '4Ts6pmazx15SQo6mNbCz';
    const DEFAULT_TARGET_NUMBER = '6285337540088';

    public function konfirmasi_wa()
    {
      $data = [
          'nama' => $this->request->getPost('nama'),
          'nomorhp' => $this->request->getPost('nomorhp'),
          'paket'   => $this->request->getPost('paket'),
          'harga'   => $this->request->getPost('harga'),
      ];

      // WhatsApp API details
      $apiToken = self::WHATSAPP_API_TOKEN; // define this constant in your class
      $targetNumber = $data['nomorhp']; // or use a default if needed

      $message = "Pesanan atas nama {$data['nama']} untuk paket {$data['paket']} seharga {$data['harga']} telah diterima. Mengirim notifikasi ke nomor $targetNumber.";
      log_message('info', $message);
      // Example API endpoint and payload (adjust to your provider)
    
      $url = "https://api.whatsapp.com/send";
      $payload = [
          'token' => $apiToken,
          'to' => $targetNumber,
          'message' => $message
      ];

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      $response = curl_exec($ch);
      curl_close($ch);
      // Optionally log or handle $response
      log_message('info', "WhatsApp API response: $response");
      //return view('notifikasi');
      return $response;
    }
}