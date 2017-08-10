<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wilayah extends Model
{
    //


    protected $fillable = [
        'nama_wilayah','kabupaten', 'kecamatan', 'kode_pos'];


    public function Dataiklan(){

	return $this->belongsTo('App\Dataiklan');


}

}
