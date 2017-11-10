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
</head>

<body>
	<?php echo $this->user->username; ?><a href="<?php echo site_url('welcome/logout'); ?>">Salir</a>
			
	<div class="container">
		
		<nav class="navbar navbar-inverse"  role="navigation">
	   	<?php echo $this->dynamic_menu->build_menu('1') ?>
	   </nav>
	   </div>




</body>
</html>