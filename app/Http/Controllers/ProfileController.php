<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile($nama= ''){
        $data = [
            'nama' => $nama,
            'kelas' => 'A',
            'npm' => '226705102'
        ];

        return view('profile', $data);
    }
}
