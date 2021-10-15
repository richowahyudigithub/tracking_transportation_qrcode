<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengaduan extends Model
{
    protected $table = "pengaduans";
    protected $fillable = [
        'date','nama','no_telp','alamat','deskripsi','id_trafficlight'
    ];

    public function trafficlight()
    {
        return $this->hasOne(trafficlight::class, 'id','id_trafficlight');
    }
}
