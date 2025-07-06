<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<h3>Tambah Paket</h3>
<form action="<?= base_url('admin/paket/simpan') ?>" method="post">
  <div class="mb-3">
    <label>Nama Paket</label>
    <input type="text" name="nama_paket" class="form-control" required>
  </div>
  <div class="mb-3">
    <label>Deskripsi</label>
    <textarea name="deskripsi" class="form-control" required></textarea>
  </div>
  <div class="mb-3">
    <label>Harga</label>
    <input type="number" name="harga" class="form-control" required>
  </div>
  <button class="btn btn-success">Simpan</button>
  <a href="<?= base_url('admin/paket') ?>" class="btn btn-secondary">Batal</a>
</form>
<?= $this->endSection() ?>  