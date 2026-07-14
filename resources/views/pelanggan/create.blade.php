<h1>Tambah Pelanggan</h1>


<form action="/pelanggan" method="POST">

@csrf


Nama :
<br>
<input name="nama">

<br><br>


Alamat :
<br>
<textarea name="alamat"></textarea>


<br><br>


No HP :
<br>
<input name="no_hp">


<br><br>

<button>Simpan</button>

</form>