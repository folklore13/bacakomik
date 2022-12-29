<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Daftar Komik</h1>
            <a href="/create" class="btn btn-success">Tambah Data Komik</a>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?php echo session()->getFlashdata('pesan') ?>
                </div>
            <?php endif; ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Title</th>
                        <th scope="col">Author</th>
                        <th scope="col">Cover</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 ?>
                    <?php foreach ($komik as $k) : ?>
                        <tr>
                            <th scope="row"><?php echo $i++ ?></th>
                            <td><?php echo $k["title"] ?></td>
                            <td><?php echo $k["author"] ?></td>
                            <td><img src="/img/<?php echo $k["cover"] ?>" alt="<?php echo $k["title"] ?>"></td>
                            <td><a href="/comic/<?= $k["slug"] ?>" class="btn btn-success">Detail</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>