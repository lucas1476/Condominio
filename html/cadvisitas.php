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
	   	  	
		<h2><label id="_titulapaginaindex">Cadastro de Visitas</label></h2>
			
		 <hr>
    		<!--GRID DE FORMULARIO COM TAMANHO 12 -->
   		<div class="col-xs-12">
    		<form action="#" method="post">
				<!--DENTRO DA GRID DE 12 TENHO A GRID DE TAMANHO
				8...PARA FECHAR O TAMANHO DE 12 FALTA 4 QUE VAI
				SER UTILIZADO PELA IMAGEM DO CLIENTE -->	
		
				<div class="col-xs-8">

								<!-- DIV CPF E img LUPA -->
					<div class="row">
						<div class="col-lg-3">
							<label id="lbl_CPF">CPF:</label>
							<input type="text" class="form-control" id="inp_CPF" placeholder="094.241.419-90" name="cpf" required="">
						</div>					
						<br>			
						<div class="col-lg-1">
							<input type="image" src="https://cdn4.iconfinder.com/data/icons/greicons-2/1052/LUPA-128.png" width="35" height="35" >
						</div>
					</div>
							<!--DIV NOME -->
					<div class="row">
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
							<label id="lbl_PLACACARRO">PLACA AUTOMO.:</label>
							<input type="text" class="form-control" name="placaCarro" id="ipt_PLACAAUTOM">
						</div>
						<div class="col-lg-3">
							<label id="lbl_MODCARRO">MODELO CARRO:</label>
							<input type="text" class="form-control" name="marcaCarro" id="ipt_MODCARRO">
						</div>

					</div>
							<!--LINha data chegada, dependes, depen.menos 18,hora saida -->
					<div class="row">
						<div class="col-lg-4">
							<label id="lbl_DATACHEGADA">DATA/HORA CHEGADA:</label>
							<input type="datetime-local" class="form-control" id="ipt_datachegada" name="datachegada" required="">
						</div>
						<div class="col-lg-2">
							<label id="lbl_ADULTOS">ADULTOS:</label>
								<select class="form-control" id="slct_Adultos" name="numAdultos" required>
									<option value="">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
								</select>	
						</div>
						<div class="col-lg-2">
							<label id="lbl_MENOS18">MENOR 18:</label>
								<select class="form-control" name="numCriancas" id="slct_Menor18">
									<option value="">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
								</select>
						</div>
						
					 </div>


				 				<!-- CAMPO DE OBSERVAÇÃO-->
					 <div class="row">
					 	<div class="col-xs-12">
					 		<label id="lbl_OBS">OBS:</label>
					 		<textarea rows="3" class="form-control" name="observ" placeholder="EX: Visitando Carlos Aparecido morador do bloco 7 apartamento 12."></textarea>		
					 	</div>				 	
					 </div>

							<!--DIV DO CAMPO BOTAO Enviar dados -->
					 <div class="row">
					 	<div class="col-xs-3">			 							
							<BR>
							<button type="submit" class="btn btn-primary" name="send" >
							ENVIAR DADOS</button>				
					 	</div>
					 			<!--DIV DO CAMPO BOTAO Limpar tela -->
					 	<div class="col-xs-3">
					 		<br>
					 		<button type="reset" class="btn btn-warning">LIMPAR TELA</button>
					 	</div>
					 </div>
					 
					 <div class="row">
					 	<hr>
					 	<?php
					 	if ( isset($_POST['send'])) {
					 					 	

					 	 echo "Nº CPF--> ";echo $_POST['cpf'];
					 		echo '<br>';
					 	echo "NOME VISITANTE-->"; echo $_POST['nomevistante'];
					 		echo '<br>';
					 	echo "TEL.FIXO-->"; echo $_POST['telfixo'];
					 		echo '<br>';
					 	echo "TEL.CELULAR-->"; echo $_POST['telcelular'];
					 		echo '<br>';
					 	echo "MARCA CARRO-->"; echo $_POST['marcaCarro'];
					 		echo '<br>';
					 	echo "PLACA CARRO-->"; echo $_POST['placaCarro'];
					 		echo '<br>';
					 	echo "DATA CHEGADA-->"; echo $_POST['datachegada'];
					 		echo '<br>';
					 	echo "Nº ADULTOS-->"; echo $_POST['numAdultos'];
					 		echo '<br>';
					 	echo "Nº CRIAÇAS-->"; echo $_POST['numCriancas'];
					 		echo '<br>';
					 	echo "DATA SAIDA-->"; echo $_POST['dataSaida'];
					 		echo '<br>';
					 	echo "OBSERVAÇÃO-->"; echo nl2br($_POST['observ']);

					 }

					 	 ?>
					 	
					 </div>
				 	
				</div>
			
						  <!--DIV imagem aonde vai a foto do cliente -->
				<div class="col-xs-4">
					<label>FOTO VISITANTE</label>
					<img class="img-thumbnail" width="300" height="300" src="img/cadastro.png" >
						<!--src="https://images.designtrends.com/wp-content/uploads/2016/02/20114835/Trendy-Camera-logo-design.jpg"-->
				</div>


				<script>
					function funcionAlterar(){
						alert("TEM CERTEZA QUE DESEJA ALTERAR ESSE REGISTRO?");
					}
					function functioExcluir(){
						confirm("TEM CERTEZA QUE DESEJA EXCLUIR ESSE REGISTRO?");
					}
				</script>
				<div class="row">
					
					<div class="col-xs-12">
						<label>VISITAS PENDENTES:</label>
						<div class="table-responsive"><!--table-responsive -->
							
							<table class="table table table-hover table-condensed" border="1"> 
								<!-- TABLE=cria a tabela estilo BOOTSTRAP
									TABLE-HOVER=cria um visual quando passsa o mouse em cima de cada celula da tabela
									TABLE-CONDENSED=agrupa a tabela para ficar mais "condençada" mais compactada -->
								<thead>
									<tr>
										<th>CPF</th>
										<th>NOME</th>
										<th>DATA CHEGADA</th>
										<th>NUM ADULTOS</th>
										<th>NUM CRIANÇAS</th>
										<th>ALTERAR / EXCLUIR</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>025.135.228-01</td>
										<td>Guilherme Arantes</td>
										<td>22/02/2017 19:20</td>
										<td>2</td>
										<td>1</td>
										<td><a href="" class="btn btn-sm btn-warning">
											<i class="fa fa-pencil"></i> Editar</a>	
											<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-customer="">
											<i class="fa fa-trash-o"></i> Excluir</a>
										</td>
									</tr>
									<tr>
										<td>582.158.369-00</td>
										<td>João Carneiro</td>
										<td>12/08/2017 19:20</td>
										<td>5</td>
										<td>1</td>
										<td><a href="" class="btn btn-sm btn-warning">
											<i class="fa fa-pencil"></i> Editar</a>	
											<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-customer="">
											<i class="fa fa-trash-o"></i> Excluir</a>
										</td>
									</tr>
									<tr>
										<td>874.219.588-65</td>
										<td>Paulo Custódio</td>
										<td>04/03/2017 19:20</td>
										<td>7</td>
										<td>1</td>
										<td><a href="" class="btn btn-sm btn-warning">
											<i class="fa fa-pencil"></i> Editar</a>	
											<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-customer="">
											<i class="fa fa-trash-o"></i> Excluir</a>
										</td>
									</tr>
									<tr>
										<td>965.521.000-88</td>
										<td>Cecília Pádua</td>
										<td>08/09/2017 19:20</td>
										<td>4</td>
										<td>5</td>
										<td><a href="" class="btn btn-sm btn-warning">
											<i class="fa fa-pencil"></i> Editar</a>	
											<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-customer="">
											<i class="fa fa-trash-o"></i> Excluir</a>
										</td>
									</tr>
									<tr>
										<td>752.159.002-14</td>
										<td>Francisco Moreno</td>
										<td>15/03/2017 19:20</td>
										<td>9</td>
										<td>3</td>
										<td><a href="" class="btn btn-sm btn-warning">
											<i class="fa fa-pencil"></i> Editar</a>	
											<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-customer="">
											<i class="fa fa-trash-o"></i> Excluir</a>
										</td>
									</tr>
									<tr>
										<td>452.365.888-85</td>
										<td>Maria Souza</td>
										<td>22/11/2017 19:20</td>
										<td>12</td>
										<td>2</td>
										<td><!--<input type="button" class="btn-primary btn-xs" onclick="funcionAlterar()" name="btnAlterar" value="ALTERAR">-->
											<a href="" class="btn btn-sm btn-warning">
												<i class="fa fa-pencil"></i> Editar</a>	
											<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-customer="">
												<i class="fa fa-trash-o"></i> Excluir</a>
										</td>
									</tr>

								</tbody>
							</table>
						</div>
					</div>
				</div>

			</div>
		</div>

	</form>
			
		 
		 
    
    </div>
    </body>
<html>