<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merekmobil extends Model
{
    //

    protected $fillable = ['nama_merek','id_tipe'];
    //


public function Tipemobil(){

	return $this->belongsTo('App\Tipembil');
}

public function Dataiklan(){

	return $this->hasMany('App\Dataiklan');
}


}
