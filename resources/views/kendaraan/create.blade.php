<!DOCTYPE html>
<html>
<head>
    <title>Tambah Kendaraan</title>
</head>

<body>

<h1>Tambah Kendaraan</h1>


<form action="/kendaraan" method="POST">

@csrf

Pemilik:

<br>

<select name="pelanggan_id">

@foreach($pelanggans as $p)

<option value="{{ $p->id }}">
{{ $p->nama }}
</option>

@endforeach

</select>


<br><br>


No Polisi:

<br>
<input type="text" name="no_polisi">


<br><br>


Merk:

<br>
<input type="text" name="merk">


<br><br>


Tipe:

<br>
<input type="text" name="tipe">


<br><br>


Tahun:

<br>
<input type="text" name="tahun">


<br><br>


<button>
Simpan
</button>


</form>


</body>
</html>