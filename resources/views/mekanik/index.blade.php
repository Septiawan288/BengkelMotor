<!DOCTYPE html>
<html>
<head>
<title>Data Mekanik</title>
</head>

<body>

<h1>Data Mekanik</h1>

<a href="/mekanik/create">
Tambah Mekanik
</a>

<br><br>

<table border="1" cellpadding="10">

<tr>
<th>No</th>
<th>Nama</th>
<th>No HP</th>
<th>Alamat</th>
</tr>

@foreach($mekaniks as $m)

<tr>
<td>{{ $loop->iteration }}</td>
<td>{{ $m->nama }}</td>
<td>{{ $m->no_hp }}</td>
<td>{{ $m->alamat }}</td>
</tr>

@endforeach

</table>

</body>
</html>