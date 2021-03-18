<?php 

//include_once "includes/header.php";
 //require_once "dependencias.php";
$var=34;

session_start();

//if (!empty($_SESSION['usuario'])) {
  # code...

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="../images/favicon.ico" type="image/ico" />

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" type="text/css" href="../../librerias/alertifyjs/css/alertify.css">
<link rel="stylesheet" type="text/css" href="../../librerias/alertifyjs/css/themes/default.css">
<!--<link rel="stylesheet" type="text/css" href="../librerias/bootstrap/css/bootstrap.css">-->
<link rel="stylesheet" type="text/css" href="../../librerias/select2/css/select2.css">
<link rel="stylesheet" type="text/css" href="../../css/menu.css">

    <title> PAR-CO </title>

    <!-- Bootstrap -->
    <link href="../../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  
    <!-- bootstrap-progressbar -->
    <link href="../../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-car"></i> <span>| PAR-CO |</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="../images/img4.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenido</span>
                <h2><?php  //echo $_SESSION['usuario'];?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="index.php"><i class="fa fa-home"></i> INICIO <span class="fa"></span></a>
                  <!--  <ul class="nav child_menu">
                      <li><a href="index.html">Dashboard</a></li>
                      <li><a href="index2.html">Dashboard2</a></li>
                      <li><a href="index3.html">Dashboard3</a></li>
                    </ul> -->
                  </li>
                  <li><a><i class="fa fa-money"></i> VENTA <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href=" ventas/PruebaVenta.php">Crear Venta</a></li>
                      <li><a href="form_advanced.html">Modificar Venta</a></li>
                      <li><a href="form_validation.html">Borrar Venta</a></li>
                      <li><a href="crearApartado.php">Crear Aparado</a></li>
                      <li><a href="form_upload.html">Modificar Apartado</a></li>
                      <li><a href="form_buttons.html">Liberar Apartado</a></li>
                      <li><a href="form_buttons.html">Liquidar Apartado</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-users"></i> CLIENTE <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="devclient.php">Alta Ciente</a></li>
                      <li><a href="modclient.php">Modificación Cliente</a></li>
                      <li><a href="busclient.php">Consulta Cliente</a></li>
                      <li><a href="borrarclient.php">Borrar Cliente</a></li>
                    </ul>
                  </li> 
                  <li><a><i class="fa fa-table"></i> INVENTARIO <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="devprod.php">Alta Producto</a></li>
                      <li><a href="modprod.php">Modificar Producto</a></li>
                      <li><a href="#">Borrar Producto</a></li>
                      <li><a href="busprod.php">Consultar Producto</a></li>                                        
                    </ul>
                  </li>
                  <li><a><i class="fa fa-pencil"></i> GESTIONAR <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="devuser.php">Crear Usuario</a></li>
                      <li><a href="moduser.php">Modificar Usuario</a></li>
                      <li><a href="borraruser.php">Borrar Usuario</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i>REPORTES <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="fixed_sidebar.html">Tiempo Existencia Por Artículo</a></li>
                      <li><a href="fixed_footer.html">Ventas</a></li>
                      <li><a href="fixed_footer.html">Costos</a></li>
                      <li><a href="fixed_footer.html">Utilidad ADI</a></li>
                    </ul>
                  </li>
                </ul>
              </div>                      
                    </ul>
                  </li>  
                      
                    </ul>
                  </li>
                  
                    
                     
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">     
                    
                            
              <a data-toggle="tooltip" data-placement="top" title="Cerrar Sesión" href="logout.php">
                <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="../images/img4.jpg" alt=""><?php // echo $_SESSION['usuario'];?>
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="javascript:;"> Perfil</a>
                      <a  href="javascript:;">
                        <span ></span>
                        <span></span>
                      </a>
                  <a></a>
                    <a class="dropdown-item"  href="logout.php"><i class="fa fa-sign-out pull-right"></i> Cerrar Sesión</a>
                  </div>
                </li>


              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
          <div class="right_col" role="main">
          <!-- top tiles -->
          <div  style="display: inline-block;" >

          <div >
           <!-- <div   tile_stats_count">
              <span ><i ></i> </span>
              
              <span ><i  </i></span>
            </div>-->
                        
          <!-- /top tiles -->
<!-- Aqui abajo poner la imagen de la empresa 
        <img src="images/img4.jpg" alt="..." class="img-circle profile_img">-->

  



      

                     
                  <div class="clearfix"></div>
          <div class="container">
     <h1>Agregar la venta</h1>
     <div class="row">



     </div>
     <div class="row">
      <div>
        <div id="ventaProductos "class="col-md-12">
          <div class="container-fluid">
        <div class="row ">
            <div class="col-sm-6">
                <div class="card">
                <div class="card-body">
                  
                    <form>
                        <fieldset>
                            <legend>Datos del producto</legend>
                            <div class="mb-3">
                                <label for="ClienteSelect" class="form-label">Cliente</label>
                                <select id="ClienteSelect" class="form-select">
                                  <option value="cliente uno">Cliente uno</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="ProductoSelect" class="form-label">Producto</label>
                                <select id="ProductoSelect" class="form-select">
                                  <option value="producto uno">Producto uno</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="CantidadInput" class="form-label">Cantidad</label>
                                <input type="number" id="CantidadInput" class="form-control" placeholder="Unidad">
                            </div>
                            <div class="mb-3">
                                <label for="PrecioInput" class="form-label">Precio</label>
                                <input type="number" id="PrecioInput" class="form-control" placeholder="$ Precio">
                            </div>
                            <div class="mb-3">
                                <label for="DescripcionInput" class="form-label">Descripcion</label>
                                <textarea type="number" id="DescripcionInput" class="form-control" placeholder="...."></textarea>
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck">
                                    <label class="form-check-label" for="disabledFieldsetCheck">
                                      Confirmo
                                    </label>
                                </div>
                            </div>
                            <button type="submit" id="btnProducto"  class="btn btn-primary">Submit</button>
                        </fieldset>
                    </form>
                </div>
                </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Productos de la venta</h5>
                    <table class="table table-ligth table-striped">
                        <thead>
                            <tr>
                            <th>hola</th>
                            <th>hola2</th>
                            <th>hola3</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr class="table-active">
                              ...
                            </tr>
                            <tr>
                              ...
                            </tr>
                            <tr>
                              <th scope="row">3</th>
                              <td>Larry the Bird</td>
                              <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="#" class="btn btn-outline-dark">Go somewhere</a>
                </div>
              </div>
            </div>
        </div>
    </div>
        </div>
       <!-- <div id="ventasHechas"></div>-->
      </div>
     </div>
  </div>
</div>
                <!-- end of weather widget -->
              </div>
            </div>
          </div>
        </div>

        <!-- /page content -->




        <!-- footer content -->
        <footer>
          <div class="pull-right">
            AUTOPARTES - PAR-CO <a href="https://colorlib.com">PARTS CONNECTION</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

            <!-- jQuery -->
    <script src="../../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../../vendors/Flot/jquery.flot.js"></script>
    <script src="../../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../../vendors/moment/min/moment.min.js"></script>
    <script src="../../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../../build/js/custom.min.js"></script>
    <script src="../../librerias/jquery-3.2.1.min.js"></script>
    <script src="../../librerias/alertifyjs/alertify.js"></script>
    <script src="../../librerias/bootstrap/js/bootstrap.js"></script>
    <script src="../../librerias/select2/js/select2.js"></script>
    <script src="../../js/funciones.js"></script>

    <script type="text/javascript">
    $(document).ready(function(){
      $('#ventaProductosBtn').click(function(){
        esconderSeccionVenta();
        $('#ventaProductos').load('ventas.html');
        $('#ventaProductos').show();
      });
      $('#ventasHechasBtn').click(function(){
        esconderSeccionVenta();
        $('#ventasHechas').load('ventas/ventasyReportes.php');
        $('#ventasHechas').show();
      });
    });

    function esconderSeccionVenta(){
      $('#ventaProductos').hide();
      $('#ventasHechas').hide();
    }

  </script>
  <script src="../../js/funciones.js"></script>
  </body>
</html>