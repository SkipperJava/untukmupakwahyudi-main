<?php

include '../connections/conn.php';

// Cek apakah form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Ambil data dari form 

    $username = $_POST["username"];
    $password = $_POST["password"];
    $status   = $_POST["status"];

    // Query untuk insert data admin
    $query = "INSERT INTO admin (username,password,status) VALUES ('$username','$password','$status')";

    // Eksekusi query
    if (mysqli_query($conn, $query)) {
        echo "Data admin berhasil ditambahkan!";
        header("Location: ../layouts/list_admin.php"); // Redirect ke halaman daftar admin
    } else {
        echo "Error: " . mysqli_error($conn); // Tampilkan pesan error
    }

    // Tutup koneksi database
    mysqli_close($conn);

} else {
    echo "Silakan isi form dengan benar!"; // Tampilkan pesan jika form tidak disubmit
}

?>