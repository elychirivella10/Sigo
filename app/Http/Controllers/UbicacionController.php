<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UbicacionController extends Controller
{
    public function municipios()
    {
        $id_estado=$_POST['id_estado'];
        $municipio = DB::table('municipio')
        ->where('id_estado',$id_estado)
        ->select('*')
        ->get();

        return $municipio;
    }

    public function parroquias()
    {
        $id_municipio=$_POST['id_municipio'];
        $parroquia = DB::table('parroquias')
        ->where('id_municipio',$id_municipio)
        ->select('*')
        ->get();
        return $parroquia;
    }
}
