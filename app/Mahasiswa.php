<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{

	protected $fillable = ['prodi_id','nim','nama','kelas_id','akun_id'];
	public $timestamps = false;
	public function akun(){
		return $this->belongsTo('App\Akun');
	}

	public function kelas(){
		return $this->belongsTo('App\Kelas');
	}

	public function prodi(){
		return $this->belongsTo('App\Prodi');
	}
	
}
