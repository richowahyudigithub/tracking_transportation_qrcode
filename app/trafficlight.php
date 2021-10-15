<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trafficlight extends Model
{
    protected $table ="trafficlights";
    protected $primaryKey="id";
    protected $fillable =[
        'nama_traffic','nama_jl'
    ];
}
