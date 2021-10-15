<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\SearchableTrait;
// use Notifiable;
// use Illuminate\NOtification\Notifiable;
// use Nicolaslopezj\Searchable\SearchableTrait;
use Illuminate\Support\Carbon;


class Penumpangs extends Model
{
    protected $table="penumpangs";
    protected $primaryKey="id";
    protected $fillable=
            [
                'id_trayek','nama','alamat','no_telp','date','title','sift'
            ];

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])
        ->translatedFormat('l, d F Y h:i:s A');
    }

    public function Trayeks()
    {
        return $this->hasOne(Trayeks::class, 'id','id_trayek');
    }

    // use Notifiable;
    // use SearchableTrait;
    // protected $searchable = [
    //     'columns' => [
    //         'penumpangs.nama' => 10,
    //         'penumpangs.date' => 10,

    //     ]
    // ];

    
}
