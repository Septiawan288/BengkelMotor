<!DOCTYPE html>
<html>
<head>
    <title>Tambah Sparepart Servis</title>
</head>

<body>

<h1>Tambah Sparepart Servis</h1>


<form action="/detail-sparepart" method="POST">

@csrf


Servis:

<br>

<select name="servis_id">

@foreach($servis as $s)

<option value="{{ $s->id }}">
Servis {{ $s->id }}
</option>

@endforeach

</select>


<br><br>


Sparepart:

<br>

<select name="sparepart_id">

@foreach($spareparts as $sp)

<option value="{{ $sp->id }}">
{{ $sp->nama_sparepart }}
</option>

@endforeach

</select>


<br><br>


Jumlah:

<br>

<input type="number" name="jumlah">


<br><br>


<button>
Simpan
</button>


</form>


</body>
</html>