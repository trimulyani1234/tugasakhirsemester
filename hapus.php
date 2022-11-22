<?php
include("koneksi.php");
isset($_GET['id']);
$id = $_GET['id'];

$sql = "DELETE FROM tb_perpustakaan WHERE id=$id";
$query = mysqli_query($koneksi, $sql);

if($query){
    header("location:tampil.php?status=sukses");
}else{
    die("akses dilarang");
}
?>