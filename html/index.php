<html lang="pt-br">
<head>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>SGAC-Sistema Gerenciador de Acesso de condominio</title>
			<link rel="shortcut icon" type="image/x-png" href="img/acesso.png"> <!--ICONE TITTLE PAGINA -->
				<!-- Bootstrap CSS -->
				<!-- versao compiladae minificada do CSS -->
    <link href="estilo.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
	<!-- versao compiladae minificada do FONT AWESOME -->
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	

			<!-- biblioteca jQuery  -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
			<!-- JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
          
</head>			
<body background="img/fundo_index.png ">
	<?php require_once 'funcao.php'; ?>
	<?php /*require_once DBAPI; */?>
	<?php include(CABECALHO_TEMPLATE); ?>
		
		<div class ="container">
			<h1>Home</h1>
			<hr/>		
			<?php /*if ($db) :*/ ?>		
			<h3>Cadastros</h3>
			<div class="col-md-10">
				<div class="row">
					<div class="col-xs-6 col-sm-2 col-xs-2">
						<a href="cadvisitas.php" class="btn btn-primary">
							<div class="row">
								<div class="col-xs-12 text-center">
									<i class="fa fa-plus fa-5x"></i>
								</div>
								<div class="col-xs-12 text-center">	
									<p>Nova visita</p>	
								</div>
							</div>
						</a>
					</div>
					<div class="col-xs-6 col-sm-3 col-md-2">
						<a href="cadveiculo.php" class="btn btn-default">
							<div class="row">
								<div class="col-xs-12 text-center">
									<i class="fa fa-car fa-5x"></i>
								</div>
								<div class="col-xs-12 text-center">	
									<p>Veiculos</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-xs-6 col-sm-3 col-md-2">
						<a href="cadfuncionario.php" class="btn btn-default">
							<div class="row">
								<div class="col-xs-12 text-center">
									<i class="fa fa-users fa-5x"></i>
								</div>
								<div class="col-xs-12 text-center">	
									<p>Fucionarios</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-xs-6 col-sm-3 col-md-2">
						<a href="cadmorador.php" class="btn btn-default">
							<div class="row">
								<div class="col-xs-12 text-center">
									<i class="fa fa-street-view fa-5x"></i>
								</div>
								<div class="col-xs-12 text-center">	
									<p>Moradores</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-xs-6 col-sm-3 col-md-2">
						<a href="cadfestas.php" class="btn btn-default">
							<div class="row">
								<div class="col-xs-12 text-center">
									<i class="fa fa-calendar-plus-o fa-5x"></i>
								</div>
								<div class="col-xs-12 text-center">	
									<p>Reservas festas</p>
								</div>
							</div>
						</a>
					</div>
				</div>
				<hr>
					<label><h3>Visualizar</h3></label>
					
					<div class="row">
					<div class="col-xs-6 col-sm-3 col-md-2">
						<a href="wwwwww" class="btn btn-default">
							<div class="row">
								<div class="col-xs-12 text-center">
									<i class="fa fa-unlock fa-5x"></i>
								</div>
								<div class="col-xs-12 text-center">	
									<p>Visitas Abertas</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-xs-6 col-sm-3 col-md-2">
						<a href="wwwwww" class="btn btn-default">
							<div class="row">
								<div class="col-xs-12 text-center">
									<i class="fa fa-lock fa-5x"></i>
								</div>
								<div class="col-xs-12 text-center">	
									<p>Visitas Saidas</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-xs-6 col-sm-3 col-md-2">
						<a href="wwwwww" class="btn btn-default">
							<div class="row">
								<div class="col-xs-12 text-center">
									<i class="fa fa-calendar-plus-o fa-5x"></i>
								</div>
								<div class="col-xs-12 text-center">	
									<p>Reservas festas</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-xs-6 col-sm-3 col-md-2">
						<a href="wwwwww" class="btn btn-default">
							<div class="row">
								<div class="col-xs-12 text-center">
									<i class="fa fa-street-view fa-5x"></i>
								</div>
								<div class="col-xs-12 text-center">	
									<p>Moradores</p>
								</div>
							</div>
						</a>
					</div>
				

				</div>
				</div>
			</div>
							
				<?php /*else : ?>
					<div class="alert alert-danger" role="alert">
						<p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
						<p>RODAR O SCRIPT DENTRO DA PASTA SQL</p>
					</div>		
				<?php /*endif;*/ ?>
		
		</div>		
				
			
</body>
</html>
