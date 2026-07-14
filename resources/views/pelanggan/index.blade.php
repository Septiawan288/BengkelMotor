<!DOCTYPE html>
<html>
<head>
<title>Pelanggan</title>
</head>

<body>

<h1>Data Pelanggan</h1>

<a href="/pelanggan/create">
Tambah Pelanggan
</a>

<br><br>


<table border="1" cellpadding="10">

<tr>
<th>No</th>
<th>Nama</th>
<th>Alamat</th>
<th>No HP</th>
<th>Aksi</th>
</tr>


@foreach($pelanggans as $p)

<tr>

<td>{{$loop->iteration}}</td>

<td>{{$p->nama}}</td>

<td>{{$p->alamat}}</td>

<td>{{$p->no_hp}}</td>


<td>

<a href="/pelanggan/{{$p->id}}/edit">
Edit
</a>


<form action="/pelanggan/{{$p->id}}" method="POST">

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