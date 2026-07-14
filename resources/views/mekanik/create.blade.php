<!DOCTYPE html>
<html>
<head>
<title>Tambah Mekanik</title>
</head>

<body>

<h1>Tambah Mekanik</h1>

<form action="/mekanik" method="POST">

@csrf

Nama:
<br>
<input type="text" name="nama">

<br><br>

No HP:
<br>
<input type="text" name="no_hp">

<br><br>

Alamat:
<br>
<textarea name="alamat"></textarea>

<br><br>

Keahlian:
<br>
<input type="text" name="keahlian">

<br><br>

<button>Simpan</button>

</form>

</body>
</html>