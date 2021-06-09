<div class="container mt-5">


  <div class="row">

    <div class="col-lg-6">
      <?php FlashMsg::flash(); ?>
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-lg-6">
      <button type="button" class="btn btn-primary tambahData" data-bs-toggle="modal" data-bs-target="#formModal">
        Tambah Data
      </button>
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-lg-6">
      <form action="<?= BASEURL;?>Mahasiswa/cari" method="POST">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Cari mahasiswa" name="keyword" id="keyword" autocomplete="off">
          <button class="btn btn-outline-secondary" type="submit" id="tombolcari">Cari</button>
        </div>
      </form>
    </div>
  </div>
  <div class="row">

    <div class="col-lg-6">

      <h3>Daftar Mahasiswa</h3>

      <ul class="list-group">
        <?php
        foreach ($data['mhs'] as $mhs) :
        ?>
          <li class="list-group-item "><?= $mhs['nama']; ?>
            <a href="<?= BASEURL;?>Mahasiswa/delete/<?= $mhs['id']; ?>" class="badge bg-danger float-end m-lg-1" onclick="return confirm('ingin dihapus? ');">Delete</a>
            <a href="<?= BASEURL;?>Mahasiswa/update/<?= $mhs['id']; ?>" class="badge bg-warning float-end m-lg-1 tampilModalUpdate" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs['id'] ?>">Update</a>
            <a href="<?= BASEURL;?>Mahasiswa/detail/<?= $mhs['id']; ?>" class="badge bg-primary float-end m-lg-1">Detail</a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>

</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Insert Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL;?>Mahasiswa/tambah" method="post">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="hidden" class="form-control" id="id" name="id">
            <input type="text" class="form-control" id="nama" name="nama">
          </div>
          <div class="mb-3">
            <label for="nim" class="form-label">Nim</label>
            <input type="number" class="form-control" id="nim" name="nim">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>
          <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <select name="jurusan" id="jurusan" class="form-control">
              <option value="Teknik Informatika">Teknik Informatika</option>
              <option value="Teknik Elektro">Teknik Elektro</option>
              <option value="Teknik Industri">Teknik Industri</option>
            </select>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>