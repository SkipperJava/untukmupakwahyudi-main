<?php

include '../connections/conn.php';

// Cek apakah form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Ambil data dari form
    $name = $_POST["name"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $alamat = $_POST["alamat"];

    // Query untuk insert data wali
    $query = "INSERT INTO wali (name, jenis_kelamin, alamat) VALUES ('$name','$jenis_kelamin','$alamat')";

    // Eksekusi query
    if (mysqli_query($conn, $query)) {
        echo "Data wali berhasil ditambahkan!";
        header("Location: ../layouts/list_wali.php"); // Redirect ke halaman daftar wali
    } else {
        echo "Error: " . mysqli_error($conn); // Tampilkan pesan error
    }

    // Tutup koneksi database
    mysqli_close($conn);

} else {
    echo "Silakan isi form dengan benar!"; // Tampilkan pesan jika form tidak disubmit
}

?>