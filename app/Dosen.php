<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{

	protected $fillable = ['akun_id','prodi_id','nip','nama','kode_dosen'];
	public $timestamps = false;
	public function akun(){
		return $this->belongsTo('App\Akun');
	}
}
