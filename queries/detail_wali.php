<?php
include '../connections/conn.php';

// Ambil ID wali dari URL
$id = $_GET["id"];

// Query untuk mengambil data wali berdasarkan ID
$query = "SELECT * FROM wali WHERE id='$id'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    $wali = mysqli_fetch_assoc($result);

    // Isi form dengan data wali
    $name = $wali["name"];
    $jenis_kelamin = $wali["jenis_kelamin"];
    $alamat = $wali["alamat"];
} else {
    // Tampilkan pesan error jika data tidak ditemukan
    echo "wali tidak ditemukan!";
}
?>