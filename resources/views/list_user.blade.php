@extends('layouts.app2')
<div class="decoration extra-small" style="top: 5%; left: 5%; animation: float 4s ease-in-out infinite;">⭐</div>
<div class="decoration medium" style="top: 15%; right: 10%; animation: float 6s ease-in-out infinite;">🌙</div>
<div class="decoration large" style="bottom: 10%; left: 15%; animation: float 5s ease-in-out infinite;">❤️</div>
<div class="decoration small" style="top: 30%; left: 20%; animation: float 7s ease-in-out infinite;">⭐</div>
<div class="decoration medium" style="bottom: 20%; right: 15%; animation: float 5.5s ease-in-out infinite;">❤️</div>
<div class="decoration extra-small" style="top: 50%; right: 5%; animation: float 4.5s ease-in-out infinite;">🌙</div>
<div class="decoration extra-large" style="bottom: 40%; left: 10%; animation: float 6.5s ease-in-out infinite;">⭐</div>
<div class="decoration medium" style="top: 60%; right: 20%; animation: float 5s ease-in-out infinite;">❤️</div>
<div class="decoration small" style="bottom: 15%; right: 10%; animation: float 4s ease-in-out infinite;">🌙</div>
<div class="decoration medium" style="top: 10%; left: 30%; animation: float 6s ease-in-out infinite;">⭐</div>
<div class="decoration extra-small" style="top: 70%; left: 5%; animation: float 5.5s ease-in-out infinite;">❤️</div>
<div class="decoration small" style="bottom: 30%; right: 25%; animation: float 4.5s ease-in-out infinite;">⭐</div>
<div class="decoration large" style="top: 40%; left: 40%; animation: float 7s ease-in-out infinite;">🌙</div>
<div class="decoration medium" style="bottom: 50%; right: 35%; animation: float 5s ease-in-out infinite;">❤️</div>
<div class="decoration extra-small" style="top: 80%; left: 45%; animation: float 4s ease-in-out infinite;">⭐</div>
<div class="decoration small" style="top: 25%; right: 40%; animation: float 6s ease-in-out infinite;">🌙</div>
<div class="decoration extra-large" style="bottom: 60%; left: 50%; animation: float 5.5s ease-in-out infinite;">❤️</div>
<div class="decoration medium" style="top: 55%; right: 45%; animation: float 4.5s ease-in-out infinite;">⭐</div>
<div class="decoration small" style="bottom: 70%; left: 55%; animation: float 7s ease-in-out infinite;">🌙</div>
<div class="decoration large" style="top: 75%; right: 50%; animation: float 5s ease-in-out infinite;">❤️</div>
<div class="decoration extra-small" style="bottom: 80%; left: 60%; animation: float 4s ease-in-out infinite;">⭐</div>
<div class="decoration medium" style="top: 85%; right: 55%; animation: float 6s ease-in-out infinite;">🌙</div>
<div class="decoration small" style="bottom: 85%; left: 65%; animation: float 5.5s ease-in-out infinite;">❤️</div>
<div class="decoration extra-large" style="top: 90%; right: 60%; animation: float 4.5s ease-in-out infinite;">⭐</div>
<div class="decoration medium" style="bottom: 90%; left: 70%; animation: float 7s ease-in-out infinite;">🌙</div>
@section ('content')
<div class="content-wrapper">
    <div class="btn-container">
        <a href="{{ route('user.create') }}" class="btn btn-success">Tambah User</a>
    </div>
    <div class="table-container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NPM</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user['id'] }}</td>
                        <td>{{ $user['nama'] }}</td>
                        <td>{{ $user['npm'] }}</td>
                        <td>{{ $user['nama_kelas'] }}</td>
                        <td></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
@endsection
