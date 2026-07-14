<!DOCTYPE html>
<html>
<head>
<title>Tambah Servis</title>
</head>

<body>

<h1>Tambah Servis</h1>


<form action="/servis" method="POST">

@csrf


Kendaraan:

<br>

<select name="kendaraan_id">

@foreach($kendaraans as $k)

<option value="{{ $k->id }}">
{{ $k->no_polisi }} - {{ $k->merk }}
</option>

@endforeach

</select>


<br><br>


Mekanik:

<br>

<select name="mekanik_id">

@foreach($mekaniks as $m)

<option value="{{ $m->id }}">
{{ $m->nama }}
</option>

@endforeach

</select>


<br><br>


Tanggal Servis:

<br>

<input type="date" name="tanggal_servis">


<br><br>


Keluhan:

<br>

<textarea name="keluhan"></textarea>


<br><br>


Biaya Jasa:

<br>

<input type="number" name="biaya_jasa">


<br><br>


Status:

<br>

<select name="status">

<option value="Proses">
Proses
</option>

<option value="Selesai">
Selesai
</option>

</select>


<br><br>


<button>
Simpan
</button>


</form>

</body>
</html>