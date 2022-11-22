<!DOCTYPE html>
<html lang="en">
<head>
    <title>form tambah</title>
</head>
<body>
    <header>
        <h1>APLIKASI PEMINJAMAN</h1>
        <h3>BUKU DI PERPUS</h3>
    </header>
    <form action="prosestambah.php" method="POST">
        <fieldset>
            <p>
                <label for="nama">Nama:</label>
                <input type="text" name="nama"/>
            </p>
            <p>
                <label for="kelas">Kelas:</label>
                <input type="text" name="kelas"/>
            </p>
            <p>
                <label for="jenis_buku">Jenis buku : </label>
                <p><input type="radio" name="jenis_buku" value="fiksi" />Fiksi</p>
                <p><input type="radio" name="jenis_buku" value="nonfiksi" />Nonfiksi</p>
                <p><input type="radio" name="jenis_buku" value="komik"/>Komik</p>
                <p><input type="radio" name="jenis_buku" value="majalah"/>Majalah</p>
            </p>
            <p>
                <input type="submit" value="kirim" name="kirim" />
</p>
</fieldset>
</form>
</body>
</html>