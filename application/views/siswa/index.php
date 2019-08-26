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
			<form action="<?= base_url('siswa'); ?>" method="post">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="cari siswa.." name="keyword" id="keyword"
						autocomplete="off">
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

      <!-- flasher untuk insert -->
			<?php if($this->session->insert == 'success'): ?>
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				Data berhasil disimpan
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
      </div>
      <?php endif; ?>
      
      <!-- flasher untuk update -->
      <?php if($this->session->update == 'success'): ?>
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				Data berhasil diubah
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
      </div>
      <?php endif; ?>

      <!-- flasher untuk delete -->
      <?php if($this->session->delete == 'success'): ?>
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				Data berhasil dihapus
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
      </div>
      <?php endif; ?>

			<div class="card">
        <?php 
          if($banyak_siswa == 0) $card_header = "Data siswa masih kosong" ;
          else $card_header = "Daftar siswa ($banyak_siswa) ";
        ?>
				<div class="card-header">
					<?= $card_header; ?>
				</div>
				<ul class="list-group list-group-flush">
					<?php foreach($result as $row): ?>
					<li class="list-group-item">
						<?= $row->nama; ?>
						<a href="<?= base_url('siswa/hapus_siswa/'.$row->id); ?>"
							class="badge badge-danger float-right ml-2" data-target="#konfirmasiDelete" data-toggle="modal">Hapus</a>
						<a href="<?= base_url('siswa/ubah_siswa/'.$row->id); ?>"
							class="badge badge-warning float-right ml-2">Ubah</a>
						<a href="<?= base_url('siswa/info_siswa/'.$row->id); ?>"
							class="badge badge-primary float-right ml-2">Info</a>
					</li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
	</div>



</div>

<!-- Modal tambah data -->
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
				<form action="<?= base_url('siswa/tambah_siswa') ?>" method="post">
					<input type="hidden" name="id" id="id">
					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" class="form-control" id="nama" name="nama">
					</div>
					<div class="form-group">
						<label for="nisn">NISN</label>
						<input type="text" class="form-control" id="nisn" name="nisn">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control" id="email" name="email">
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

<!-- Modal konfirmasi delete -->
<div class="modal fade" id="konfirmasiDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah anda yakin ingin menghapus data?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
        <a href="<?= base_url('siswa/hapus_siswa/'.$row->id); ?>" class="btn btn-danger">Hapus</a>
      </div>
    </div>
  </div>
</div>