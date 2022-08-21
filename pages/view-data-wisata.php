<?php
$title = 'Data Wisata';
include '../header.php';
require_once('../controllers/read-wisata.php');
?>

<div class="container view-data-wisata mt-4">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center">Data Wisata</h3>
            <a href="./view-input-wisata.php" class="btn btn-primary">Wisata Baru</a>
            <div class="table-overflow">
                <table class="table">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Video</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        <?php $i = 1;
                        while ($row = mysqli_fetch_array($result)) : ?>
                            <tr>
                                <th scope="row"><?= $i ?></th>
                                <td><?= $row['nama'] ?></td>
                                <td>Rp <?= number_format($row['harga'], 0, '.', '.') ?></td>
                                <td>
                                    <img src="<?= $row['image'] ?>" class="img-thumbnail" alt="<?= $row['nama'] ?>">
                                </td>
                                <td>
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $row['video'] ?>?rel=0" allowfullscreen></iframe>
                                    </div>
                                </td>
                                <td>
                                    <a href="./view-edit-wisata.php?id=<?= $row['id'] ?>" class="btn btn-warning">Edit</a>
                                    <a href="../controllers/hapus-wisata.php?id=<?= $row['id'] ?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php
                            $i++;
                        endwhile; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include '../footer.php'; ?>