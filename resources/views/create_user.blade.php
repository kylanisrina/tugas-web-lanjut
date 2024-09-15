<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- <h1>Ini Halaman Create User</h1> --}}
    <form action="{{ route('user.store') }}" method="post">
        @csrf
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama"><br><br>
        <label for="npm">NPM:</label>
        <input type="text" id="npm" name="npm"><br><br>
        <label for="kelas">Kelas:</label>
        <input type="text" id="kelas" name="kelas"><br><br>
        <input type="submit" value="Submit">
      </form>
</body>
</html>
