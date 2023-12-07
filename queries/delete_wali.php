<?php

include '../connections/conn.php';

// Cek apakah ada ID wali yang dikirim
if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']); // Amankan input

    // Periksa apakah ada mahasiswa yang menggunakan wali ini
    $checkMahasiswa = "SELECT COUNT(*) as total FROM mahasiswa WHERE wali_id = '$id'";
    $result = mysqli_query($conn, $checkMahasiswa);

    // Ambil jumlah mahasiswa yang menggunakan wali ini
    $row = mysqli_fetch_assoc($result);
    $totalMahasiswa = $row['total'];

    if ($totalMahasiswa > 0) {
        // Ada mahasiswa yang menggunakan wali ini
        echo "Tidak dapat menghapus wali karena masih digunakan oleh mahasiswa.";
    } else {
        // Tidak ada mahasiswa yang menggunakan wali ini, lanjutkan dengan menghapus wali
        // Query untuk menghapus data wali
        $query = "DELETE FROM wali WHERE id = '$id'";

        // Eksekusi query
        if (mysqli_query($conn, $query)) {
            echo "Data wali berhasil dihapus!";
            // Redirect ke halaman daftar wali (sesuaikan)
            header("Location: ../layouts/list_wali.php");
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }

    // Tutup koneksi database
    mysqli_close($conn);
} else {
    echo "ID wali tidak ditemukan";
}
?>
