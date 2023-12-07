<?php
include '../connections/conn.php';

// Ambil ID admin dari URL
$id = $_GET["id"];

// Query untuk mengambil data admin berdasarkan ID
$query = "SELECT * FROM admin WHERE id='$id'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    $admin = mysqli_fetch_assoc($result);

    // Isi form dengan data admin
    $username = $admin["username"]; 
    $password = $admin["password"]; 
    $status = $admin["status"]; 
} else {
    // Tampilkan pesan error jika data tidak ditemukan
    echo "admin tidak ditemukan!";
}
?>