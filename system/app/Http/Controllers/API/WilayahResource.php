<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Provinsi;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Desa;



class WilayahResource extends Controller
{
    function getKabupaten($id){
        return Kabupaten::where("id_provinsi", $id)->get()->toJson();
    }
    function getKecamatan($id_kabupaten){
        return Kecamatan::where("id_kabupaten", $id_kabupaten)->get()->toJson();
    }
    function getDesa($id_kecamatan){
        return Desa::where("id_kecamatan", $id_kecamatan)->get()->toJson();
    }

}