<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
	public $timestamps = false;
	protected $fillable = ['nama_matakuliah','sks','tingkat','kode_matakuliah'];
    //
}
