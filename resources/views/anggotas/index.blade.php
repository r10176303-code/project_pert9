
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Anggota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2>Data Anggota Simpan Pinjam</h2>
        <a href="{{ route('anggotas.create') }}" class="btn btn-primary my-3">Tambah Anggota</a>
        
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nomor Anggota</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($anggotas as $i => $a)
                <tr>
                    <td>{{ $i + 1 }}</td>
                    <td>{{ $a->nomor_anggota }}</td>
                    <td>{{ $a->nama }}</td>
                    <td>{{ $a->alamat }}</td>
                    <td>{{ $a->telepon }}</td>
                    <td>
                        <form action="{{ route('anggotas.destroy', $a->id) }}" method="POST">
                            <a href="{{ route('anggotas.edit', $a->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>