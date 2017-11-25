<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SGAC-Sistema Gerenciador de Acesso de condominio</title>
	<link rel="shortcut icon" type="image/x-png" href="img/acesso.png"> <!--ICONE TITTLE PAGINA -->	
				<!-- Bootstrap CSS -->
				<!-- versao compiladae minificada do CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
	<!-- versao compilada e minificada do FONT AWESOME -->
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">	

			<!-- biblioteca jQuery  -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	
			<!-- JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
          
</head>			
	<body background="img/fundo_index.png">
	
	<?php/*PARA FAZER LIGAÇÃO COM O TEMPLATE ESSE 2 CAMPOS ABAIXOS SÓ OBRIGATORIOS*/
	<?php require_once 'funcao.php'; ?>
	<?php include(CABECALHO_TEMPLATE); ?>
	<?php/*-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.*/
	?>
<div class="container-fluid">
	<label><h2>Cadastro de Veiculo</h2></label>
<hr>
<form method="POST" action="">
<div class="col-sm-12">
	<div class="row">
		<div class="col-sm-2">
			<label>PLACA:</label><p>
			<input type="text" class="form-control" name="cadveiculo_placa" placeholder="AAC-8001">			
		</div>
	</div>
		<div class="row">
			<div class="col-md-2">			
				<label>TIPO VEICULO:</label><p>
				<select class="form-control " id="slct_tipVeiculo" name="TipoVeiculo">
					<option value="">ESCOLHA</option>
					<option value="Carro">Carro</option>
					<option value="Moto">Moto</option>
				</select>		
			</div>
		</div>

		<div class="row">	
			<div class="col-md-3">
				<label>FABRICANTE/MARCA:</label><p>
				<input type="text" class="form-control" name="cadveiculo_fabr_carro"  placeholder="volkswagen">
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<label>MODELO:</label><p>
				<input class="form-control" type="text" name="cadveiculo_modelo" placeholder="CrossFox">
			</div>
		</div>
		<div class="col-md-2">
			<div class="row">	
				<label>COR:</label><p>
				<input type="text" class="form-control" name="cadveiculo_cor" placeholder="Preto">
			</div>
		</div>
	</div>
</div>

</div>
</form>
	</body>

</html>
