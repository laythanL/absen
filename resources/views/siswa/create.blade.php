<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa</title>
</head>
<body>
    <h1>Tambah Siswa</h1>

    <form action="{{ route('siswa.store') }}" method="POST">
        @csrf

        <div>
            <label for="nis">NIS</label>
            <input
                type="text"
                id="nis"
                name="nis"
                value="{{ old('nis') }}"
                required
            >
            @error('nis')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="nama">Nama</label>
            <input
                type="text"
                id="nama"
                name="nama"
                value="{{ old('nama') }}"
                required
            >
            @error('nama')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="kelas">Kelas</label>
            <input
                type="text"
                id="kelas"
                name="kelas"
                value="{{ old('kelas') }}"
                required
            >
            @error('kelas')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="password">password</label>
            <input
                type="password"
                id="password"
                name="password"
                value="{{ old('password') }}"
                required
            >
            @error('password')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <button type="submit">Simpan Siswa</button>
    </form>

    <a href="{{ route('siswa.index') }}">Kembali ke Daftar Siswa</a>
</body>
</html>
