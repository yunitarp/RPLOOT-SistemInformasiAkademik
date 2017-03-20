<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
	public $timestamps = false;
	protected $fillable = ['mahasiswa_id','matakuliah_id','uts','uas','tugas','tubes','kuis'];
	public function matakuliah(){
		return $this->belongsTo('App\Matakuliah');
	}

	public function presensi(){
		return $this->belongsTo('App\Presensi');
	}

	public function jadwal(){
		return $this->belongsTo('App\Jadwal');
	}
    //
}
