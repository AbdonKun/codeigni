<?php defined('BASEPATH') OR exit('No direct script access allowed');
// if(!@$this->user) redirect ('welcome/login');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Rs Computacion</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/";?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/";?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/";?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/";?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/";?>dist/css/skins/_all-skins.min.css">



  <!-- Google Font -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/";?>https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="<?php echo base_url()."index.php/externos";?>" class="navbar-brand"><b>Casa</b>Moneda</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">

            <li class="active">
            	<a href="<?php echo base_url()."index.php/externos";?>">Buscar Folios 
            		<span class="sr-only"></span>
            	</a></li>
            <li class="active">
            	<a href="<?php echo base_url()."index.php/externos2";?>">Listar Folios
            		<span class="sr-only"></span>
            	</a></li>

            </li>
     
          </ul>
         <!--  <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
            </div>
          </form> -->
        </div>


        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">

            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="<?php echo base_url()."assets/";?>#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <img src="<?php echo base_url()."assets/";?>dist/img/avatar04.png" class="user-image" alt="User Image">
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs">Rs Computacion</span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <img src="<?php echo base_url()."assets/";?>dist/img/avatar04.png" class="img-circle" alt="User Image">

                  <p>
                    Abdon Sandoval - Web Developer
                    <small>Rs Computacion</small>
                  </p>
                </li>
            
                </li>


                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="<?php echo base_url()."assets/";?>#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">


                    <a href="<?php echo site_url('welcome/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>


                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
<!--       <section class="content-header">
        <h1>
          Top Navigation
          <small>Example 2.0</small>
        </h1>

        <ol class="breadcrumb">
          <li><a href="<?php echo base_url()."assets/";?>#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="<?php echo base_url()."assets/";?>#">Layout</a></li>
          <li class="active">Top Navigation</li>
        </ol>
      </section> -->

      <!-- Main content -->
  

      <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Busqueda</h3>
				      <div class="box-tools pull-right">
		            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    		        </div>
                </div>
                <div class="box-body">
    	          <div class="row">
    	            <div class="col-md-6">
    	              <div class="form-group">
    	                <label for="inputEmail3" class="col-sm-2 control-label">Producto</label>

                      <div class="col-sm-10">
    	                <select class="form-control" style="width: 100%;">
    	                  <option selected="selected">Licencia de Conducir</option>
    	                  <option>Licencias Otros</option>
    	                  <option>Datos de Licencias</option>
    	                  <!-- <option>Delaware</option>
    	                  <option>Tennessee</option>
    	                  <option>Texas</option>
    	                  <option>Washington</option> -->
    	                </select>
    	              </div>
    	            </div>
                </br>
                  <div class="form-group">
                  <label  class="col-sm-2 control-label">Folio</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="folio" placeholder="Folio">
                  </div>
                </div>
                </br>
                <div class="form-group">
                  <label  class="col-sm-2 control-label">Factura</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="factura" placeholder="Factura">
                  </div>
                </div>
                </br>
                 <div class="box-footer">
                <button type="submit" class="btn btn-default">Busqueda</button>

                <!-- <button type="submit" class="btn btn-info pull-right">Sign in</button> -->
              </div>
    	          </div>

    	        </div>
    	      </div>
            <div class="form-group">
	              <label>Resultado</label>
	              <textarea class="form-control" width="100" heigh="50" rows="9" placeholder="
	              Folio consultado : 8903501
	              Municipalidad: Municipalidad de San Fernando
	              N° Factura : 227242
	              Fecha factura: 02-03-2010
	              Cantidad de Folios asociados a Factura: 2.000
	              Rango de Folios asociados a Factura: 8903501 / 8905500"></textarea>
              </div>
             


          </div>

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        <b>Version</b> 1.0.0
      </div>
      <strong>Copyright &copy; 2017 <a href="http://rscomputacion.cl">RS Computación</a>.</strong>
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url()."assets/";?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url()."assets/";?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url()."assets/";?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url()."assets/";?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()."assets/";?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()."assets/";?>dist/js/demo.js"></script>
</body>
</html>

