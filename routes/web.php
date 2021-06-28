<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('login');
// });

Route::get('/', 'RedirectIfAuthenticatedController');
Auth::routes();

Route::middleware(['auth'])->group(function(){

    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('/penduduk', 'PendudukController');
    Route::resource('/keluarga', 'KeluargaController');
    Route::post('/keluarga', 'KeluargaController@store');
    // Route::resource('/dusun', 'DusunController');
    Route::resource('/surat', 'SuratController');
    Route::resource('/skematian', 'SkematianController');
    Route::post('/skematian/get-data/', 'SkematianController@getDataPenduduk');
    Route::resource('/skelahiran', 'SkelahiranController');
    Route::post('/skelahiran/get-data/', 'SkelahiranController@getDataPenduduk');
    Route::resource('/sktm', 'SsktmController');
    Route::post('/sktm/get-data/', 'SsktmController@getDataPenduduk2');
    Route::resource('/sketerangan', 'SketeranganController');
    Route::post('/sketerangan/get-data/', 'SketeranganController@getDataPenduduk');
    Route::resource('/sizinkeramaian', 'SizinkeramaianController');
    Route::post('/sizinkeramaian/get-data/', 'SizinkeramaianController@getDataPenduduk');
    Route::resource('/sketeranganusaha', 'SketeranganusahaController');
    Route::post('/sketeranganusaha/get-data/', 'SketeranganusahaController@getDataPenduduk');
    Route::resource('/sbelumkawin', 'SbelumkawinController');
    Route::post('/sbelumkawin/get-data/', 'SbelumkawinController@getDataPenduduk');
    Route::resource('/skehilangan', 'SkehilanganController');
    Route::post('/skehilangan/get-data/', 'SkehilanganController@getDataPenduduk');
    Route::resource('/sketeranganpenghasilan', 'SketeranganpenghasilanController');
    Route::post('/sketeranganpenghasilan/get-data/', 'SketeranganpenghasilanController@getDataPenduduk');
    
    Route::resource('/template', 'TemplateController');
    Route::resource('/templatesktm', 'TemplatesktmController');
    Route::resource('/templatekelahiran', 'TemplatekelahiranController');
    Route::resource('/templateketerangan', 'TemplateketeranganController');
    Route::resource('/templateketeranganusaha', 'TemplateketeranganusahaController');
    Route::resource('/templatebelumkawin', 'TemplatebelumkawinController');
    Route::resource('/templatekehilangan', 'TemplatekehilanganController');
    Route::resource('/templatekematian', 'TemplatekematianController');
    Route::resource('/templatepenghasilan', 'TemplatepenghasilanController');
    Route::resource('/templatekeramaian', 'TemplatekeramaianController');
    
    Route::resource('/history', 'HistoryController');
    
    Route::get('/sketeranganusaha/{sketeranganusaha}', 'SketeranganusahaController@tampilHistory');
    Route::get('/sizinkeramaian/{sizinkeramaian}', 'SizinkeramaianController@tampilHistory');
    Route::get('/skehilangan/{skehilangan}', 'SkehilanganController@tampilHistory');
    Route::get('/skematian/{skematian}', 'SkematianController@tampilHistory');
    Route::get('/sketerangan/{sketerangan}', 'SketeranganController@tampilHistory');
    Route::get('/sktm/{sktm}', 'SsktmController@tampilHistory');
    Route::get('/sbelumkawin/{sbelumkawin}', 'SbelumkawinController@tampilHistory');
    Route::get('/sketeranganpenghasilan/{sketerangan}', 'SketeranganpenghasilanController@tampilHistory');
    Route::get('/skelahiran/{skelahiran}', 'SkelahiranController@tampilHistory');
    


});
