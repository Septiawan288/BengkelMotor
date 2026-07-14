<!DOCTYPE html>
<html>
<head>
    <title>Penggunaan Sparepart</title>
</head>

<body>

<h1>Penggunaan Sparepart</h1>

<a href="/detail-sparepart/create">
Tambah Penggunaan Sparepart
</a>

<br><br>

<table border="1" cellpadding="10">

<tr>
    <th>No</th>
    <th>Servis</th>
    <th>Sparepart</th>
    <th>Jumlah</th>
    <th>Subtotal</th>
</tr>


@foreach($details as $d)

<tr>

<td>{{ $loop->iteration }}</td>

<td>
{{ $d->servis->id }}
</td>

<td>
{{ $d->sparepart->nama_sparepart }}
</td>

<td>
{{ $d->jumlah }}
</td>

<td>
{{ $d->subtotal }}
</td>

</tr>

@endforeach


</table>

</body>
</html>