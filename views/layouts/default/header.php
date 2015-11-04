<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <!-- BASICS -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Frameword Basico MVC: <?php if(isset($this->titulo)) { echo $this->titulo; } ?></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="<?php echo $_layoutParams["ruta_css"]; ?>style.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $_layoutParams["ruta_css"]; ?>isotope.css" media="screen" />
	<link rel="stylesheet" href="<?php echo $_layoutParams["ruta_css"]; ?>fancybox/jquery.fancybox.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php echo $_layoutParams["ruta_css"]; ?>bootstrap.css">
	<link rel="stylesheet" href="<?php echo $_layoutParams["ruta_css"]; ?>bootstrap-theme.css">
	<link rel="stylesheet" href="<?php echo $_layoutParams["ruta_css"]; ?>responsive-slider.css" >
	<link rel="stylesheet" href="<?php echo $_layoutParams["ruta_css"]; ?>animate.css">
  <link rel="stylesheet" href="<?php echo $_layoutParams["ruta_css"]; ?>style.css">
  <link rel="styleindex" href="<?php echo $_layoutParams["ruta_css"]; ?>styleindex.css">
  <link rel="stylesheet" href="<?php echo $_layoutParams["ruta_css"]; ?>font-awesome.min.css">
  
</head>
<body>
	
<div class="header">
    <section id="header" class="appear">
      <div class="navbar navbar-fixed-top" role="navigation" data-0="line-height:100px; height:100px; background-color:rgba(0,0,0,0.3);" data-300="line-height:60px; height:60px; background-color:rgba(0,0,0,1);">
				<div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="fa fa-bars color-white"></span>
          </button>
          <h1><a class="navbar-brand" href="#services" data-0="line-height:90px;" data-300="line-height:50px;">Mercado de servicios</a></h1>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
            <li class="active"><a href="<?php echo APP_URL; ?>paginas/index">Inicio de pagina</a></li>
             <li class="active"><a href="<?php echo APP_URL; ?>usuarios/login">iniciar secion</a></li>
						<li><a href="<?php echo APP_URL; ?>usuarios/funcion">Como funcniona</a></li>
            <li><a href="<?php echo APP_URL; ?>usuarios/registro">Registro</a></li>
						<li><a href="<?php echo APP_URL; ?>usuarios/busqueda">Busqueda</a></li>
						<li><a href="<?php echo APP_URL; ?>usuarios/acerca">Acerca de</a></li>
						<li><a href="<?php echo APP_URL; ?>usuarios/ayuda">Ayuda</a></li>
					</ul>
        </div><!--/.navbar-collapse -->
			</div>
    </section>
  </div>