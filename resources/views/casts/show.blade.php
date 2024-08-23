<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <table border="1">
    <thead>
        <tr>

        </tr>
    </thead> 
    <tbody>
        <td><?=$cast->id?></td>
        <td><?=$cast->nama?></td>
        <td><?=$cast->umur?></td>
        <td><?=$cast->bio?></td>
        <td><a href="/cast/{{ $cast->id }}/edit">Edit</a></td>
        <td>
            <form action="/cast/{{ $cast->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">delete</button>\
            </form>
        </td>
    </tr>
    </tbody>
  </table>
  <a href="/cast">kembali</a>
</body>
</html>
</tbody>
</body>
</html>