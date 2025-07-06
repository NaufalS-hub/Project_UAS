<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<h2>Tambah User</h2>

<form action="<?= base_url('admin/user/store') ?>" method="post">
  <div class="mb-3">
    <label>Username</label>
    <input type="text" name="username" class="form-control" required>
  </div>
  <div class="mb-3">
    <label>Password</label>
    <input type="password" name="password" class="form-control" required>
  </div>
  <div class="mb-3">
    <label>Role</label>
    <select name="role" class="form-control">
      <option value="admin">Admin</option>
      <option value="guest">Guest</option>
    </select>
  </div>
  <button class="btn btn-primary">Simpan</button>
</form>

<?= $this->endSection() ?>
