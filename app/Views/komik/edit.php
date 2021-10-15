<?= $this->extend('layouts/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row d-flex justify-content-center mt-3">
        <div class="col-lg-8 bg-white shadow-lg rounded-3 pb-5">
            <h2 class="my-3 text-center">Form Edit Data Komik</h2>
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <form action="/komik/update/<?= $komik['id']; ?>" method="POST" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="slug" value="<?= $komik['slug']; ?>">
                        <input type="hidden" name="sampulLama" value="<?= $komik['sampul']; ?>">
                        <div class="row mb-3">
                            <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?> " id="judul" name="judul" autofocus value="<?= (old('judul')) ? old('judul') : $komik['judul']; ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('judul'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= (old('penerbit')) ? old('penerbit') : $komik['penerbit']; ?>">
                            </div>
                        </div>
                        <div class=" row mb-3">
                            <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="penulis" name="penulis" value="<?= (old('penulis')) ? old('penulis') : $komik['penulis']; ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
                            <div class="col-sm-10">
                                <div class="mb-3">
                                    <input class="form-control <?= ($validation->hasError('sampul')) ? 'is-invalid' : ''; ?>" type="file" id="sampul" name="sampul" onchange="previewImg()">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('sampul'); ?>
                                    </div>
                                </div>
                                <img src="/img/<?= $komik['sampul']; ?>" class="img-thumbnail img-preview">
                            </div>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Ubah Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>