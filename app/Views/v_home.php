 <?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<form action="<?= base_url('notifikasi/kirim') ?>" method="post">
  <div class="col-lg-6">
      <!-- Vertical Form -->
      <div>
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama" value="naufalo">
      </div>
      <div>
        <label for="nomorhp" class="form-label">Nomor HP</label>
        <input type="text" class="form-control" name="nomorhp" value="08123456789">
      </div>
      <div>
        <label for="paket" class="form-label">Paket yang diambil</label>
        <input type="text" class="form-control" name="paket" value="Paket A">
      </div>
      <div class="col-12">
        <label for="harga" class="form-label">Harga</label>
        <input type="text" class="form-control" name="harga" value="123">
        </div>
  </div>

<div style="text-align: left">
  <button type="submit" id="btnKonfirmasiPesanan" class="btn btn-primary">Konfirmasi pesanan</button>
</div>
</form>

<!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Position</th>
                    <th scope="col">Age</th>
                    <th scope="col">Start Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Brandon Jacob</td>
                    <td>Designer</td>
                    <td>28</td>
                    <td>2016-05-25</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Bridie Kessler</td>
                    <td>Developer</td>
                    <td>35</td>
                    <td>2014-12-05</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Ashleigh Langosh</td>
                    <td>Finance</td>
                    <td>45</td>
                    <td>2011-08-12</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Angus Grady</td>
                    <td>HR</td>
                    <td>34</td>
                    <td>2012-06-11</td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Raheem Lehner</td>
                    <td>Dynamic Division Officer</td>
                    <td>47</td>
                    <td>2011-04-19</td>
                  </tr>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->
<?= $this->endSection() ?>