<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pembayaran</title>
</head>

<body>

<h1>Tambah Pembayaran</h1>


<form action="/pembayaran" method="POST">

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


Total Bayar:

<br>

<input type="number" name="total_bayar">


<br><br>


Metode Pembayaran:

<br>

<select name="metode">

<option value="Cash">
Cash
</option>

<option value="Transfer">
Transfer
</option>

<option value="QRIS">
QRIS
</option>

</select>


<br><br>


Tanggal Bayar:

<br>

<input type="date" name="tanggal_bayar">


<br><br>


<button>
Simpan
</button>


</form>

</body>
</html>