<?php
include ("koneksi.php");
if (!isset($_GET['id'])){
    header ('location:tampil.php?');
}
$kode = $_GET['id'];
$sql = "SELECT * FROM tb_perpustakaan WHERE id=$kode";
$query = mysqli_query($koneksi, $sql);
$db_trimulyani8nov = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1){
    die ("Data tidak ditemukan");
}

?>
<html>
<head>
</head>
<body>
    
        <h1>FORM EDIT</h1>
<form action="edit.php" method="POST">
    <form>
    <fieldset>
        <input type="hidden" name="id" value="<?php echo $db_trimulyani8nov['id']?>"/>
            <p>
                <label for="nama">Nama:</label>
                <input type="text" name="nama" value="<?php echo $db_trimulyani8nov['id']?>"/>
            </p>
            <p>
                <label for="kelas">Kelas:</label>
                <input type="text" name="kelas" value="<?php echo $db_trimulyani8nov['id']?>"/>
            </p>
            <p>
                <label for="jenis_buku">Jenis buku : </label>
                <p><input type="radio" name="jenis_buku" value="fiksi" />Fiksi</p>
                <p><input type="radio" name="jenis_buku" value="nonfiksi" />Nonfiksi</p>
                <p><input type="radio" name="jenis_buku" value="komik"/>Komik</p>
                <p><input type="radio" name="jenis_buku" value="majalah"/>Majalah</p>
            </p>
            <p>
                <input type="submit" name="kirim data" value="kirim" />
            </p>
</fieldset>
</form>
</body>
</html>