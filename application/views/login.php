<html >
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title>Demo Menu + Login </title>
    <base href="<?php echo base_url();?>" />
    <link type="text/css" href="<?php echo base_url();?>/assets/menu/menu.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!-- set javascript base_url -->
    <Script type="text/javascript">
        <![CDATA[
        var base_url = '<?php echo base_url();?>';
        ]]>
    </Script>
    <Script type="text/javascript" src="<?php echo base_url();?>/assets/menu/jquery.js"></Script>
    <Script type="text/javascript" src="<?php echo base_url();?>/assets/menu/menu.js"></Script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	

	<?php if(@$error_login): ?>
		Error en el usuario o contrase&ntilde;a.
		<br />
	<?php endif; ?>

	<?php echo @validation_errors(); ?>


</head>
	<body>

	<br />

<form class="container" method="post">
	<h1>Inicia sesi&oacute;n</h1>
</br>
	<div class="row">
		<div class="col-md-3 mb-3">
			<label for="exampleDropdownFormEmail2">Usuario</label>
			<input type="text" class="form-control"  name="username" placeholder="Usuario" value="<?php echo @$_POST['username']; ?>"/>
			<!-- <br /> -->
		</div>
	</div>
	<div class="row">
		<div class="col-md-3 mb-3">
			<label for="exampleDropdownFormEmail2">Clave</label>
			<input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo @$_POST['password']; ?>" />
			<!-- <br /> -->
		</div>
	</div>
		<input type="submit" class="btn btn-primary" value="Iniciar sesi&oacute;n">
</form>

</body>
</html>