<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trayeks extends Model
{
    protected $table="trayeks";
    protected $primaryKey="id";
    protected $fillable=['nama_sopir','jenis_kendaraan','no_polisi','no_telpon'];
}
