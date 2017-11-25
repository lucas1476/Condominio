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
		<!--DIV DO LAYOUT QUE FAZ O CONTORNO EM TADA A TELA -->
    <div class="container-fluid">

		<!--CABEÇALHO DA PAGINA -->
	   	  	
		<h2><label >Cadastro de Morador</label></h2>
			
		 <hr>
    		<!--GRID DE FORMULARIO COM TAMANHO 12 -->
   		<div class="col-xs-12">
    		<form action="#" method="post">
				<!--DENTRO DA GRID DE 12 TENHO A GRID DE TAMANHO
				8...PARA FECHAR O TAMANHO DE 12 FALTA 4 QUE VAI
				SER UTILIZADO PELA IMAGEM DO CLIENTE -->	
		
				<div class="col-xs-12">

								<!-- DIV CPF E img LUPA -->
					<div class="row">
						<div class="col-lg-3">
							<label id="lbl_CPF">CPF:</label>
							<input type="text" class="form-control" id="inp_CPF" placeholder="094.241.419-90" name="cpf" required="">
						</div>					
							
							<!--DIV NOME -->
					
						<div class="col-lg-12">
							<label id="lbl_NOME">NOME:</label>
							<input type="text" class="form-control" id="ipt_NOME" placeholder="Nome Completo" name="nomevistante" required=""> 
						</div>
					</div>
				


							<!--DIV TEL FIXO,CELULAR MODELO CARRO E PLACA-->
					<div class="row">
						<div class="col-lg-3">
							<label id="lbl_TELFIXO">TEL.FIXO:</label>
							<input type="text" class="form-control" name="telfixo" id="ipt_TELFIXO">
						</div>
						<div class="col-lg-3">
							<label id="lbl_TELCELULAR">CELULAR:</label>
							<input type="text" class="form-control" name="telcelular" id="ipt_CELULAR">
						</div>
						<div class="col-lg-3">
							<label id="lbl_PLACACARRO">BLOCO:</label>
							<input type="text" class="form-control" name="placaCarro" id="ipt_PLACAAUTOM">
						</div>
						<div class="col-lg-3">
							<label id="lbl_MODCARRO">APARTAMENTO:</label>
							<input type="text" class="form-control" name="marcaCarro" id="ipt_MODCARRO">
						</div>

					</div>
							<!--LINha data chegada, dependes, depen.menos 18,hora saida -->
					<div class="row">
						<div class="col-lg-2">
							<label id="lbl_DATACHEGADA">DATA MUDANÇA:</label>
							<input type="datetime-local" class="form-control" id="ipt_datachegada" name="datachegada" required="">
						</div>						
					 </div>

							<!--DIV DO CAMPO BOTAO Enviar dados -->
					 <div class="row">
					 	<div class="col-xs-3">				
							<BR>
							<button type="submit" class="btn btn-primary" name="send" >
							ENVIAR DADOS</button>				
					 	</div>
					 	
					 </div>
					 				
					 <hr>
					 				
			</div>
		</div>

	</form> 
    
    </div>
    </body>
<html>