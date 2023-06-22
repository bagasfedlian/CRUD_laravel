<a href="/mahasiswa/create">Tambah Data</a>
<table class="table" border="1">
<thead>
    <tr>
        <th>ID</th>
        <th>NAMA</th>
        <th>NIM</th>
        <th>NAMA DOSEN</th>
        <th>MATA KULIAH</th>
        <th>AKSI</th>
    </tr>
    </thead>
    @foreach($mahasiswa as $m)
    <tr>
        <td>{{$m->id}}</td>
        <td>{{$m->Nama}}</td>
        <td>{{$m->NIM}}</td>
        <td>{{$m->Dosen}}</td>
        <td>{{$m->Matkul}}</td>
        <td>
            <a href="/mahasiswa/{{$m->id}}/edit">Edit</a>
            <form action="/mahasiswa/{{$m->id}}" method="POST">
                @csrf
                @method('delete')
                <input type="submit" value="Delete">
            </form>
        </td>
    </tr>
    @endforeach
</table>