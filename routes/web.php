<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/karyawan/{id}', 'KaryawanController@show');

Route::get('/kantin/{id}', 'KantinController@show');

Route::get('/kelas/{id}', 'KelasController@show');

Route::get('/alumni/{id}', 'AlumniController@show');

Route::get('/guru/{id}', 'GuruController@show');

Route::get('/nis/{id}', 'NisController@show');

Route::get('/buku/{id}', 'BukuController@show');

Route::get('/pelajaran/{id}', 'PelajarController@show');

Route::get('/murids/data/{id}', 'MuridController@show');

Route::get('/cicilan/create/{id}', 'CicilanController@create');

Route::get('/siswas/create/{id}', 'SiswaController@create');

Route::get('/murids/create/{id}', 'MuridController@create');

Route::get('/pinjams/create/{id}', 'PinjamController@create');

Route::post('/ajax', 'PinjamController@ajax');

Route::post('/ajax1', 'JlesController@ajax1');

Route::group(['middleware'=>'web'],function(){
	Route::group(['prefix'=>'admin','middleware'=>['auth']], function () {
	// Route disii disini
	Route::resource('kelass','KelasController');
	Route::resource('pelajarans','PelajaranController');
	Route::resource('angkatans','AngkatanController');
	Route::resource('ekskuls','EkskulController');
	Route::resource('pekerjaans','PekerjaanController');
	Route::resource('karyawans','KaryawanController');
	Route::resource('alumnis','AlumniController');
	Route::resource('kantins','KantinController');
	Route::resource('cicilans','CicilanController');
	Route::resource('siswas','SiswaController');
	Route::resource('niss','NisController');
	Route::resource('pelajars','PelajarController');
	Route::resource('murids','MuridController');
	Route::resource('gurus','GuruController');
	Route::resource('less','LesController');
	Route::resource('bukus','BukuController');
	Route::resource('minjams','MinjamController');
	Route::resource('pinjams','PinjamController');
	Route::resource('dokters','DokterController');
	Route::resource('omasuks','OmasukController');
	Route::resource('okategoris','OkategoriController');
	Route::resource('osatuans','OsatuanController');
	Route::resource('okeluars','OkeluarController');
	Route::resource('fasilitass','FasilitasController');
	Route::resource('jless','JlesController');
	Route::resource('jngajars','JngajarController');
	Route::resource('jekskuls','JekskulController');
	Route::resource('jgurus','JguruController');
	Route::resource('jsekolahs','JsekolahController');
	Route::resource('users','UserController');
	});


 
	Route::group(['prefix'=>'pengajar','middleware'=>['auth']], function () {
	Route::resource('kelass','KelasController');
	Route::resource('alumnis','AlumniController');
	Route::resource('niss','NisController');
	Route::resource('pelajars','PelajarController');
	Route::resource('minjams','MinjamController');
	Route::resource('jadwall','JadwallController');
	Route::resource('jadwaln','JadwalnController');
	Route::resource('jadwale','JadwaleController');
	Route::resource('jadwalg','JadwalgController');
	Route::resource('jadwals','JadwalsController');
	});
	

	Route::group(['prefix'=>'uks','middleware'=>['auth']], function () {

	Route::resource('dokter','DokterkController');
	Route::resource('omasuks','OmasukController');
	Route::resource('okategoris','OkategoriController');
	Route::resource('osatuans','OsatuanController');
	Route::resource('okeluars','OkeluarController');
	Route::resource('fasilitass','FasilitasController');


	});

	Route::group(['prefix'=>'perpustakaan','middleware'=>['auth']], function () {

 
	Route::resource('bukus','BukuController');
	Route::resource('minjams','MinjamController');
	Route::resource('pinjams','PinjamController');
	Route::resource('niss','NisController');
	
	});
});