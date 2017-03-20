<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
	public $timestamps = false;
	protected $fillable = ['gedung_id','kode_ruangan','nama_ruangan'];
	public function gedung(){
		return $this->belongsTo('App\Gedung');
	}
    //
}
