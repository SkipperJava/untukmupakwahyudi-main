<?php
  include '../queries/detail_admin.php';
?>
<form action="../queries/edit_admin.php" method="post">
    <input type="text" hidden class="form-control" name="id" value="<?php echo $id?>">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama Admin</label>
    <input type="text" class="form-control" name="username" value="<?php echo $username?>">
  </div> 
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Password</label>
    <input type="text" class="form-control" name="password" value="<?php echo $password?>">
  </div> 
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Status</label>
    <input type="text" class="form-control" name="status" value="<?php echo $status?>">
  </div>
  <button type="submit" class="btn btn-success">Simpan</button>
  <a href="../layouts/list_admin.php" type="submit" class="btn btn-danger">Batal</a>
</form>