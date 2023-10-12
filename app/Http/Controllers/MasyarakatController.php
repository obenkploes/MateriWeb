<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use Illuminate\Http\Request;

class MasyarakatController extends Controller
{
    //

    public function registrasi(){
        return view('masyarakat.registrasi');
    }

    public function simpan(Request $request){
        $m = new Masyarakat();
        // $m->create([
        //     'nik'=>$request->nik,
        //     'nama'=>$request->nama,
        //     'username'=>$request->username,
        //     'password'=>$request->password,
        //     'telp'=>$request->telp,
        // ]);

        $m->create($request->all());
       return redirect('masyarakat/registrasi')->with('info','Anda berhasil Registrasi');
    }
}
