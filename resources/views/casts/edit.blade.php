<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit cast</title>
</head>
<body>
    <h1>edit cast</h1>
    <form method="POST" action="/cast/{{ $cast->id }}">
        @csrf
        @method('PUT')
        <div>
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required value="{{ $cast->nama }}">
        </div>
        <div>
            <label for="umur">umur:</label>
            <input type="number" name="umur" required value="{{ $cast->umur }}">
        </div>
        <div>
            <label for="bio">Bio:</label>
            <textarea id="bio" name="bio" required>{{ $cast->nama }}</textarea>
        </div>
        <button type="submit">simpan</button>
    </form>
    <a href="/cast/{{  $cast->id }}">cancel</a>
</body>
</html>