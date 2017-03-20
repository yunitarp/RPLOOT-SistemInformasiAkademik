<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gedung extends Model
{
	public $timestamps = false;
	protected $fillable = ['kode_gedung','nama_gedung'];
    //
}
