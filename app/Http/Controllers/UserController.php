<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Kelas;
use App\Models\UserModel;

class UserController extends Controller
{
    // public function create()
    // {
    //     return view('create_user');
    // }
    public function profile($nama = '', $kelas = '', $npm = ''){
        $data = [
            'nama' => $nama,
            'kelas' => $kelas,
            'npm' => $npm
        ];
        return view('profile', $data);
    }

    public function create(){
        return view('create_user', [
            'kelas' => Kelas::all(),
        ]);
    }

    public function store(Request $request)
    {
        // $data = [
        //     'nama' => $request->input('nama'),
        //     'npm' => $request->input('npm'),
        //     'kelas' => $request->input('kelas'),
        // ];
        // return view('profile', $data);

        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'npm' => 'required|string|max:255',
            'kelas_id' => 'required|exists:kelas,id',
        ]);

        $user = UserModel::create($validatedData);

        $user->load('kelas');

        return view('profile', [
            'nama' => $user->nama,
            'npm' => $user->npm,
            'nama_kelas' => $user->kelas->nama_kelas ?? 'kelas tidak ditemukan',
        ]);
    }

}
