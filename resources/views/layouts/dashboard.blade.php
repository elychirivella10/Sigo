<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>..:: HIDROCAPITAL | SISTEMA PRINCIPAL  ::..</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('https://code.ionicframework.com/ionicons/2.0.1/cs')}}s/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-')}}4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}">

  <link rel="stylesheet" type="text/css" href="{{asset('css/css.css')}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->

    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="../../img/logosigos2.png" alt="" height="100" width="300">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
      
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="{{Route('inicio')}}" class="brand-link">
        <img src="{{asset('../../img/logosigos.png')}}" width="200" height="50">
        <span class="brand-text font-weight-light"></span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="info">
            <label style="color:white; font-size: 17px;">Bienvenido/a</label>
            <p href="#" class="d-block" style="color: white; font-size: 18px"><? echo $_SESSION["nombre"] ?></p>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
          <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fa fa-plus-square fa-lg" aria-hidden="true"></i>
                <p>REGISTRO</p>
                <i class="right fas fa-angle-left"></i>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fa fa-random fa-lg" aria-hidden="true"></i>
                    <p>Procesos Hídricos</p>
                    <i class="right fas fa-angle-left"></i>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="fa fa-snowflake-o fa-lg" aria-hidden="true"></i>
                        <p>Captación</p>
                        <i class="right fas fa-angle-left"></i>
                      </a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="{{Route('Captacion.Embalses')}}" class="nav-link">
                            <i class="nav-icon far fa-circle text-info"></i>
                            <p>Embalses</p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="{{Route('lista.dique')}}" class="nav-link">
                            <i class="nav-icon far fa-circle text-info"></i>
                            <p>Dique Toma</p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link" onclick="CargarContenido('estructuras.php?class=k&var=1&b=4','container')">
                            <i class="nav-icon far fa-circle text-info"></i>
                            <p>Toma Río</p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link" onclick="CargarContenido('estructuras.php?class=k&var=1&b=5','container')">
                            <i class="nav-icon far fa-circle text-info"></i>
                            <p>Pozo Profundo</p>
                          </a>
                        </li>
                    <!-- <li class="nav-item">
                      <a href="#" class="nav-link" onclick="CargarContenido('estructuras.php?class=k&var=1&b=6','container')">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Toma Marítima</p>
                      </a> 
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link" onclick="CargarContenido('estructuras.php?class=k&var=1&b=7','container')">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Galería Filtrante</p>
                      </a> 
                    </li> -->
                  </ul>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fa fa-shower fa-lg" aria-hidden="true"></i>
                    <p>
                      Conducción
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="{{Route('aduccion.nuevaEB')}}" class="nav-link">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Estación de Bombeo</p>
                      </a>
                    </li>
                    <!-- <li class="nav-item">
                      <a href="#" class="nav-link" onclick="CargarContenido('estructuras.php?class=k&var=2&b=25','container')">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>
                          Chimeneas
                        </p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link" onclick="">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Válvulas</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link" onclick="CargarContenido('estructuras.php?class=k&var=3&b=55','container')">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Interconexión</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link" onclick="CargarContenido('estructuras.php?class=k&var=3&b=56','container')">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Estanques</p>
                      </a> 
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link" onclick="CargarContenido('estructuras.php?class=k&var=3&b=56','container')">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Tuberías</p>
                      </a> 
                    </li> -->
                  </ul>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fa fa-tint fa-lg" aria-hidden="true"></i>
                    <p>
                      Potabilización
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="{{Route('pot.filtracion')}}" class="nav-link">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Plantas de Filtración</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{Route('pot.deszanilizadoras')}}" class="nav-link">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Plantas Deszanilizadoras</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{Route('pot.potabilizadoras')}}" class="nav-link">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Plantas Potabilizadoras</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{Route('pot.Portatiles')}}" class="nav-link">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Plantas Portátiles</p>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fa fa-arrows-alt fa-lg" aria-hidden="true"></i>
                    <p>
                      Distribución
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="#" class="nav-link" onclick="CargarContenido('estructuras.php?class=k&var=3&b=1','container')">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Estación de Bombeo</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link" onclick="CargarContenido('estructuras.php?class=k&var=3&b=10','container')">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Ciclo de Distribución</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link" onclick="CargarContenido('estructuras.php?class=k&var=3&b=11','container')">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Plan de Abastecimiento</p>
                      </a>
                    </li>
                    <!-- <li class="nav-item">
                      <a href="#" class="nav-link" onclick="CargarContenido('estructuras.php?class=k&var=3&b=30','container')">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Tuberías</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link" onclick="CargarContenido('estructuras.php?class=k&var=3&b=31','container')">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Estanques</p>
                      </a> 
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link" onclick="CargarContenido('estructuras.php?class=k&var=3&b=32','container')">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Válvulas</p>
                      </a> 
                    </li> -->
                  </ul>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fa fa-heart fa-lg" aria-hidden="true"></i>
                    <p>
                      Saneamiento
                    </p>
                    <i class="right fas fa-angle-left"></i>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="#" class="nav-link" onclick="CargarContenido('estructuras.php?class=k&var=5&b=18','container')">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Estación de Bombeo</p>
                      </a>
                    </li>
                    <!-- <li class="nav-item">
                      <a href="#" class="nav-link" onclick="CargarContenido('estructuras.php?class=k&var=5&b=19','container')">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Boca de Visita</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link" onclick="CargarContenido('estructuras.php?class=k&var=5&b=20','container')">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Colector</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link" onclick="CargarContenido('estructuras.php?class=k&var=5&b=21','container')">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Marginal</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link" onclick="CargarContenido('estructuras.php?class=k&var=5&b=22','container')">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Tubería de Impulsión</p>
                      </a> 
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link" onclick="CargarContenido('estructuras.php?class=k&var=5&b=23','container')">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Descarga Submarina</p>
                      </a> 
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link" onclick="CargarContenido('estructuras.php?class=k&var=5&b=24','container')">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Laguna de Oxidación</p>
                      </a> 
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link" onclick="CargarContenido('estructuras.php?class=k&var=5&b=33','container')">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Planta Tratamiento AS</p>
                      </a>
                    </li> -->
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fa fa-clone fa-lg" aria-hidden="true"></i>
                <p>Servicios Complementarios</p>
                <i class="right fas fa-angle-left"></i>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fa fa-arrows-alt fa-lg" aria-hidden="true"></i>
                    <p>
                      Proceso de Distribucion
                    </p>
                    <i class="right fas fa-angle-left"></i>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="#" class="nav-link" onclick="CargarContenido('estructuras.php?class=k&var=3&b=10','container')">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Ciclo de Distribución</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link" onclick="CargarContenido('estructuras.php?class=k&var=3&b=11','container')">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Plan de Abastecimiento</p>
                      </a>
                    </li>
                    <!-- <li class="nav-item">
                      <a href="#" class="nav-link" onclick="">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Plan de Maniobras</p>
                      </a>
                    </li> -->
                  </ul>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <!-- <li class="nav-item">
                  <a href="#" class="nav-link" onclick="">
                    <i class="nav-icon far fa-circle text-info"></i>
                    <p>Líneas de Transmisión</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link" onclick="">
                    <i class="nav-icon far fa-circle text-info"></i>
                    <p>Subestaciones Eléctricas</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link" onclick="">
                    <i class="nav-icon far fa-circle text-info"></i>
                    <p>Circuitos</p>
                  </a>
                </li> -->
              </ul>
            </li>
          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fa fa-calendar-plus-o fa-lg" aria-hidden="true"></i>
                <p>
                  Servicios Auxiliares
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <!-- <li class="nav-item">
                  <a href="#" class="nav-link" onclick="">
                    <i class="nav-icon far fa-circle text-info"></i>
                    <p>Anillo de Seguridad</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link" onclick="">
                    <i class="nav-icon far fa-circle text-info"></i>
                    <p>Telecomunicaciones</p>
                  </a>
                </li> -->
                <li class="nav-item">
                  <a href="#" class="nav-link" onclick="CargarContenido('estructuras.php?class=k&var=3&b=100','container')">
                    <i class="nav-icon far fa-circle text-info"></i>
                    <p>Organizaciones Populares</p>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fa fa-podcast fa-lg" aria-hidden="true"></i>
                <p>
                  Otros
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fa fa-cubes fa-lg" aria-hidden="true"></i>
                    <p>
                      Almacen
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="#" class="nav-link" onclick="CargarContenido('estructuras.php?class=k&var=3&b=54','container')">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Registrar Categorìas</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link" onclick="CargarContenido('estructuras.php?class=k&var=3&b=55','container')">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Registrar Material</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link" onclick="CargarContenido('estructuras.php?class=k&var=3&b=56','container')">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Órdenes de Entrega</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link" onclick="CargarContenido('estructuras.php?class=k&var=3&b=57','container')">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Solicitud de Material</p>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link" onclick="CargarContenido('estructuras.php?class=k&var=7&it=2','container')">
                    <i class="nav-icon far fa-circle text-info"></i>
                    <p>Averías</p>
                  </a>
                </li>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa fa-bar-chart fa-lg" aria-hidden="true"></i>
                  <p>
                    Comerciales
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link" onclick="CargarContenido('estructuras.php?class=k&var=3&b=58','container')">
                      <i class="nav-icon far fa-circle text-info"></i>
                      <p>Registrar Tipo de Suscripción</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link" onclick="CargarContenido('estructuras.php?class=k&var=3&b=59','container')">
                      <i class="nav-icon far fa-circle text-info"></i>
                      <p>Registrar Suscriptores</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa fa-car fa-lg" aria-hidden="true"></i>
                  <p>
                    Flota Vehicular
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link" onclick="CargarContenido('estructuras.php?class=k&var=3&b=101','container')">
                      <i class="nav-icon far fa-circle text-info"></i>
                      <p>Registrar Maquinaria</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="fa fa-sitemap fa-lg" aria-hidden="true"></i>
          <p>DIAGRAMA ESCADA</p>
          <i class="right fas fa-angle-left"></i>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="#" class="nav-link" onclick="CargarContenido('procesos_averias.php?class=k&var=9&true=new','container')">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Procesos de Aducción</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link" onclick="CargarContenido('procesos_averias.php?class=k&var=10&true=new','container')">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Procesos de Distribución</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="fa fa-lightbulb-o fa-lg" aria-hidden="true"></i>
          <p>
            SOLUCIONES HÍDRICAS
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="#" class="nav-link" onclick="CargarContenido('estructuras.php?class=k&var=3&b=62','container')">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Crear Planes</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link" onclick="CargarContenido('estructuras.php?class=k&var=3&b=64','container')">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Listar Planes</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link" onclick="CargarContenido('estructuras.php?class=k&var=3&b=63','container')">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Añadir Obras a Planes</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link" onclick="CargarContenido('estructuras.php?class=k&var=3&b=60','container')">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Registrar Obras</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link" onclick="CargarContenido('estructuras.php?class=k&var=3&b=61','container')">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Listar Obras</p>
            </a>
          </li>

        </ul>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link" onclick="">
          <i class="fa fa-life-ring fa-lg" aria-hidden="true"></i>
          <p>
            MEDICIÓN
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="#" class="nav-link" onclick="">
              <i class="fa fa-calculator fa-lg" aria-hidden="true"></i>
              <p>
                Parámetros
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link" onclick="CargarContenido('procesos.php?class=k&var=1&fuente=2','container')">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Embalses</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link" onclick="CargarContenido('procesos.php?class=k&var=1&fuente=3','container')">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Dique Toma</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link" onclick="CargarContenido('procesos.php?class=k&var=1&fuente=5','container')">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Pozos Profundos</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link" onclick="">
                  <i class="nav-icon fas fa-table"></i>
                  <p>
                    Estaciones de Bombeo
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link" onclick="CargarContenido('procesos.php?class=k&var=2&fuente=8','container')">
                      <i class="nav-icon far fa-circle text-info"></i>
                      <p>E.B Conducción</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link" onclick="CargarContenido('procesos.php?class=k&var=3&fuente=1','container')">
                      <i class="nav-icon far fa-circle text-info"></i>
                      <p>E.B Distribución</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link" onclick="CargarContenido('procesos.php?class=k&var=5&fuente=18','container')">
                      <i class="nav-icon far fa-circle text-info"></i>
                      <p>E.B Saneamiento</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link" onclick="CargarContenido('procesos.php?class=k&var=4&fuente=36','container')">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Plantas Potabilizadoras</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="javascript:void(0)" class="nav-link">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Listar Clientes Comerciales</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="javascript:void(0)" class="nav-link">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Generar Facturación</p>
                </a>
              </li> -->
            </ul>
          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link" onclick="">
                <i class="fa fa-tasks fa-lg" aria-hidden="true"></i>
                <p>
                  Incidencias
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link" onclick="CargarContenido('procesos_averias.php?class=k&var=1&fuente=2','container')">
                    <i class="nav-icon far fa-circle text-info"></i>
                    <p>Embalses</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link" onclick="CargarContenido('procesos_averias.php?class=k&var=1&fuente=3','container')">
                    <i class="nav-icon far fa-circle text-info"></i>
                    <p>Dique Toma</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link" onclick="CargarContenido('procesos_averias.php?class=k&var=1&fuente=5','container')">
                    <i class="nav-icon far fa-circle text-info"></i>
                    <p>Pozos Profundos</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="#" class="nav-link" onclick="">
                    <i class="nav-icon fas fa-table"></i>
                    <p>
                      Estaciones de Bombeo
                      <i class="fas fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="#" class="nav-link" onclick="CargarContenido('procesos_averias.php?class=k&var=2&fuente=8','container')">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>E.B Conducción</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link" onclick="CargarContenido('procesos_averias.php?class=k&var=3&fuente=1','container')">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>E.B Distribución</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link" onclick="CargarContenido('procesos_averias.php?class=k&var=5&fuente=18','container')">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>E.B Saneamiento</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link" onclick="CargarContenido('procesos_averias.php?class=k&var=4&fuente=36','container')">
                    <i class="nav-icon far fa-circle text-info"></i>
                    <p>Plantas Potabilizadoras</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link" onclick="CargarContenido('procesos_averias.php?class=k&var=6','container')">
                    <i class="nav-icon far fa-circle text-info"></i>
                    <p>Afectaciones Eléctricas</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link" onclick="CargarContenido('procesos_averias.php?class=k&var=8','container')">
                    <i class="nav-icon far fa-circle text-info"></i>
                    <p>FLota Vehicular</p>
                  </a>
                </li>
              </ul>
            </li></ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link" onclick="">
                  <i class="fa fa-refresh fa-lg" aria-hidden="true"></i>
                  <p>
                    Actualizaciones
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link" onclick="CargarContenido('procesos.php?class=k&var=8','container')">
                      <i class="nav-icon far fa-circle text-info"></i>
                      <p>Plan Cisterna</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link" onclick="CargarContenido('procesos_averias.php?class=k&var=7&it=1','container')">
                      <i class="nav-icon far fa-circle text-info"></i>
                      <p>Cierre de Averías</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link" onclick="CargarContenido('procesos_averias.php?class=k&var=11','container')">
                      <i class="nav-icon far fa-circle text-info"></i>
                      <p>Plan de Abastecimiento</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link" onclick="CargarContenido('procesos_averias.php?class=k&var=12','container')">
                      <i class="nav-icon far fa-circle text-info"></i>
                      <p>Seguimiento de Plan Ab</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="#" class="nav-link" onclick="">
                      <i class="nav-icon fas fa-table"></i>
                      <p>
                        Fortalecimiento P.P.
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="#" class="nav-link" onclick="CargarContenido('procesos.php?class=k&var=6','container')">
                          <i class="nav-icon far fa-circle text-info"></i>
                          <p>Organizaciones Populares</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link" onclick="CargarContenido('procesos.php?class=k&var=7','container')">
                          <i class="nav-icon far fa-circle text-info"></i>
                          <p>BRIPPAS</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link" onclick="">
                      <i class="nav-icon fas fa-table"></i>
                      <p>
                        Comerciales
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <!-- <li class="nav-item">
                        <a href="#" class="nav-link" onclick="CargarContenido('','container')">
                          <i class="nav-icon far fa-circle text-info"></i>
                          <p>Listado Suscriptores</p>
                        </a>
                      </li> -->
                      <li class="nav-item">
                        <a href="#" class="nav-link" onclick="CargarContenido('procesos.php?class=k&var=9','container')">
                          <i class="nav-icon far fa-circle text-info"></i>
                          <p>Actualizar Cobranza</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  SEGUIMIENTO Y CONTROL
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link" onclick="CargarContenido('','container')">
                    <i class="nav-icon far fa-circle text-info"></i>
                    <p>Plan Operativo(P.O.A)</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link" onclick="CargarContenido('','container')">
                    <i class="nav-icon far fa-circle text-info"></i>
                    <p>Alcances</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link" onclick="">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  REPORTES
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link" onclick="CargarContenido('reports.php?rp=1','container')">
                    <i class="nav-icon far fa-circle text-info"></i>
                    <p>Historico Indicadores</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link" onclick="CargarContenido('reports.php?rp=2','container')">
                    <i class="nav-icon far fa-circle text-info"></i>
                    <p>Historico Incidencias</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link" onclick="CargarContenido('reports.php?rp=3','container')">
                    <i class="nav-icon far fa-circle text-info"></i>
                    <p>Ubicación Geograficas</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link" onclick="CargarContenido('situacional/principal.php','container')">
                    <i class="nav-icon far fa-circle text-info"></i>
                    <p>Sala Situacional</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link" onclick="CargarContenido('reports.php?rp=6','container')">
                    <i class="nav-icon far fa-circle text-info"></i>
                    <p>Reporte Carga PPT</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link" onclick="CargarContenido('reports.php?rp=5','container')">
                    <i class="nav-icon far fa-circle text-info"></i>
                    <p>Comerciales</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link" onclick="">
                    <i class="nav-icon fas fa-columns"></i>
                    <p>
                      Plan Abastecimiento
                      <i class="fas fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="#" class="nav-link" onclick="CargarContenido('reports.php?rp=7','container')">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Sectores</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link" onclick="CargarContenido('reports.php?rp=8','container')">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Status de Entrega</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link" onclick="">
                    <i class="nav-icon fas fa-columns"></i>
                    <p>
                      Almacen
                      <i class="fas fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="#" class="nav-link" onclick="CargarContenido('reports.php?rp=10','container')">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Materiales</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link" onclick="CargarContenido('reports.php?rp=9','container')">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Ordenes de Entrega</p>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
          </li>
        </ul>
      </li>
    </ul>
    <li class="nav-item">
      <a href="salir.php" class="nav-link">
        <i class="fa fa-arrow-circle-left" aria-hidden="true"></i>
        <p>Salir Del Sistema</p>
      </a>
    </li>

  </nav>



</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">SIGO</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">INICIO</a></li>
            <li class="breadcrumb-item active">VISTA PRINCIPAL</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          @yield('home')
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
  <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
  All rights reserved.
  <div class="float-right d-none d-sm-inline-block">
    <b>Version</b> 3.2.0
  </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('js/pages/dashboard.js')}}"></script>
</body>
</html>
