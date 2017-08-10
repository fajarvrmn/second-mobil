<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipemobil extends Model

{
	protected $fillable = [
        'nama_tipe'];
    //


public function Merekmobil(){

	return $this->hasMany('App\Merekmbil');
}

}
