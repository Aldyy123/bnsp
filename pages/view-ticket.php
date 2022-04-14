<?php
$title = 'Pemesanan Tiket';
include '../header.php'; 
require_once('../controllers/read-wisata.php')
?>

<div class="container form-ticket mt-3">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card p-2">
                <form action="../controllers/new-passanger.php" method="POST">
                    <div class="form-group d-flex justify-content-between m-2">
                        <label for="nama">Nama Lengkap</label>
                        <input required="true" type="text" id="nama" name="nama-lengkap" placeholder="Nama Lengkap.."class="form-control">
                    </div>
                    <div class="form-group d-flex justify-content-between m-2">
                        <label for="no-id">Nomor Identitas</label>
                        <input required="true" type="number" id="no-id" name="no-identitas" placeholder="Nomor Identitas.." class="form-control">
                    </div>
                    <div class="form-group d-flex justify-content-between m-2">
                        <label for="phone">No HP</label>
                        <input required="true" type="phone" id="phone" name="phone" placeholder="Telepon..."class="form-control">
                    </div>
                    <div class="form-group d-flex justify-content-between m-2">
                        <label for="place-tour">Tempat Wisata</label>
                        <select required class="form-select" name="tempat-wisata" id="place-tour">
                            <option value="">Pilih wisata</option>
                            <?php while ($row = mysqli_fetch_array($result)):?>
                                <option value="<?= $row['id'] ?>"><?= $row['nama'] ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="form-group d-flex justify-content-between m-2">
                        <label for="date-tour">Tanggal Kunjungan</label>
                        <input required="true" type="date" id="date-tour" name="date-tour" placeholder="tanggal Berangkat..."class="form-control">
                    </div>
                    <div class="form-group d-flex justify-content-between m-2">
                        <label for="adult-ps">Penumpang Dewasa</label>
                        <input required="true" type="number" id="adult-ps" name="adult-ps" placeholder="Penumpang Dewasa..."class="form-control">
                    </div>
                    <div class="form-group d-flex justify-content-between m-2">
                        <label for="child-ps" class="child-ps">
                            <span>Penumpang Anak - anak</span>
                            <span>usia di bawah 12 tahun</span>
                        </label>
                        <input required="true" type="text" id="child-ps" name="child-ps" placeholder="Penumpang anak -anak..."class="form-control">
                    </div>
                    <div class="form-group d-flex justify-content-between m-2">
                        <label for="price-ticket">Harga Tiket</label>
                        <div class="d-flex price">

                            <span id="price-ticket"></span>
                        </div>
                    </div>
                    <div class="form-group d-flex justify-content-between m-2">
                        <label for="total-price">Total bayar</label>
                        <div class="d-flex price">
                            <input required="true" type="hidden" id="total-price" name="total-price">
                            <span id="total"> </span>
                        </div>
                    </div>
                    <div class="form-check d-flex justify-content-between m-2">
                        <input required="true" class="form-check-input" type="checkbox" id="agree" name="agree">
                        <label class="form-check-label" for="agree" name="agree">
                        Saya dan para rombongan sudah membaca, memahami, dan setuju 
                        berdasarkan syarat 
                        dan ketentuan yang di ditetapkan
                        </label>
                    </div>
                    <div class="d-flex justify-content-around m-3">
                        <button class="total btn btn-dark">Total</button>
                        <input type="submit" name="submit" value="Pesan Tiket" class="btn btn-dark">
                        <a href="./view-wisata.php" class="cancel btn btn-dark">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include '../footer.php'; ?>
