<h1>Edit Data</h1>

<form action="/mahasiswa/{{$mahasiswa->id}}" method="POST">
@method('put')
@csrf
    <input type="text" name="Nama" placeholder="Nama" value="{{$mahasiswa->Nama}}"><br>
    <input type="text" name="NIM" placeholder="NIM" value="{{$mahasiswa->NIM}}"><br>
    <input type="text" name="Dosen" placeholder="Dosen" value="{{$mahasiswa->Dosen}}"><br>
    <input type="text" name="Matkul" placeholder="Matkul" value="{{$mahasiswa->Matkul}}"><br>
    <input type="submit" name="submit" value="save">
</form>