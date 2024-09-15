<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortoController extends Controller
{
  public function porto($nama = ''){
    $data =  [
        'nama' => $nama,
        'kelas' => 'A',
        'npm' => '2267051002',

    ];
    return view('porto', $data);
  }

}
