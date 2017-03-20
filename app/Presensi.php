<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presensi extends Model
{
	public $timestamps = false;

	public function jadwal(){
		return $this->belongsTo('App\Jadwal');
	}
	public function matakuliah(){
		return $this->belongsTo('App\Matakuliah');
	}
    //
}
