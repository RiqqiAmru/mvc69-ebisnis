<div class="container">
  <div class="row">
    <div class="col-lg-6">
      <h3>Daftar Mahasiswa</h3> <br>
      <ul class="list-group">
        <?php foreach ($data['mhs'] as $mhs) : ?>
          <li><?= $mhs['nama'] ?></li>
          <li><?= $mhs['nrp'] ?></li>
          <li><?= $mhs['email'] ?></li>
          <li><?= $mhs['jurusan'] ?></li>
          <br>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</div>