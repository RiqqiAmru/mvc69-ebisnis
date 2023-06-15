<div class="container my-5">
  <div class="row">
    <div class="col-lg-6">
      <h3>Daftar Mahasiswa</h3> <br>
      <ul class="list-group">
        <?php foreach ($data['mhs'] as $mhs) : ?>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            <span><?= $mhs['nama'] ?></span>
            <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge bg-primary rounded-pill">detail</a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</div>