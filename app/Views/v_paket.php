<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="row">
  <?php foreach ($paket as $item): ?>
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm paket-card" 
           data-id="<?= $item['id'] ?>"
           data-nama="<?= esc($item['nama']) ?>"
           data-deskripsi="<?= esc($item['deskripsi']) ?>"
           data-dari="<?= $item['dari'] ?>"
           data-sampai="<?= $item['sampai'] ?>"
           data-durasi="<?= esc($item['durasi']) ?>"
           data-harga_reguler="<?= esc($item['harga_reguler']) ?>"
           data-harga_vip="<?= esc($item['harga_vip']) ?>"
           style="cursor: pointer;">
        <div class="card-body">
          <h5 class="card-title"><?= esc($item['nama']) ?></h5>
          <p class="card-text"><?= esc($item['deskripsi']) ?></p>
          <p><strong>Rp <?= number_format($item['harga_reguler'], 0, ',', '.') ?></strong></p>
          <p><strong>Rp <?= number_format($item['harga_vip'], 0, ',', '.') ?></strong></p>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>

<!-- Modal -->
<div class="modal fade" id="paketModal" tabindex="-1" aria-labelledby="paketModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="paketModalLabel">Detail Paket</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p><strong>Nama:</strong> <span id="modalNama"></span></p>
        <p><strong>Deskripsi:</strong> <span id="modalDeskripsi"></span></p>
        <p><strong>Harga_reguler:</strong> Rp <span id="modalHarga_reguler"></span></p>
        <p><strong>Harga_vip:</strong> Rp <span id="modalHarga_vip"></span></p>
      </div>
      <div class="modal-footer">
        <button type="button" id="btnPesanSekarang" class="btn btn-success">Pesan Sekarang</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script>
  let selectedPaketId = null;

  document.querySelectorAll('.paket-card').forEach(card => {
    card.addEventListener('click', () => {
      selectedPaketId = card.dataset.id;
      document.getElementById('modalNama').textContent = card.dataset.nama;
      document.getElementById('modalDeskripsi').textContent = card.dataset.deskripsi;
      document.getElementById('modalHarga_reguler').textContent = parseInt(card.dataset.harga_reguler).toLocaleString('id-ID');
      document.getElementById('modalHarga_vip').textContent = parseInt(card.dataset.harga_vip).toLocaleString('id-ID');

      const modal = new bootstrap.Modal(document.getElementById('paketModal'));
      modal.show();
    });
  });

  document.getElementById('btnPesanSekarang').addEventListener('click', () => {
    fetch('/keranjang/tambah/' + selectedPaketId, {
      method: 'POST'
    })
    .then(res => res.json())
    .then(data => {
      if (data.status === 'success') {
        alert('Paket berhasil ditambahkan ke keranjang');
        bootstrap.Modal.getInstance(document.getElementById('paketModal')).hide();
      }
    });
  });
</script>
<?= $this->endSection() ?>
