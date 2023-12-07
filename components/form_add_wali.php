<form action="../queries/add_wali.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama Wali</label>
    <input type="text" class="form-control" name="name"> 
    <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
    <input type="text" class="form-control" name="jenis_kelamin"> 
    <label for="exampleInputEmail1" class="form-label">Alamat</label>
    <input type="text" class="form-control" name="alamat"> 
  </div>
  <button type="submit" class="btn btn-success">Simpan</button>
  <a href="../layouts/list_wali.php" type="submit" class="btn btn-danger">Batal</a>
</form>