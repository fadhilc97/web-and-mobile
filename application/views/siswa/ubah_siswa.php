<div class="container mt-5 col-sm-6">
    <div class="card">
        <div class="card-body">
            <form action="<?= base_url('siswa/proses_ubah_siswa') ?>" method="post">
            <?php foreach($result as $row): ?>
                <input type="hidden" name="id" id="id" value="<?= $id; ?>">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $row->nama; ?>">
                </div>
                <div class="form-group">
                    <label for="nisn">NISN</label>
                    <input type="text" class="form-control" id="nisn" name="nisn" value="<?= $row->nisn; ?>">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email"  value="<?= $row->email; ?>">
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <select class="form-control" id="jurusan" name="jurusan"  value="<?= $row->jurusan; ?>">
                        <option value="RPL">RPL</option>
                        <option value="TKJ">TKJ</option>
                        <option value="Akutansi">Akutansi</option>
                    </select>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Simpan perubahan</button>
                    <a href="<?= base_url('siswa') ?>" class="btn btn-danger">Batal</a>
                </div>
            <?php endforeach; ?>
            </form>
        </div>
    </div>
</div>