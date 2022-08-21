<?php
$title = 'Home';
include '../header.php';
require_once ('../controllers/read-wisata.php');

?>

<div class="container">
    <div class="jumbotron">
    <h1 class="display-4">Selamat Datang!</h1>
    <p class="lead">Tempat rekresasi untuk keluarga</p>
    <hr class="my-4">
    <p>Nikmati hari libur anda dengan berlibur di tempat berikut :</p>
    </div>
</div>

<div class="container">
    <div class="row justify-content-between gap-1">
        <?php while ($data = mysqli_fetch_array($result)): ?>
        <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                <img src="<?= $data['image'] ?>" class="card-img-top" alt="<?= $data['nama'] ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $data['nama'] ?></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
</div>

<?php include '../footer.php';
?>
