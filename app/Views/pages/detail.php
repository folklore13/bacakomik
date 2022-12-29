<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-4">Detail Komik</h2>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/img/<?= $komik["cover"] ?>" class="img-fluid rounded-start" alt="<?= $komik["title"] ?>">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $komik["title"]; ?></h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos iure quidem eius temporibus doloremque explicabo expedita adipisci dicta voluptatem! Et libero quos quae culpa tenetur expedita voluptas! Laudantium, dicta est.</p>
                            <p class="card-text"><small class="text-muted">Penulis: <?= $komik["author"]; ?></small></p>
                            <p class="card-text"><small class="text-muted">Penerbit: <?= $komik["publisher"]; ?></small></p>
                            <a href="" class="btn btn-warning">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
                            <a href="/comic" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>