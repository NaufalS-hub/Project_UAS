<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<?php if (empty($keranjang)): ?>
  <div class="alert alert-info">Keranjang kosong</div>
<?php else: ?>
  <div class="table-responsive">
    <?php if (session()->getFlashdata('success')): ?>
  <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
<?php endif; ?>

    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Nama Paket</th>
          <th>Deskripsi</th>
          <th>Harga</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($keranjang as $item): ?>
          <tr>
            <td><?= esc($item['nama_paket']) ?></td>
            <td><?= esc($item['deskripsi']) ?></td>
            <td>Rp <?= number_format($item['harga'], 0, ',', '.') ?></td>
            <td>
              <form action="<?= base_url('keranjang/hapus/' . $item['id']) ?>" method="post" onsubmit="return confirm('Yakin ingin menghapus item ini?');">
                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
              </form>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
<?php endif; ?>

<?= $this->endSection() ?>
