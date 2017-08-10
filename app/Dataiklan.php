<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dataiklan extends Model
{
    //

    protected $fillable = [
       'id_akun','judul_iklan','id_merek','kondisi','harga','tahun','id_wilayah', 'deskripsi'];



       public function User(){

	return $this->belongsTo('App\User');
}

public function Merekmobil(){

	return $this->belongsTo('App\Merekmobil');
}

public function Wilayah(){

	return $this->belongsTo('App\Wilayah');
}




}
