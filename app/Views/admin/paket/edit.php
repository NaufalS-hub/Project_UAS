<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<h3>Edit Paket</h3>
<form action="<?= base_url('admin/paket/update/' . $paket['id']) ?>" method="post">
  <div class="mb-3">
    <label>Nama Paket</label>
    <input type="text" name="nama_paket" class="form-control" value="<?= esc($paket['nama_paket']) ?>" required>
  </div>
  <div class="mb-3">
    <label>Deskripsi</label>
    <textarea name="deskripsi" class="form-control" required><?= esc($paket['deskripsi']) ?></textarea>
  </div>
  <div class="mb-3">
    <label>Harga</label>
    <input type="number" name="harga" class="form-control" value="<?= $paket['harga'] ?>" required>
  </div>
  <button class="btn btn-primary">Update</button>
  <a href="<?= base_url('admin/paket') ?>" class="btn btn-secondary">Batal</a>
</form>
<?= $this->endSection() ?>
