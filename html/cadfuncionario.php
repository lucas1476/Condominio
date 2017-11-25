<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> SGAC-Sistema Gerenciador de Acesso de condominio</title>
	<link rel="shortcut icon" type="image/x-png" href="img/acesso.png"> <!--ICONE TITTLE PAGINA -->	
				<!-- Bootstrap CSS -->
				<!-- versao compiladae minificada do CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
	<!-- versao compiladae minificada do FONT AWESOME -->
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
	<label><h2>Cadastro de Funcionarios</h2></label>
<hr>

	<div class="col-xs-12">

					<!-- DIV CPF  -->
		<div class="row">
			<div class="col-lg-3">
				<label id="lbl_doc">CPF:</label>
				<input type="text" class="form-control" id="inp_CPF" placeholder="094.241.419-90" name="cpf" required="">
			</div>				
		</div>

				<!--DIV NOME -->
		<div class="row">
			<div class="col-lg-12">
				<label id="lbl_NOME">NOME:</label>
				<input type="text" class="form-control" id="ipt_NOME" placeholder="Nome Completo" name="nomevistante" required=""> 
			</div>
		</div>

		<!--DIV CEP E BOTAO DE BUSCAR CEP -->
		<div class="row">
			<div class="col-lg-2">
				<label id="lbl_cep">CEP:</label>
				<input type="tex" class="form-control" id="ipt_cep" name="cep" required="" maxlength="10" placeholder="81130110">
			</div>	
			<br>	
			<div class="col-lg-1">
				<a href="NADA_DEFINIDO_AINDA">
					<img src="https://cdn4.iconfinder.com/data/icons/greicons-2/1052/LUPA-128.png" width="35" height="35" >
				</a>
			</div>
		</div>
					<!--DIV ENDEREÇO: BAIRRO, RUA, CEP,  -->
			
		<div class="row">
			<div class="col-lg-5">
				<label id="lbl_endereco">ENDEREÇO:</label>
				<input type="text" name="rua" class="form-control" id="ipt_rua" name="rua">	
			</div>
			<div class="col-lg-1">
				<label id="lbl_num">NUM.:</label>
				<input type="text" name="numerorua" id="inp_numrua" class="form-control">
			</div>
			<div class="col-lg-3">
				<label id="lbl_bairro">BAIRRO: </label>
				<input type="text" name="bairro" id="inp_bairro" class="form-control">
			</div>
			<div class="col-lg-3">
				<label id="lbl_cidade">CIDADE: </label>
				<input type="text" name="cidade" id="inp_cidade" class="form-control">
			</div>
		</div>				<!--DIV TEL FIXO,CELULAR E DATA NASCIMENTO-->
		<div class="row">
			<div class="col-lg-3">
				<label id="lbl_TELFIXO">DATA NASC:</label>
				<input type="date" class="form-control" name="dasnasc" id="ipt_datanasc">
			</div>
			<div class="col-lg-3">
				<label id="lbl_TELCELULAR">TEL FIXO:</label>
				<input type="text" class="form-control" name="telfixo" id="ipt_telfixo">
			</div>
			<div class="col-lg-3">
				<label id="lbl_PLACACARRO">CELULAR.:</label>
				<input type="text" class="form-control" name="telcelular" id="ipt_telcelular">
			</div>
		</div>		
	</div>

</body>
</html>