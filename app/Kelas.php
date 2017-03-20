<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
	public $timestamps = false;
	protected $fillable = ['prodi_id','kode_kelas','nama_kelas','kapasitas'];

	public function mahasiswa(){
		return $this->hasMany('App\Mahasiswa');
	}

	public function prodi(){
		return $this->belongsTo('App\Prodi');
	}
}
