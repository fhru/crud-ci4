<?= $this->extend('layouts/template'); ?>

<?= $this->section('bgcolor'); ?>
style="background-color: #0f0f0f"
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<!-- <div class="container pt-5">
    <div class="row">
        <div class="col d-flex justify-content-center flex-column align-items-center">
            <h3 class="fw-bold mt-4">Detail Komik</h3>
            <div class="card mb-3 text-white bg-dark" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/img/<?= $komik['sampul']; ?>" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $komik['judul']; ?></h5>
                            <div class="card-text">
                                <span class="fw-bold">Penulis:</span> <?= $komik['penulis']; ?> <br>
                                <span class="fw-bold">Penerbit:</span> <?= $komik['penerbit']; ?>
                            </div>
                        </div>
                        <div class="card-footer">
                            <form action="/komik/<?= $komik['id']; ?>" method="POST" class="d-inline">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin?')">Delete</button>
                                <a href="/komik/edit/<?= $komik['slug']; ?>" class="btn btn-warning">Edit</a>
                                <a href="/komik" class="btn btn-success float-end">Back</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="fw-bold text-white text-center my-3">Detail Komik</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card bg-dark text-white my-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/img/<?= $komik['sampul']; ?>" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body h-100 d-flex justify-content-center flex-column ">
                            <h3 class="card-title fw-bold text-warning mb-3"><?= $komik['judul']; ?></h3>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque tenetur consequatur eius! Quia labore nostrum possimus ut suscipit cumque voluptatem?</p>
                            <div class="card-text text-muted mb-3">
                                Penulis: <?= $komik['penulis']; ?><br>
                                Penerbit: <?= $komik['penerbit']; ?>
                            </div>
                            <form action="/komik/<?= $komik['id']; ?>" method="POST" class="d-inline">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <div class="row">
                                    <div class="col">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin?')">Delete</button>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="d-grid">
                                            <a href="/komik/edit/<?= $komik['slug']; ?>" class="btn btn-warning">Edit</a>
                                        </div>
                                    </div>

                                </div>
                            </form>
                            <div class="d-grid">

                                <a href="/komik" class="mt-2 btn btn-outline-primary">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>