<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Razer Indonesia</title>
    <link rel="stylesheet" href="style.css?3">
</head>

<body>
    <h1 class="judul">Daftar Barang</h1>
    <div class="form-class">
        <h3>Tambah Barang Baru</h3>
        <form action="tambah.php" method="post" enctype="multipart/form-data">

            <label for="">Nama Lengkap</label><br>
            <input type="text" name="nama" class="form-text"><br>

            <label for="">kategori</label><br>
            <input type="text" name="kategori" class="form-text"><br>

            <label for="">warna</label><br>
            <input type="warna" name="warna" class="form-text"><br>

            <label for="">harga</label><br>
            <input type="text" name="harga" class="form-text"><br>

        

            <input type="submit" name="submit" value="Kirim" class="btn-submit">

        </form>
    </div>

</body>

</html>