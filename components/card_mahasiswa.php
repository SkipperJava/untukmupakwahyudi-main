<div class="card w-50">
    <div class="card-body">
        <h5 class="card-title">Jumlah Mahasiswa</h5>

        <?php
        include '../queries/get_mahasiswa.php';
        echo "<h5 class='card-text text-secondary'>$jumlahMahasiswa</h5>";
        ?>

        <a href="..\layouts\list_mahasiswa.php" class="btn btn-info">Lihat Detail</a>
    </div>
</div>