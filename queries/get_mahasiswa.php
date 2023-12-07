<?php
  include '../connections/conn.php';

  $query = "SELECT mahasiswa.*, 
            (SELECT name FROM wali WHERE id = mahasiswa.wali_id) AS nama_wali
            FROM mahasiswa 
            ORDER BY mahasiswa.nim ASC";

  $result = mysqli_query($conn, $query);

  $countQuery = "SELECT COUNT(*) AS jumlah_mahasiswa FROM mahasiswa";
$hitung = mysqli_query($conn, $countQuery);
$countResult = mysqli_fetch_assoc($hitung);

// Mengambil nilai jumlah mahasiswa
$jumlahMahasiswa = $countResult['jumlah_mahasiswa'];

  mysqli_close($conn);
?>
