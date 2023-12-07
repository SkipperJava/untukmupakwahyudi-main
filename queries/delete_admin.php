<?php

include '../connections/conn.php';

// Cek apakah ada ID admin yang dikirim
if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']); // Amankan input

    // Query untuk menghapus data wali
    $query = "DELETE FROM admin WHERE id = '$id'";

    // Eksekusi query
    if (mysqli_query($conn, $query)) {
        echo "Data admin berhasil dihapus!";
        // Redirect ke halaman daftar admin (sesuaikan)
        header("Location: ../layouts/list_admin.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Tutup koneksi database
    mysqli_close($conn);
} else {
    echo "ID admin tidak ditemukan";
}

?>