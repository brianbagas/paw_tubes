<?php
// untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
// $_POST itu method di formnya
if (isset($_POST['register'])) {
    // untuk mengoneksikan dengan database dengan memanggil file db.php
    include('../db.php');
    // tampung nilai yang ada di from ke variabel
    // sesuaikan variabel name yang ada di registerPage.php disetiap input
    $judul = $_POST['judul'];
    $Kategori = $_POST['kategori'];
    $tglpinjam = $_POST['tglpinjam'];
    $tglkembali = $_POST['tglkembali'];
    // Melakukan insert ke databse dengan query dibawah ini
    $query = mysqli_query(
        $con,
        "INSERT INTO pinjam(judul, kategori, tglpinjam, tglkembali)
 VALUES
 ('$judul', '$Kategori', '$tglpinjam', '$tglkembali')"
    )
        or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”
    if ($query) {
        echo
        '<script>
 alert("Create Data Success"); window.location = "../page/listMahasiswaPage.php"
 </script>';
    } else {
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
