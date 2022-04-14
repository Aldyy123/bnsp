<?php
$title = 'Input Wisata Baru';
include '../header.php';
?>

<div class="container input-wisata mt-4">
    <div class="row">
        <div class="col-md-6 offset-md-2">
            <form action="../controllers/add-wisata.php" method="POST">
                    <div class="form-floating mt-2">
                        <input type="text" class="form-control" id="nama-wisata" placeholder="Harga" name="nama-wisata" required>
                        <label for="nama-wisata">Nama wisata</label>
                    </div>
                    <div class="form-floating mt-2">
                        <input type="text" class="form-control" id="harga-wisata" placeholder="Harga" name="harga-wisata" required>
                        <label for="harga-wisata">Harga Wisata</label>
                    </div>
                    <div class="form-floating mt-2">
                        <input type="text" class="form-control" id="image-wisata" placeholder="Harga" name="image-wisata" required>
                        <label for="image-wisata">Gambar Wisata ( Masukan URL Gambar )</label>
                    </div>
                    <div class="form-floating mt-2">
                        <input type="text" class="form-control" id="video-wisata" placeholder="Masukan Id Yutub" name="video-wisata" required>
                        <label for="video-wisata">Video Wisata ( Masukan Id Youtube )</label>
                    </div>
                    <div class="mt-2">
                        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                        <a href="./view-data-wisata.php" class="btn btn-danger">Kembali</a>
                    </div>
                </form>
        </div>
    </div>
</div>

<?php include '../footer.php'; ?>
