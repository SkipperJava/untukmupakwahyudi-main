<?php

    include '../connections/conn.php';

    // Cek apakah form disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Ambil data dari form
        $id = $_POST["id"];
        $nim = $_POST["nim"];
        $name = $_POST["name"];
        $adress = $_POST["adress"];
        $wali_id = $_POST["wali_id"];

        // Query untuk update data mahasiswa
        $query = "UPDATE mahasiswa SET nim='$nim', name='$name', adress='$adress', wali_id='$wali_id' WHERE id='$id'";

        // Eksekusi query
        if (mysqli_query($conn, $query)) {
            echo "Data mahasiswa berhasil diedit!";
            header("Location: ../layouts/list_mahasiswa.php"); // Redirect ke halaman daftar mahasiswa
        } else {
            echo "Error: " . mysqli_error($conn); // Tampilkan pesan error
        }

        // Tutup koneksi database
        mysqli_close($conn);

    } else {
        echo "Error: form tidak disubmit dengan benar!"; // Tampilkan pesan error
    }

    ?>