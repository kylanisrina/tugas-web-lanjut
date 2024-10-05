<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Kelas;
use App\Models\UserModel;

class UserController extends Controller

{

    public $userModel;
    public $kelasModel;


    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }

    public function index()
{
    $data = [
        'title' => 'List User',
        'users' => $this->userModel->getUser(),
    ];

    return view('list_user', $data);
}


public function create(){
    $kelasModel = new Kelas();

    // Mengambil data kelas menggunakan method getKelas
    $kelas = $kelasModel->getKelas();

    $data = [
        'title' => 'Create User',
        'kelas' => $kelas,
    ];

    return view('create_user', $data);
}

public function store(Request $request)
{
    $this->userModel->create([
        'nama' => $request->input('nama'),
        'npm' => $request->input('npm'),
        'kelas_id' => $request->input('kelas_id'),
    ]);

    return redirect()->to('/user');
}

    // // public function create()
    // // {
    // //     return view('create_user');
    // // }
    // public function profile($nama = '', $kelas = '', $npm = ''){
    //     $data = [
    //         'nama' => $nama,
    //         'kelas' => $kelas,
    //         'npm' => $npm
    //     ];
    //     return view('profile', $data);
    // }

    // // public function create(){
    // //     return view('create_user', [
    // //         'kelas' => Kelas::all(),
    // //     ]);
    // // }

    // public function index()
    // {
    //     $data = [
    //         'title' => 'List User',
    //         'users' => $this->userModel->getUser(),
    //     ];

    //     return view('profile', $data);
    // }

    // public function create(){
    //     $kelasModel = new Kelas();
    //     $kelas = $kelasModel->getKelas();
    //     $data = [
    //         'kelas' => $kelas,
    //     ];
    //     return view('create_user', $data);
    // }


    // public function store(Request $request)
    // {
    //     // $data = [
    //     //     'nama' => $request->input('nama'),
    //     //     'npm' => $request->input('npm'),
    //     //     'kelas' => $request->input('kelas'),
    //     // ];
    //     // return view('profile', $data);

    //     $validatedData = $request->validate([
    //         'nama' => 'required|string|max:255',
    //         'npm' => 'required|string|max:255',
    //         'kelas_id' => 'required|exists:kelas,id',
    //     ],
    //     [
    //         'nama.required' => 'Nama perlu diisi.',
    //         'npm.required' => 'NPM perlu diisi.',
    //         'kelas_id.required' => 'Kelas perlu dipilih.',
    //     ]);


    //     $user = UserModel::create($validatedData);

    //     $user->load('kelas');

    //     return view('profile', [
    //         'nama' => $user->nama,
    //         'npm' => $user->npm,
    //         'nama_kelas' => $user->kelas->nama_kelas ?? 'kelas tidak ditemukan',
    //     ]);

    // }

}
