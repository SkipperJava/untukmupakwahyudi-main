<div class="card w-50">
    <div class="card-body">
        <h5 class="card-title">Jumlah Admin</h5>

        <?php
        include '../queries/get_admin.php';
        echo "<h5 class='card-text text-secondary'>$jumlahAdmin</h5>";
        ?>

        <a href="..\layouts\list_admin.php" class="btn btn-info">Lihat Detail</a>
    </div>
</div>