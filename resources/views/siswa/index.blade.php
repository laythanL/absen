<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
</head>
<body>
    <h1>Absensi Digital</h1>
    <h2>Daftar Siswa</h2>

    <p>Selamat datang di halaman daftar siswa.</p>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <a href="{{ route('siswa.create') }}">Tambah Siswa</a>

    <table border="1" cellpadding="8">
    <thead>
        <tr>
            <th>NIS</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        @forelse ($siswas as $siswa)
            <tr>
                <td>{{ $siswa->nis }}</td>
                <td>{{ $siswa->nama }}</td>
                <td>{{ $siswa->kelas }}</td>
                <td>
                    <a href="{{ route('siswa.edit', $siswa->id) }}">Edit</a>
                
                    <form
                        action="{{ route('siswa.destroy', $siswa->id) }}"
                        method="POST"
                        onsubmit="return confirm('Yakin ingin menghapus siswa ini?')"
                    >
                        @csrf
                        @method('DELETE')
                
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3">Belum ada data siswa.</td>
            </tr>
        @endforelse
    </tbody>
</table>
</body>
</html>

