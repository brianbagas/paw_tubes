<?php
include '../component/sidebar.php';
$no=$_GET['no'];
$data= mysqli_query($con,"SELECT * FROM pinjam where no='$no'");
$sql = mysqli_fetch_array($data);
//echo $sql['id'];
$judul = $sql['judul'];
?>
<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
  <h4>Perpanjang Peminjaman</h4>
  <hr>
  <form action="../process/editMahasiswaProcess.php" method="post">
    <input class ="form-control" type="hidden" id = "no" name = "no" value="<?php echo $sql['no'];?>">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label"><b> Judul :</b> </label>
      <a style="font-size: 16px;"><?php echo $sql['judul'];?></a>

    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label"><b>Kategori :</b></label>
      <a style="font-size: 16px;"><?php echo $sql['Kategori'];?></a>

    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label"><b> Tanggal Pinjam :</b></label>
      <a style="font-size: 16px;"><?php echo $sql['tglpinjam'];?></a>
  
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label"><b> Tanggal Kembali :</b></label>
      <input type="date" class="form-control" id="tglkembali" name="tglkembali"  value="<?php echo $sql['tglkembali'];?>">
    </div>
    <div class="d-grid gap-2">
       <button type=" submit" class="btn btn-primary" name="update">Perpanjang Pinjam</button>  
     
    </div>
  </form>
</div>
</aside>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>