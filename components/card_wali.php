<div class="card w-50">
    <div class="card-body">
        <h5 class="card-title">Jumlah Wali</h5>

        <?php
        include '../queries/get_wali.php';
        echo "<h5 class='card-text text-secondary'>$jumlahWali</h5>";
        ?>

        <a href="..\layouts\list_wali.php" class="btn btn-info ">Lihat Detail</a>
    </div>
</div>