<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    protected $table = 'penduduk';
    protected $primaryKey = 'id_penduduk';
    protected $fillable = ['no_kk','nik','nama','tempat_lahir','tanggal_lahir','jenis_kelamin','alamat','agama','status_perkawinan','status_hubungan','pekerjaan','kewarganegaraan'];

    public function keluarga()
    {
    	return $this->hasOne('App\Keluarga','penduduk_id');
    }
}
