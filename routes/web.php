<?php

use App\Http\Controllers\AdministrasiC;
use App\Http\Controllers\BagianC;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KebutuhanC;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PegawaiC;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\To_doController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;



/*
|--------------------------------------------------------------------------
| Web Routesd_produk
2. nama 
3. diskripsi
4. harga
5. stok
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/mahasiswa/{nama}', function ($nama) {
//     return ('Tampilkan Mahasiswa Yang Bernama = ' . $nama);
// });

// Route::get('/stokBarang/{nama}/{jen}', function ($nama, $jen) {
//     return ('cek stok barang untuk = ' . $nama . " " . $jen);
// });

// Route::get('/stokBarang/{stok?}', function ($stok = "oppo") {
//     return ('cek stok barang untuk smartphone = ' . $stok);
// });

// Route::get('/user/{id}', function ($id) {
//     return ('Tampilkan user dengan Id ke = ' . $id);
// });

// Route::get('/mahasiswa/{id}', function ($idm) {
//     return (' filter Id mahaiswa : ' . $idm);
// })->where('id', '[A-Z]{2}.[0-9]+');



// Route::get('/home/index', function () {
//     return view('home.index');
// });
// Route::get('/home/list', function () {
//     return view('home.list');
// });
// Route::get('/home/table', function () {
//     return view('home.table');
// });


Route::get('/', function () {
    $mhs = ['saepul bahri', 'adam nizar', 'gilang pratama', 'murizal'];
    return view('admin.mahasiswa')->with('mahasiswa', $mhs);
});

Route::get('/admin/dosen', function () {
    $dos = ['nama dosen 1', 'nama dosen 2', 'nama dosen 3', 'nama dosen 4'];
    return view('admin.dosen')->with('dosen', $dos);
});

Route::get('/admin/galery', function () {
    $gambar = ['foto 1', 'foto 2', 'foto 3', 'foto 4'];
    return view('admin.galery')->with('emet', $gambar);
});


Route::get('/dosens2', [PageController::class, 'dosens2'])->name('dosens2'); //string yang pertama pada routing itu bebas asalkan menggambarkan dari isinya

Route::get('/dosens', [PageController::class, 'dosens'])->name('dosens'); //kirim data menggunakan controller
Route::get('/mahasiswa', [MahasiswaController::class, 'mahasiswa'])->name('mahasiswa'); //kirim data menggunakan controller
Route::get('/galery', [GaleryController::class, 'galery'])->name('galery'); //kirim data menggunakan controller

Route::get('/coba-facade', [MahasiswaController::class, 'cobaFacade'])->name('cobaFacade'); //methodFacade
// Route::get('/galery', [PageController::class, 'galery'])->name('galery');
// Route::get('/home/index', [HomeController::class, 'index'])->name('index');
// Route::get('/home/list', [ListController::class, 'index'])->name('list');
// Route::get('/home/table', [TableController::class, 'index'])->name('table');


Route::resource('/to_do', To_doController::class);

Route::get('/kategori', [KategoriController::class, 'index']);
Route::post('/kategori/tambah', [KategoriController::class, 'tambah'])->name('kategori.tambah');
Route::post('/kategori/update', [KategoriController::class, 'update'])->name('kategori.update');
Route::get('/kategori/destroy/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy');

Route::get('/produk', [ProdukController::class, 'index']);
Route::post('/produk/tambah', [ProdukController::class, 'tambah'])->name('produk.tambah');
Route::post('/produk/update', [ProdukController::class, 'update'])->name('produk.update');
Route::get('/produk/destroy/{id}', [ProdukController::class, 'destroy'])->name('produk.destroy');


// route for table RSUD
Route::get('/administrasi', [AdministrasiC::class, 'index']);
Route::post('/administrasi/tambah', [AdministrasiC::class, 'tambah'])->name('administrasi.tambah');
Route::post('/administrasi/update', [AdministrasiC::class, 'update'])->name('administrasi.update');
Route::get('/administrasi/destroy', [AdministrasiC::class, 'destroy'])->name('administrasi.destroy');

Route::get('/bagian', [BagianC::class, 'index']);
Route::post('/bagian/tambah', [BagianC::class, 'tambah'])->name('bagian.tambah');
Route::post('/bagian/update', [BagianC::class, 'update'])->name('bagian.update');
Route::get('/bagian/destroy/{id}', [BagianC::class, 'destroy'])->name('bagian.destroy');

Route::get('/kebutuhan', [KebutuhanC::class, 'index']);
Route::post('/kebutuhan/tambah', [KebutuhanC::class, 'tambah'])->name('kebutuhan.tambah');
Route::post('/kebutuhan/update', [KebutuhanC::class, 'update'])->name('kebutuhan.update');
Route::get('/kebutuhan/destroy/{id}', [KebutuhanC::class, 'destroy'])->name('kebutuhan.destroy');

Route::get('/pegawai', [PegawaiC::class, 'index']);
Route::post('/pegawai/tambah', [PegawaiC::class, 'tambah'])->name('pegawai.tambah');
Route::post('/pegawai/update', [PegawaiC::class, 'update'])->name('pegawai.update');
Route::get('/pegawai/destroy/{id}', [PegawaiC::class, 'destroy'])->name('pegawai.destroy');
