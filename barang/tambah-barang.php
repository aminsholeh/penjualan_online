<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Barang</title>
</head>
<body>
    <header>
        <h3>Form Tambah Barang</h3>
    </header>
    <form action="proses-tambah-barang.php" method="post">
        <fieldset>
            <p>
                <label for="kode">Kode Barang: </label>
                <input type="text" name="kode" placeholder="Kode barang" />
            </p>
            <p>
                <label for="kode">Nama Barang: </label>
                <input type="text" name="nama" placeholder="Nama barang" />
            </p>
            <p>
                <label for="kode">Merk Barang: </label>
                <input type="text" name="merk" placeholder="Merk barang" />
            </p>
            <p>
                <label for="kode">Harga Barang: </label>
                <input type="number" name="harga" placeholder="Harga barang" />
            </p>
            <p>
                <label for="kode">Jumlah Barang: </label>
                <input type="number" name="jumlah" placeholder="Jumlah barang" />
            </p>
            <p>
                <input type="submit" value="Tambah" name="tambah">
            </p>
        </fieldset>
    </form>
</body>
</html>