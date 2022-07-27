<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class RegistroController extends Controller
{
    public function ListarEmbalses()
    {
        $lembalses = DB::table('fuente')
        ->join('tipo_fuente','fuente.tipo','=','tipo_fuente.id')
        ->join('estado','fuente.estado','=','estado.id')
        ->join('municipio','fuente.municipio','=','municipio.id')
        ->join('parroquias','fuente.parroquia','=','parroquias.id')
        ->select('*')->get()->all();

        // dd($lembalses);

        return view('home.registro.captacionEmbalses',['embalses'=>$lembalses]);
    }

    public function aduccionEB()
    {
        $nuevaeb = DB::table('eb_tipo')->get();

        $acueducto = DB::table('acueducto')->get();

        $estado = DB::table('estado')->get();

        // dd($nuevaeb);

        return view('home.registro.aduccionEB',['tipoeb'=>$nuevaeb, 'acueducto'=>$acueducto,'estado'=>$estado]);
    }
    public function guardarEB()
    {
        dd($_POST);
    }

    public function ListarDiqueToma()
    {
        // DB::enableQueryLog();
        $dique = DB::table('dique_toma')
        ->join('captacion','captacion.id_itm','=','dique_toma.id')
        ->where('dique_toma.acueducto','=',5)
        ->select('*')->get();
        // ->orderBy('fecha','DESC',1)->get();

        // dd($dique);

    //     foreach($dique as $i => $diq){
    //     $captacion[$i] = DB::table('captacion')
    //     ->where('tipo','=',3)
    //     ->where('id_itm','=',$diq->id)
    //     ->select('*')
        
    //     ->orderBy('id','ASC')->get()->last();
    // }


    // $q = DB::getQueryLog();
    //     dd($q)
        //dd($captacion);

        return view('home.registro.captacionDique',['dique'=>$dique]);
        
    }

    public function potabilizacionFiltracion()
    {

        $acueducto = DB::table('acueducto')->get();

        $estado = DB::table('estado')->get();

        return view('home.registro.potabilizacionFiltracion',['estado'=>$estado,'acueducto'=>$acueducto]);
    }

    public function guardarFiltracion()
    {
        dd($_POST);
    }

    public function potabilizacionDeszanilizadoras()
    {
        $acueducto = DB::table('acueducto')->get();

        $estado = DB::table('estado')->get();

        return view('home.registro.potabilizacionDeszanilizadoras',['estado'=>$estado,'acueducto'=>$acueducto]);
    }

    public function guardarDeszanilizadoras()
    {
        dd($_POST);
    }

    public function potabilizacionPotabilizadoras()
    {
        $acueducto = DB::table('acueducto')->get();

        $estado = DB::table('estado')->get();

        return view('home.registro.potabilizacionPotabilizadoras',['estado'=>$estado,'acueducto'=>$acueducto]);
    }

    public function guardarPotabilizadoras()
    {
        dd($_POST);
    }

    public function potabilizacionPortatiles()
    {
        $acueducto = DB::table('acueducto')->get();

        $estado = DB::table('estado')->get();

        return view('home.registro.potabilizacionPortatiles',['estado'=>$estado,'acueducto'=>$acueducto]);   
    }

    public function guardarPortatiles()
    {
        dd($_POST);
    }
}
