<?php
// untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
// $_POST itu method di formnya
if (isset($_POST['update'])) {
    // untuk mengoneksikan dengan database dengan memanggil file db.php
    include('../db.php');
    // tampung nilai yang ada di from ke variabel
    // sesuaikan variabel name yang ada di registerPage.php disetiap input

    $no = $_POST['no'];
    //$temp = mysqli_query($con,"SELECT * from users where id='$id'");
    //$find = mysqli_fetch_assoc($temp);
    $tglkembali = $_POST['tglkembali'];

    // Melakukan insert ke databse dengan query dibawah ini

    //$conn = new mysqli($id,$username,$password,$prodi,$name,$npm)
    $queryEdit = mysqli_query($con,  "UPDATE pinjam SET tglkembali='$tglkembali' WHERE no ='$no' ")
      
        
        or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”
   echo'a';

        if ($queryEdit) {
            echo'b';
        echo
        '<script>
            alert("Berhasil Perpanjang Peminjaman"); window.location = "../page/listMahasiswaPage.php"
        </script>';echo'd';
    } else {
        echo'c';
        echo
        '<script>
 alert("Create Data Failed");
 </script>';
    }
} else {
    echo
    '<script>
 window.history.back()
 </script>';
}
?>
