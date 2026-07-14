<!DOCTYPE html>
<html>
<head>
    <title>Data Kendaraan</title>
</head>

<body>

<h1>Data Kendaraan</h1>

<a href="/kendaraan/create">
Tambah Kendaraan
</a>

<br><br>

<table border="1" cellpadding="10">

<tr>
    <th>No</th>
    <th>Pemilik</th>
    <th>No Polisi</th>
    <th>Merk</th>
    <th>Tipe</th>
    <th>Tahun</th>
</tr>


@foreach($kendaraans as $k)

<tr>

<td>{{ $loop->iteration }}</td>

<td>{{ $k->pelanggan->nama }}</td>

<td>{{ $k->no_polisi }}</td>

<td>{{ $k->merk }}</td>

<td>{{ $k->tipe }}</td>

<td>{{ $k->tahun }}</td>

</tr>

@endforeach

</table>

</body>
</html>