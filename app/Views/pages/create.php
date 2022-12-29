<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <h1>Form Tambah Data Komik</h1>
            <form action="/save" method="post">
                <?= csrf_field(); ?>
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" autofocus>

                </div>
                <div class="mb-3">
                    <label for="author" class="form-label">Author</label>
                    <input type="text" class="form-control" name="author">

                </div>
                <div class="mb-3">
                    <label for="publisher" class="form-label">Publisher</label>
                    <input type="text" class="form-control" name="publisher">

                </div>
                <div class="mb-3">
                    <label for="cover" class="form-label">Cover</label>
                    <input type="text" class="form-control" name="cover">

                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>