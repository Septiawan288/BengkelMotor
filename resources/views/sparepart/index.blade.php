<!DOCTYPE html>
<html>
<head>
    <title>Data Sparepart</title>
</head>

<body>

<h1>Data Sparepart</h1>

<a href="/sparepart/create">
Tambah Sparepart
</a>

<br><br>

<table border="1" cellpadding="10">

<tr>
    <th>No</th>
    <th>Nama Sparepart</th>
    <th>Stok</th>
    <th>Harga</th>
</tr>


@foreach($spareparts as $s)

<tr>

<td>{{ $loop->iteration }}</td>

<td>{{ $s->nama_sparepart }}</td>

<td>{{ $s->stok }}</td>

<td>{{ $s->harga }}</td>

</tr>

@endforeach


</table>

</body>
</html>