<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="login/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/landing.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">


  
  <title>..:: HIDROCAPITAL | SISTEMA PRINCIPAL  ::..</title>
</head>
<body>

<!--<h1>Ventana flotante animada con javascript y jquery</h1>
<h3><a onClick="flotante(1)">Abrir ventana</a></h3>

<div id="contenedor" style="display:none">

<div id="flotante"><h1>Ventana flotante</h1>
<h3><a onClick="flotante(2)">Cerrar ventana</a></h3>
</div>

<div id="fondo"></div>

</div>-->

<div class="container-fluid header-nav">
    <div class="container">
        <div class="row">
            <div class="col-4 logo-nav">
              <img src="img/logi.png" alt="">
          </div>
          <div class="col-8 nav-nav text-right text-uppercase p-2">

            <!--<button type="button" id="registro" onClick="flotant(1)" class="btn btn-warning" style="float: right;"  >Registrar</button>-->

            <button type="button" id="inicio" onClick="flotante(1)"  class="btn btn-primary" style="float: right;" >Iniciar Sesion </button>

            <div id="contenedor" style="display:none">

                <div id="flotante">
                    <div class="container">

                        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
                        <div class="container">
                            <div class="card card-login mx-auto text-center ">
                                <div class="card-header mx-auto ">
                                    <span> <img src="img/logi.png" class="w-75" alt="Logo"> </span><br/>
                                    <span class="logo_title mt-5">Inicio de Sesión</span>
                                </div>
                                <div class="card-body">
                                    <form class="form" id="formulario_logon" method="post" action="{{route('entrar')}}">
                                        <div class="input-group form-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                            </div>
                                            <input type="text" class="form-control" name="user" id="user" placeholder="Usuario" required>
                                        </div>

                                        <div class="input-group form-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                                            </div>
                                            <input type="password" class="form-control" name="pass" id="pass" placeholder="Contraseña" required>
                                        </div>

                                        <div class="form-group">
                                            <input type="submit" name="btn" onClick="flotante(2)" value="Login" class="btn btn-outline-danger float-right login_btn">
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div id="fondo"></div>
            </div>








        </div>
    </div>
</div>
</div>

<div class="section-two">
    <div class="letter-text" >
        <div class="container">
            <div class="row  align-items-center">
                <div class="col-6">
                    <!--<h3 class="entry-text">Que contiene nuestro sistema?</h3>-->
                    <!--<p class="text-pert"><i class="far fa-check-circle"></i> Registro de visita</p>
                    <p class="text-pert"><i class="far fa-check-circle"></i> Capture de la visita</p>
                    <p class="text-pert"><i class="far fa-check-circle"></i> Herramientas</p>
                    <p class="text-pert"><i class="far fa-check-circle"></i> Entidades</p>-->
                </div>
                <div class="col-6">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section-medium">
    <hr>
    <h2 class="text-center p-2"><i class="icon-wave2"></i>Sistema Integral Gestión Operativa</h2>
    <hr>
</div>
<br><br><br><br><br><br>
<footer>
    <p class="text-footer text-center"> Todos los derechos reservados Sigo 2022</p>
</footer>
 <!--<div class="section-three">
    <div class="container">
        <br>
        <br>
        <h3 class="text-center head-b"><i class="icon-pulse2"></i> Funcionalidades</h3>
        <hr>
        <div class="row">
            <div class="col-3 text-center ">
                <div class="cort-fart">
                    <i class="fas fa-shopping-cart ico-head"></i>
                    <hr>
                    <p class="box-landing-text"><i class="fas fa-atom"></i> Registro de visita rapido</p>-->
                </div>

            </div>
            
            <div class="col-3 text-center">
                  <!--<div class="cort-fart">
                    <i class="fas fa-camera ico-head"></i>-->
                    <!--<hr>
                        <p class="box-landing-text"><i class="fas fa-atom"></i> Captura de manera sencilla</p>-->

                    </div>
                </div>
                <div class="col-3 text-center ">
                  <!--<div class="cort-fart">
                    <i class="fas fa-cog ico-head"></i>-->
                    <!--<hr>
                        <p class="box-landing-text"><i class="fas fa-atom"></i> Uso de api configurable</p>-->
                    </div>
                </div>
                <div class="col-3 text-center ">
                  <!--<div class="cort-fart">
                    <i class="fas fa-clipboard-check ico-head"></i>s
                    <hr>
                    <p class="box-landing-text"><i class="fas fa-atom"></i> Sistema facil de entender</p>-->
                </div>
            </div>
        </div>
    </div>
</div>


<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>

<script>

    function registro(tipo){

       if (tipo==1){
           $('#content').show();
           $('#flotant').animate({
              marginTop: "-152px"
          });
       }
       if (tipo==2){
        $('#flotant').animate({
          marginTop: "-956px"
      });
        setTimeout(function(){
           $('#content').hide();

       },500)
    }

}

function flotante(tipo){
	
	if (tipo==1){
       $('#contenedor').show();
       $('#flotante').animate({
          marginTop: "-152px"
      });
   }
   if (tipo==2){
    $('#flotante').animate({
      marginTop: "-956px"
  });
    setTimeout(function(){
       $('#contenedor').hide();

   },500)
}

}



</script>

</body>
</html>