<?php
include("koneksi.php");?>

<html>
    <head>
</head>
<body>
    <h1>APLIKASI PEMINJAMAN</h1>
    <h3>BUKU DI PERPUS</h3>
    <h4> <a href="form.php">form tambah</a></h4>
    <table border="1">
        <tr>
            <th>id</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>jenis buku</th>
            <th>aksi</th>
            
</tr>

<?php
include("koneksi.php");
$sql= "SELECT * FROM tb_perpustakaan";
$query = mysqli_query($koneksi, $sql);

while($tb_perpustakaan =mysqli_fetch_array($query)){
    echo "<tr>";
    echo "<td>" .$tb_perpustakaan['id']."</td>";
    echo "<td>" .$tb_perpustakaan['nama']."</td>";
    echo "<td>" .$tb_perpustakaan['kelas']."</td>";
    echo "<td>" .$tb_perpustakaan['jenis_buku']."</td>";
    echo "<td>";
    echo "<a href='edit.php?id=".$tb_perpustakaan['id']."'>Edit</a> |";
    echo "<a href='hapus.php?id=".$tb_perpustakaan['id']."'>Hapus</a> |";
    echo "</td>";
    echo "</tr>";

}
?>
</table>
</body>
</html>
