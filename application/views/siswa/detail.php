<div class="container mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <?php foreach($result as $row): ?>
                <h5 class="card-title"><?= $row->nama; ?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?= $row->nisn; ?></h6>
                <p class="card-text"><?= $row->email; ?></p>
                <p class="card-text"><?= $row->jurusan; ?></p>
                <a href="<?= base_url('siswa'); ?>" class="card-link">Kembali</a>
            <?php endforeach; ?>
        </div>
    </div>
</div>