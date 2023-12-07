<?php
    include '../connections/conn.php';
    $query = "SELECT * FROM admin ORDER BY username ASC";

    
    $result = mysqli_query($conn, $query);

    $countQuery = "SELECT COUNT(*) AS jumlah_admin FROM admin";
    $hitung = mysqli_query($conn, $countQuery);
    $countResult = mysqli_fetch_assoc($hitung);
    
    // Mengambil nilai jumlah mahasiswa
    $jumlahAdmin = $countResult['jumlah_admin'];
    
      mysqli_close($conn);
?>