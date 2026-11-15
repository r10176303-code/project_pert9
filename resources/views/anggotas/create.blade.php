<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Anggota - Simpan Pinjam</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Tambah Data Anggota</h2>
        <hr>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('anggotas.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="user_id" class="form-label">Pilih User Pengguna</label>
                <select name="user_id" id="user_id" class="form-control" required>
                    <option value="">-- Pilih User --</option>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }} ({{ $user->email }})</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="nomor_anggota" class="form-label">Nomor Anggota</label>
                <input type="text" name="nomor_anggota" id="nomor_anggota" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" name="nama" id="nama" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea name="alamat" id="alamat" class="form-control" rows="3" required></textarea>
            </div>

            <div class="mb-3">
                <label for="telepon" class="form-label">Nomor Telepon</label>
                <input type="text" name="telepon" id="telepon" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{ route('anggotas.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>