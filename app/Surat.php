<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    protected $table = 'Surat';
    protected $primaryKey = 'id_surat';
    protected $fillable = [
        'tipe_surat', 'nama_surat', 'no_surat', 'nama_warga', 'keperluan', 'umur', 'nik', 'hari', 'lokasi',
        'keterangan', 'alamat', 'nama_bayi', 'nama_ayah', 'nama_ibu', 'jenis_kelamin', 'jabatan', 'tanggal_meninggal', 'tanggal_surat', 'tanggal_berlaku',
        'kecamatan', 'pekerjaan', 'tempat_lahir', 'tanggal_lahir', 'kewarganegaraan', 'status_perkawinan', 'pendidikan', 'agama', 'penghasilan', 'usaha'
    ];
}
