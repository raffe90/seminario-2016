<!DOCTYPE html>
<!-- HTML5 Boilerplate -->
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="<?php echo LANGUAGE_CODE; ?>"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="<?php echo LANGUAGE_CODE; ?>"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="<?php echo LANGUAGE_CODE; ?>"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="<?php echo LANGUAGE_CODE; ?>"> <!--<![endif]-->
<head>

	<!-- Site meta -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Rafael Ramirez Urbina (www.fundaseth.es)">
  <meta name="designer" content="Rafael Ramirez Urbina (www.fundaseth.es)">
	<title><?php if($data['title'] != ''){echo $data['title'].' | '.SITETITLE;}else{echo SITETITLE.' | El trato hospitalario del futuro';} ?></title>
	<link rel="icon" type="image/png" href="img/favicon.png" />
	<meta name="description" content="El propósito del seminario es el de ofrecer a los asistentes la voz y la experiencia de unos ponentes de alta relevancia que de no ser por esta iniciativa difícilmente coincidirían en un único acto debido a sus saturadas agendas de trabajo.">

	<!-- CSS -->
	<?php
		helpers\assets::css(array(			
			'//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css',
			'//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css',
			'//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css',
			'//cdn.datatables.net/plug-ins/1.10.6/integration/bootstrap/3/dataTables.bootstrap.css',
			helpers\url::template_path() . 'css/custom.css'			
		))
	?>

</head>
<body>
	<div class="container-fluid">
		<header role="banner">
		<div id="logo-placeholder">
			<div class="container">
			  <a href="<?php echo DIR;?>"><img id="logo-seminario" src="<?php echo DIR;?>img/logoSeminario_<?php echo \helpers\session::get('language');?>.svg" alt="2do Seminario Internacional de Seguridad del Paciente y Excelencia Clínica"></a>
			</div>
		</div>
		<nav id="navbar-primary" class="navbar navbar-default" role="navigation">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">

		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-primary-collapse">
		        <span class="sr-only">Menú</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		    	<a class="navbar-brand" href="<?php echo DIR;?>"><img class="logo-seminario" src="<?php echo DIR;?>/img/logoLogin.svg"></a>
	      
		    </div>
		    <div class="collapse navbar-collapse" id="navbar-primary-collapse">
		      <ul class="nav navbar-nav">
		        <li <?php echo $data['isBienvenida'] ?>><a href="<?php echo DIR;?>"><?php echo \core\language::show('bienvenida', LANGUAGE_INDEX, \helpers\session::get('language')) ?></a></li>
		        <li <?php echo $data['isPrograma'] ?>><a href="<?php echo DIR;?>programa"><?php echo \core\language::show('programa', LANGUAGE_INDEX, \helpers\session::get('language')) ?></a></li>
		        <li <?php echo $data['isPonentes'] ?>><a href="<?php echo DIR;?>ponentes"><?php echo \core\language::show('ponentes', LANGUAGE_INDEX, \helpers\session::get('language')) ?></a></li>
		        <li <?php echo $data['isComo-llegar'] ?>><a href="<?php echo DIR;?>como-llegar"><?php echo \core\language::show('como_llegar', LANGUAGE_INDEX, \helpers\session::get('language')) ?></a></li>
		        <li <?php echo $data['isRegistro'] ?>><a href="<?php echo DIR;?>registro"><?php echo \core\language::show('inscripcion', LANGUAGE_INDEX, \helpers\session::get('language')) ?></a></li>
		        <li <?php echo $data['isPremio'] ?>><a href="<?php echo DIR;?>premio"><?php echo \core\language::show('premios', LANGUAGE_INDEX, \helpers\session::get('language')) ?></a></li>
		        <li style="display: none;"><a href="<?php echo DIR; ?>language"><?php echo \core\language::show('choose_language', LANGUAGE_INDEX, \helpers\session::get('language')) ?></a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
		</header><!-- header role="banner" -->
	</div><!-- container-fluid -->
<div class="container">
