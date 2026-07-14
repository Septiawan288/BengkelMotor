<!DOCTYPE html>
<html>
<head>
    <title>Edit Servis</title>
</head>

<body>

<h1>Edit Servis</h1>

<form action="/servis/{{ $servis->id }}" method="POST">

@csrf
@method('PUT')

Kendaraan:
<br>
<select name="kendaraan_id">

@foreach($kendaraans as $k)

<option value="{{ $k->id }}"
@if($servis->kendaraan_id == $k->id)
selected
@endif
>
{{ $k->no_polisi }} - {{ $k->merk }}
</option>

@endforeach

</select>

<br><br>


Mekanik:
<br>
<select name="mekanik_id">

@foreach($mekaniks as $m)

<option value="{{ $m->id }}"
@if($servis->mekanik_id == $m->id)
selected
@endif
>
{{ $m->nama }}
</option>

@endforeach

</select>

<br><br>


Tanggal Servis:

<br>
<input type="date" name="tanggal_servis"
value="{{ $servis->tanggal_servis }}">

<br><br>


Keluhan:

<br>
<textarea name="keluhan">{{ $servis->keluhan }}</textarea>

<br><br>


Biaya Jasa:

<br>
<input type="number" name="biaya_jasa"
value="{{ $servis->biaya_jasa }}">

<br><br>


Status:

<br>

<select name="status">

<option value="Proses"
@if($servis->status == 'Proses') selected @endif>
Proses
</option>

<option value="Selesai"
@if($servis->status == 'Selesai') selected @endif>
Selesai
</option>

</select>

<br><br>


<button>
Update
</button>

</form>

</body>
</html>