<?php
require_once('../controllers/read-spesifik.php');

$title = 'Edit Wisata Baru';
include '../header.php';
?>

<div class="container input-wisata mt-4">
    <div class="row">
        <div class="col-md-6 offset-md-2">
            <?php 
            foreach ($result as $value):
            ?>
            <form action="../controllers/edit-wisata.php" method="POST">
                <input type="hidden" value="<?= $value['id'] ?>" name="id">
                    <div class="form-floating mt-2">
                        <input type="text" class="form-control" id="nama-wisata" value="<?= $value['nama'] ?>" placeholder="Harga" name="nama-wisata" required>
                        <label for="nama-wisata">Nama wisata</label>
                    </div>
                    <div class="form-floating mt-2">
                        <input type="text" class="form-control" id="harga-wisata" placeholder="Harga" value="<?= $value['harga'] ?>" name="harga-wisata" required>
                        <label for="harga-wisata">Harga Wisata</label>
                    </div>
                    <div class="form-floating mt-2">
                        <input type="text" class="form-control" id="image-wisata" placeholder="Harga" name="image-wisata" value="<?= $value['image'] ?>" required>
                        <label for="image-wisata">Gambar Wisata ( Masukan URL Gambar )</label>
                    </div>
                    <div class="form-floating mt-2">
                        <input type="text" value="<?= $value['video'] ?>" class="form-control" id="video-wisata" placeholder="Masukan Id Yutub" name="video-wisata" required>
                        <label for="video-wisata">Video Wisata ( Masukan Id Youtube )</label>
                    </div>
                    <div class="mt-2">
                        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                        <a href="./view-data-wisata.php" class="btn btn-danger">Kembali</a>
                    </div>
                </form>
                <?php endforeach; ?>
        </div>
    </div>
</div>

<?php include '../footer.php'; ?>
