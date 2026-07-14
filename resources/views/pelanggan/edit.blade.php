<h1>Edit Pelanggan</h1>


<form action="/pelanggan/{{$pelanggan->id}}" method="POST">

@csrf
@method('PUT')


Nama:
<br>
<input name="nama"
value="{{$pelanggan->nama}}">


<br><br>


Alamat:
<br>
<textarea name="alamat">{{$pelanggan->alamat}}</textarea>


<br><br>


No HP:
<br>
<input name="no_hp"
value="{{$pelanggan->no_hp}}">


<br><br>


<button>
Update
</button>


</form>