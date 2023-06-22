<h1>Create Mahasiswa</h1>

<form action="/mahasiswa/store" method="POST">
@csrf
    <input type="text" name="Nama" placeholder="Nama">
    <input type="text" name="NIM" placeholder="NIM">
    <input type="text" name="Dosen" placeholder="Dosen">
    <input type="text" name="Matkul" placeholder="Matkul">
    <input type="submit" name="submit" value="save">
</form>