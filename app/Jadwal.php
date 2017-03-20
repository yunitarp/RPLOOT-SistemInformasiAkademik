<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
	public $timestamps = false;
	protected $fillable = ['ruangan_id','hari','jam','menit','matakuliah_id','dosen_id','kelas_id'];
    //

    public function matakuliah(){
    	return $this->belongsTo('App\Matakuliah');
    }
    public function ruangan(){
    	return $this->belongsTo('App\Ruangan');
    }
    public function dosen(){
    	return $this->belongsTo('App\Dosen');
    }
    public function kelas(){
    	return $this->belongsTo('App\Kelas');
    }
}
