<!DOCTYPE html>
<html>
<head>
    <title>Laporan Bengkel</title>
</head>

<body>

<h1>Laporan Bengkel Maju Motor</h1>

<hr>

<h3>Jumlah Servis</h3>
<p>{{ $jumlahServis }}</p>


<h3>Jumlah Transaksi</h3>
<p>{{ $jumlahTransaksi }}</p>


<h3>Total Pendapatan</h3>
<p>
Rp {{ number_format($totalPendapatan,0,',','.') }}
</p>


</body>
</html>