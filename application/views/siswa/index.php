<div class="container mt-3">


    <div class="row mb-3">
        <div class="col-lg-6">
            <button type="submit" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
            Tambah Data Siswa
            </button>
        </div>        
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
          <form action="" method="post">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="cari siswa.." name="keyword" id="keyword" autocomplete="off">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit" id="tombolcari">Cari</button>
            </div>
          </div>
          </form>
        </div>        
    </div>

    <div class="row">
        <div class="col-lg-6">
        <h1>Daftar Siswa</h1>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data siswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
            <input type="hidden" name="id" id="id">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="form-group">
                <label for="nik">NIK</label>
                <input type="number" class="form-control" id="nik" name="nik">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <select class="form-control" id="jurusan" name="jurusan">
                    <option value="RPL">RPL</option>
                    <option value="TKJ">TKJ</option>
                    <option value="Akutansi">Akutansi</option>
                </select>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>