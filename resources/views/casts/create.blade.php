<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah cast baru</title>
</head>
<body>
    <h1>tambah cast baru</h1>
    <form method="POST" action="/cast">
        @csrf
        <div>
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>
        </div>
        <div>
            <label for="umur">umur:</label>
            <input type="number" id="umur" name="umur" required>
        </div>
        <div>
            <label for="bio">Bio:</label>
            <textarea id="bio" name="bio" required></textarea>
        </div>
        <button type="submit">simpan</button>
    </form>
    <a href="/cast">kembali</a>
</body>
</html>