<!DOCTYPE html>
<html>
<head>
    <title>Tambah Sparepart</title>
</head>

<body>

<h1>Tambah Sparepart</h1>


<form action="/sparepart" method="POST">

@csrf


Nama Sparepart:

<br>

<input type="text" name="nama_sparepart">


<br><br>


Stok:

<br>

<input type="number" name="stok">


<br><br>


Harga:

<br>

<input type="number" name="harga">


<br><br>


<button>
Simpan
</button>


</form>


</body>
</html>