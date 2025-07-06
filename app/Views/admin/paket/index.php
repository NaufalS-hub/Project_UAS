<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="pagetitle">
  <h1>Kelola Paket</h1>
</div>

<a href="<?= site_url('admin/paket/create') ?>" class="btn btn-primary mb-3">Tambah Paket</a>

<table class="table table-bordered">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama Paket</th>
      <th>Deskripsi</th>
      <th>Harga</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $no = 1; foreach ($paket as $item): ?>
      <tr>
        <td><?= $no++ ?></td>
        <td><?= esc($item['nama_paket']) ?></td>
        <td><?= esc($item['deskripsi']) ?></td>
        <td>Rp <?= number_format($item['harga'], 0, ',', '.') ?></td>
        <td>
          <a href="<?= site_url('admin/paket/edit/' . $item['id']) ?>" class="btn btn-sm btn-warning">Edit</a>
          <a href="<?= site_url('admin/paket/delete/' . $item['id']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus paket ini?')">Hapus</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<?= $this->endSection() ?>
