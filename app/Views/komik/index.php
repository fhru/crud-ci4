<?= $this->extend('layouts/template'); ?>

<?= $this->section('bgcolor'); ?>
style="background-color: #0f0f0f"
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<!-- <div class="container">
    <div class="row">
        <div class="col">
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
            <h2>Daftar Komik</h2>
            <a href="/komik/create" class="btn btn-primary mb-3">Tambah Data</a>
            <table class="table table-hover table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Sampul</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 ?>
                    <?php foreach ($komik as $k) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td>
                                <img src="/img/<?= $k['sampul']; ?>" alt="" class="img-fluid sampul">
                            </td>
                            <td><?= $k['judul']; ?></td>
                            <td><a href="/komik/<?= $k['slug']; ?>" class="btn btn-primary">Details</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div> -->
<div class="container">
    <div class="row">
        <div class="col">
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
            <?= session()->level ?>
            <h1 class="fw-bold text-center my-4 text-light">Daftar Komik Jadul</h1>
            <div class="d-grid col-2 mx-auto mb-3">
                <a href="/komik/create" class="btn btn-primary mb-3">Tambah Data</a>
            </div>
        </div>
    </div>
    <div class="row" data-masonry='{"percentPosition": true }'>
        <?php foreach ($komik as $k) : ?>
            <div class="col-lg-4">
                <div class="card bg-dark text-white mb-4 fade show">
                    <img src="/img/<?= $k['sampul']; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $k['judul']; ?></h5>
                        <p class="card-text text-muted"><?= $k['penulis']; ?></p>
                        <div class="d-grid gap-2">
                            <a href="/komik/<?= $k['slug']; ?>" class="btn btn-warning fw-bold">Details</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?= $this->endSection(); ?>