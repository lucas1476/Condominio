<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>CONTROLE CONDOMINIO</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap.min.css">
    <style>
        body {
            padding-top: 50px;
            padding-bottom: 20px;
        }
    </style>
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
</head>
<body>
<?php
/*lembrar que a constante BASEURL foi definida no config.php, certo?!
Sempre que você for montar um link, você deve usar essa constante,
 já que ela guarda o endereço correto dessa nossa aplicação web no servidor.*/
   ?>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!--<a href="<?php echo BASEURL; ?>index.php" class="navbar-brand">Home</a>-->
          <a href="index.php" class="" style="background-color:#222222; ">
                            <div class="row">
                                <div class="col-xs-12 text-center">
                                    <i class="fa fa-home fa-2x" style="color: white;"></i>
                                </div>
                                <div class="col-xs-12 text-center"> 
                                    <p style="color: white;">Home</p>
                                </div>
                            </div>
                        </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">          
            <li class="dropdown">
                <a href="#" style="color: white;" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    Cadastro <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" >
				<li><a href="<?php echo BASEURL; ?>cadvisitas.php">Visitas</a></li>
                    <li><a href="<?php echo BASEURL; ?>cadfuncionario.php">Funcionarios</a></li>
                    <li><a href="<?php echo BASEURL; ?>cadmorador.php">Moradores</a></li>
					<li><a href="<?php echo BASEURL; ?>cadveiculo.php">Veiculos</a></li>
                    <li><a href="<?php echo BASEURL; ?>cadfestas.php">Reservas Festas</a></li>
					
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" style="color: white;" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    Visualizar <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                <li><a href="<?php echo BASEURL; ?>index.php">Registro de Visitas(entradas)</a></li>
                    <li><a href="<?php echo BASEURL; ?>index.php">Registro de Visitas(saidas) </a></li>
                    <li><a href="<?php echo BASEURL; ?>index.php">Reservas(salão festas) </a></li>
                    <li><a href="<?php echo BASEURL; ?>index.php">Moradores </a></li>
                   
                    
                </ul>
            </li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <main class="container">