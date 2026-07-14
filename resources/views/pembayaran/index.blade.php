<!DOCTYPE html>
<html>
<head>
    <title>Data Pembayaran</title>
</head>

<body>

<h1>Data Pembayaran</h1>

<a href="/pembayaran/create">
Tambah Pembayaran
</a>

<br><br>


<table border="1" cellpadding="10">

<tr>
    <th>No</th>
    <th>Servis</th>
    <th>Total Bayar</th>
    <th>Metode</th>
    <th>Tanggal</th>
</tr>


@foreach($pembayarans as $p)

<tr>

<td>{{ $loop->iteration }}</td>

<td>
Servis {{ $p->servis_id }}
</td>

<td>
{{ $p->total_bayar }}
</td>

<td>
{{ $p->metode }}
</td>

<td>
{{ $p->tanggal_bayar }}
</td>

</tr>

@endforeach


</table>

</body>
</html>