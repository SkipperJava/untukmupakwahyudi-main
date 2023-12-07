<?php
    include '../connections/conn.php';
    $query = "SELECT * FROM wali ORDER BY name ASC";

    
    $result = mysqli_query($conn, $query);

    $countQuery = "SELECT COUNT(*) AS jumlah_wali FROM wali";
$hitung = mysqli_query($conn, $countQuery);
$countResult = mysqli_fetch_assoc($hitung);

// Mengambil nilai jumlah mahasiswa
$jumlahWali = $countResult['jumlah_wali'];

  mysqli_close($conn);
?>