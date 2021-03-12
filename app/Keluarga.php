<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keluarga extends Model
{
    protected $table = 'keluarga';
    protected $primaryKey = 'id_keluarga';
    protected $fillable = ['rt','rw','dusun','penduduk_id'];

    public function penduduk()
    {
        return $this->belongsTo('App\Penduduk','penduduk_id');
    }
}
