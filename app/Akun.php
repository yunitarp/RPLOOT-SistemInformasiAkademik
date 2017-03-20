<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Akun extends Model
{
	protected $fillable = ['username','password','role'];
	public $timestamps = false;
    public function dosen(){
    	return $this->hasOne('App\Dosen');
    }

    public function mahasiswa(){
    	return $this->hasOne('App\Mahasiswa');
    }

    public function laak(){
    	return $this->hasOne('App\Laak');
    }
}
