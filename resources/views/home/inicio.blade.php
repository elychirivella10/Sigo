@extends('layouts.dashboard')
@section('title','Nuevo Visitante')
@section('home')

<style type="text/css">
#ul_a li { margin-bottom:10px; border-radius:0; background-color:#C5C5C5;}
#ul_a li a { color:#000000; text-decoration:none;}
#ul_a li:first-child { background-color:#2d415f; color:#FFFFFF; font-weight:700;}
#ul_b { width:100%;}
#ul_b li { background-color:#FFFFFF; font-weight:700;}
#ul_b li:first-child { background-color:#FFFFFF;}
#ul_b li a { color:#000000; text-decoration:none; font-weight:bold;}
#clock .time { display:none;}
#ul_a .badge { background-color:#2D415F;}
</style>
<div class="container">
    <div class="card-body bg-white">
<ul class="list-group" id="ul_a">
  
  <li class="list-group-item">BANDEJA DE EVENTOS DEL SISTEMA</li>
 
<li class="list-group-item">AVERIAS RECIBIDAS <span class="badge"></span></li>  
<li class="list-group-item">AVERIAS RECIBIDAS 1x10 <span class="badge"></span></li>  
<li class="list-group-item">AVERIAS RECIBIDAS PENDIENTES <span class="badge"></span></li>  
<li class="list-group-item">AVERIAS RECIBIDAS PENDIENTE 1X10 <span class="badge"></span></li>   
  
  
</ul>
<ul class="list-group" id="ul_a">
<li class="list-group-item">SISTEMAS DE DISTRIBUCIÓN AGUA POTABLE</li>

<li class="list-group-item">E.B CON MAS DE (5) DIAS SIN ACTUALIZACIÓN  <span class="badge"><? echo $mon_op ?></span></li>
<li class="list-group-item">POZOS CON MAS DE (5) DIAS SIN ACTUALIZACIÓN  <span class="badge"><? echo $poz_s ?></span></li>    
</ul>
</div></div>

@endsection