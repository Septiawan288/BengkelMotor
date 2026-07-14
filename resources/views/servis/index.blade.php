<!DOCTYPE html>
<html>
<head>
    <title>Data Servis</title>
</head>

<body>

<h1>Data Servis</h1>

<a href="/servis/create">
    Tambah Servis
</a>

<br><br>

<table border="1" cellpadding="10">

<tr>
    <th>No</th>
    <th>Kendaraan</th>
    <th>Mekanik</th>
    <th>Tanggal</th>
    <th>Keluhan</th>
    <th>Biaya</th>
    <th>Status</th>
    <th>Aksi</th>
</tr>


@foreach($servis as $s)

<tr>

<td>{{ $loop->iteration }}</td>

<td>
{{ $s->kendaraan->no_polisi }}
</td>

<td>
{{ $s->mekanik->nama }}
</td>

<td>
{{ $s->tanggal_servis }}
</td>

<td>
{{ $s->keluhan }}
</td>

<td>
{{ $s->biaya_jasa }}
</td>

<td>
{{ $s->status }}
</td>


<td>

<a href="/servis/{{ $s->id }}/edit">
Edit
</a>


<form action="/servis/{{ $s->id }}" method="POST">

@csrf
@method('DELETE')

<button>
Hapus
</button>

</form>

</td>

</tr>

@endforeach


</table>

</body>
</html>