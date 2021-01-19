<?php

namespace App\Models;
use App\Models\Kecamatan;
use App\Models\Provinsi;

class Kecamatan extends Model{
	protected $table = 'kecamatan';

	function kecamatan(){
		return $this->hasMany(Kecamatan::class, 'id_kabupaten');
	}

	function provinsi(){
		return $this->belongsTo(Provinsi::class, 'id');
	}
}