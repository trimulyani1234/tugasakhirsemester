<?php
include("koneksi.php");

if(isset($_POST['kirim'])){
    $kode = $_POST['id'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jenis_buku = $_POST['jenis_buku'];

    $sql = "UPDATE tb_perpustakaan SET nama='$nama', kelas='$kelas', jenis_buku='$jenis_buku' WHERE id=$kode";
    $query = mysqli_query($db, $sql);

    if($query){
        header("location:tampil.php");
    }else{
        die ("gagal mengedit");
    }
}else{
    die("sukses");
}
?>