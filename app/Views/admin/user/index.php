<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="pagetitle">
  <h1>Kelola User</h1>
</div>

<section class="section">
  <div class="card">
    <div class="card-body">
      <a href="<?= base_url('admin/user/tambah') ?>" class="btn btn-primary mt-3">+ Tambah User</a>

      <table class="table datatable mt-3">
        <thead>
          <tr>
            <th>#</th>
            <th>Username</th>
            <th>Role</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($users as $i => $u): ?>
            <tr>
              <td><?= $i + 1 ?></td>
              <td><?= esc($u['username']) ?></td>
              <td><?= esc($u['role']) ?></td>
              <td>
                <a href="<?= base_url('admin/user/edit/' . $u['id']) ?>" class="btn btn-sm btn-warning">Edit</a>
                <a href="<?= base_url('admin/user/hapus/' . $u['id']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin?')">Hapus</a>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</section>

<?= $this->endSection() ?>
