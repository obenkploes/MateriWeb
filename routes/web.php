<?php

use App\Http\Controllers\MasyarakatController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $siswa = [
        ['nama' => 'Fitriyan', 'kelas' => 12, 'jurusan' => 'RPL'],
        ['nama' => 'Ageng', 'kelas' => 12, 'jurusan' => 'TKRO'],
        ['nama' => 'Sholeh', 'kelas' => 12, 'jurusan' => 'TP'],
        ['nama' => 'Irawan', 'kelas' => 12, 'jurusan' => 'AK'],
    ];
    return view('LayoutUtama', ['datasiswa'=>$siswa]);
});


Route::get('kelas',function(){
    return view('kelas');
});
Route::get('jurusan',function(){
    return view('jurusan');
});

Route::get('masyarakat/registrasi',[MasyarakatController::class,'registrasi']);
Route::post('masyarakat/simpan',[MasyarakatController::class,'simpan']);
