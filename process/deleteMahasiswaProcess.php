<?php
if (isset($_GET['no'])) {
    include('../db.php');
    $no = $_GET['no'];
    $queryDelete = mysqli_query($con, "DELETE FROM pinjam WHERE no =' $no'") or die(mysqli_error($con));
    if ($queryDelete) {
        echo
        '<script>
 alert("Pengeeembalian Berhasil"); window.location = "../page/listMahasiswaPage.php"
 </script>';
    } else {
        echo
        '<script>
 alert("Delete Failed"); window.location = "../page/listMahasiswaPage.php"
 </script>';
    }
} else {
    echo
    '<script>
 window.history.back()
 </script>';
}
?>
