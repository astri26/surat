<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keluarga extends Model
{
    protected $table = 'keluarga';
    protected $primaryKey = 'no_kk';
    protected $fillable = ['rt','rw','dusun','nama_kk'];
    public $timestamps = false;

    // public function penduduk()
    // {
    //     return $this->belongsTo('App\Penduduk','penduduk_id');
    // }
}
