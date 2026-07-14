<!DOCTYPE html>
<html>
<head>
    <title>Edit Kendaraan</title>
</head>

<body>

<h1>Edit Kendaraan</h1>


<form action="/kendaraan/{{ $kendaraan->id }}" method="POST">

@csrf

@method('PUT')


Pemilik:

<br>

<select name="pelanggan_id">

@foreach($pelanggans as $p)

<option value="{{ $p->id }}"
@if($p->id == $kendaraan->pelanggan_id)
selected
@endif
>
{{ $p->nama }}
</option>

@endforeach

</select>


<br><br>


No Polisi:

<br>

<input type="text" name="no_polisi" value="{{ $kendaraan->no_polisi }}">


<br><br>


Merk:

<br>

<input type="text" name="merk" value="{{ $kendaraan->merk }}">


<br><br>


Tipe:

<br>

<input type="text" name="tipe" value="{{ $kendaraan->tipe }}">


<br><br>


Tahun:

<br>

<input type="text" name="tahun" value="{{ $kendaraan->tahun }}">


<br><br>


<button>
Update
</button>


</form>

</body>
</html>