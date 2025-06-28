<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<?php if (session()->getFlashData('success')) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= session()->getFlashData('success') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>

<!-- Produk Grid -->
<div class="container py-4">
    <div class="row g-4">
        <?php foreach ($product as $item) : ?>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <?= form_open('keranjang') ?>
                <?= form_hidden('id', $item['id']) ?>
                <?= form_hidden('nama', $item['nama']) ?>
                <?= form_hidden('harga', $item['harga']) ?>
                <?= form_hidden('foto', $item['foto']) ?>

                <div class="card h-100 shadow-sm">
                    <div class="card-body d-flex flex-column align-items-center text-center">
                        <img src="<?= base_url('img/' . $item['foto']) ?>" alt="<?= esc($item['nama']) ?>" class="img-fluid mb-3" style="max-height: 200px; object-fit: contain;">
                        <h5 class="card-title"><?= esc($item['nama']) ?></h5>
                        <p class="text-primary fw-bold"><?= number_to_currency($item['harga'], 'IDR') ?></p>
                        <button type="submit" class="btn btn-info rounded-pill mt-auto">Beli</button>
                    </div>
                </div>
                <?= form_close() ?>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- End Produk Grid -->

<?= $this->endSection() ?>
