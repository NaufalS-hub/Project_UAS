<?= $this->extend('layout') ?>
<?= $this->section('content') ?>


<form action="<?= base_url('admin/user/update/' . $user['id']) ?>" method="post">
  <div class="mb-3">
    <label>Username</label>
    <input type="text" name="username" class="form-control" value="<?= esc($user['username']) ?>" required>
  </div>
  <div class="mb-3">
    <label>Password</label>
    <input type="password" name="password" class="form-control">
  </div>
  <div class="mb-3">
    <label>Role</label>
    <select name="role" class="form-control">
      <option value="admin" <?= $user['role'] === 'admin' ? 'selected' : '' ?>>Admin</option>
      <option value="guest" <?= $user['role'] === 'guest' ? 'selected' : '' ?>>Guest</option>
    </select>
  </div>
  <button class="btn btn-primary">Update</button>
  <!-- Tombol Batal -->
  <a href="<?= base_url('admin/user') ?>" class="btn btn-secondary">Batal</a>
</form>

<?= $this->endSection() ?>
