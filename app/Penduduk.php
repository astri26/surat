<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    protected $table = 'penduduk';
    protected $primaryKey = 'nik';
    protected $fillable = ['no_kk','nik','nama','tempat_lahir','tanggal_lahir','nama_ibu','nama_ayah','jenis_kelamin','alamat','agama','status_perkawinan','status_hubungan','pekerjaan','kewarganegaraan','pendidikan'];
    public $timestamps = false;
    // public function keluarga()
    // {
    // 	return $this->hasOne('App\Keluarga','penduduk_id');
    // }
}
