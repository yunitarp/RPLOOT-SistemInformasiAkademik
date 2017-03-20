<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laak extends Model
{

	protected $fillable = ['nip','nama'];
	public $timestamps = false;
	public function akun(){
		return $this->belongsTo('App\Akun');
	}
    //
}
