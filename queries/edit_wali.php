<?php

include '../connections/conn.php';

// Cek apakah form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Ambil data dari form
    $id = $_POST["id"];
    $name = $_POST["name"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $alamat = $_POST["alamat"];

    // Query untuk update data mahasiswa
    $query = "UPDATE wali SET name='$name', jenis_kelamin='$jenis_kelamin', alamat='$alamat' WHERE id='$id'";

    // Eksekusi query
    if (mysqli_query($conn, $query)) {
        echo "Data mahasiswa berhasil diedit!";
        header("Location: ../layouts/list_wali.php"); // Redirect ke halaman daftar mahasiswa
    } else {
        echo "Error: " . mysqli_error($conn); // Tampilkan pesan error
    }

    // Tutup koneksi database
    mysqli_close($conn);

} else {
    echo "Error: form tidak disubmit dengan benar!"; // Tampilkan pesan error
}

?>
