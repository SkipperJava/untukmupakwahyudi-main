<?php

include '../connections/conn.php';

// Cek apakah form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Ambil data dari form
    $id = $_POST["id"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $status = $_POST["status"];

    // Query untuk update data admin
    $query = "UPDATE admin SET username='$username',password='$password',status='$status' WHERE id='$id'";

    // Eksekusi query
    if (mysqli_query($conn, $query)) {
        echo "Data admin berhasil diedit!";
        header("Location: ../layouts/list_admin.php"); // Redirect ke halaman daftar admin
    } else {
        echo "Error: " . mysqli_error($conn); // Tampilkan pesan error
    }

    // Tutup koneksi database
    mysqli_close($conn);

} else {
    echo "Error: form tidak disubmit dengan benar!"; // Tampilkan pesan error
}

?>
