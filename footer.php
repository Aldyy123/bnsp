</footer>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.29/sweetalert2.min.js" integrity="sha512-gCB2+0sWe4La5U90EqaPP2t58EczKkQE9UoCpnkG2EDSOOihgX/6MiT3MC4jYVEX03pv6Ydk1xybLG/AtN+3KQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    <?php if (isset($_SESSION["flash_message"])) : ?>
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Your work has been saved',
            showConfirmButton: true,
            timer: 1500
        })
    <?php endif ?>
</script>
</body>

</html>

<?php
unset($_SESSION['flash_message']);
