<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">NIM</th>
      <th scope="col">Nama Lengkap</th>
      <th scope="col">Alamat</th>
      <th scope="col">Wali</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php
    // Memanggil data mahasiswa dari file get_mahasiswa.php
    include "../queries/get_mahasiswa.php";

    $data_mahasiswa = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $no = 1;
    if (is_array($data_mahasiswa)) {
        // Lanjutkan looping
        // Tampilkan data mahasiswa
        foreach ($data_mahasiswa as $mahasiswa) {
            // Tampilkan data mahasiswa
            echo "<tr>";
            echo "<th scope='row'>" . $no . "</th>"; // Ganti 'id' dengan kolom yang sesuai untuk No
            echo "<td>" . $mahasiswa['nim'] . "</td>";
            echo "<td>" . $mahasiswa['name'] . "</td>"; // Ganti dengan kolom yang sesuai untuk Nama Lengkap
            echo "<td>" . $mahasiswa['adress'] . "</td>";
            echo "<td>" . $mahasiswa['nama_wali'] . "</td>";
            echo "<td>
                    <a type='button' href='../layouts/edit_mhsw.php?id=" . $mahasiswa['id'] . "' class='btn btn-warning'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                            <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                        </svg>
                    </a>
                    <a type='button' href='../queries/delete_mahasiswa.php?id=" . $mahasiswa['id'] . "' class='btn btn-danger'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
                            <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z'/>
                            <path d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z'/>
                        </svg>
                    </a>
                </td>";
            echo "</tr>";
            $no++;
        }
    } else {
        echo "Tidak ada data mahasiswa";
    }
    
 ?>  
  </tbody>
</table>

