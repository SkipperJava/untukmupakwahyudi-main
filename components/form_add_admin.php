<form action="../queries/add_admin.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama Admin</label>
    <input type="text" class="form-control" name="username">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Password</label>
    <input type="text" class="form-control" name="password">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Status</label>
    <input type="text" class="form-control" name="status">
  </div>
  <button type="submit" class="btn btn-success">Simpan</button>
  <a href="../layouts/list_admin.php" type="submit" class="btn btn-danger">Batal</a>
</form>