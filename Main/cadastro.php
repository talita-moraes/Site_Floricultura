<!DOCTYPE html>
<html lang = "pt-br">
<head>
	<meta charset = "UTF-8"/>
	<title>CADASTRO - FLORES & SHOP </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" href="imagens/icon.png">
</head>
<body>	
	<header id="cabecario" >
		<hgroup id="logo">
			</br>
			<h5>(81)4002-8922</h5>
			<h5>Av. Norte, 369, Recife, PE </h5>
			<h5>Segunda a Sábado das 8h ás 18h.</h5>
			<img src= "imagens/logo.png" id ="logo">
		</hgroup>
	
		<div id="contato" align="right" >
			<a href="https://www.facebook.com/flor&shop" target="_blank"><img src= "imagens/icon1.png" ></a>
			<a href="https://www.path.com/hflor&shop" target="_blank"><img src= "imagens/icon2.png" ></a>
			<a href="https://twitter.com/flor&shop" target="_blank"><img src= "imagens/icon3.png" ></a>
			<a href="https://www.instagram.com/?hl=pt-br/flor&shop" target="_blank"><img src= "imagens/icon4.png" ></a>
		
		</div>
	
		<fieldset id="login">
			<B><a href="cadastro.php">CADASTRO </a> | <a href="login.php">LOGIN</a></b>
		</fieldset>
		
		<div class="destaque" align="center">
			<hr class="menu" >
			<nav id="menu" align="center">
				<ul >
					<li><a href="index.html" >Home</a></li>
					<li><a href="empresa.html">Nossa Visão</a></li>
					<li><a href="loja.html">Jardim</a></li>
					<li><a href="contato.php">Contato</a></li>
				</ul>	
			</nav>
		</div>
	</header>
	
	<div class="login">			
		<h2><FONT SIZE = "5"> Cadastro </FONT></h2>
		<h2><I> Preencha o Formulario: </i></h2>	
			
			<fieldset>
				<legend><B><FONT SIZE = "4" > Dados Pessoais</FONT></b></legend>
					<table cellspacing="10">
						<tr>
							
							<td>
								<label for="nome">Nome Completo : </label>
							</td>
							<td align="left">
								<input type ="text" name="nome" size= "100%" required="required" pattern="[a-z\s]+$" >
							</td>
						<tr>
						<tr>
							<td>
								<label for="sexo">Sexo :</label>
							</td>
							<td>
								<table>
									<td align="left">
										<input type="radio" name="sexo">Feminino <input type="radio" name="sexo">Masculino
									</td>
									<td>
										<label for="cpf"><span style="padding-left:98px"> CPF/<B>Login</b> :</label>
										<input type="text" name="cpf" size="46%" maxlength="11" required="required" pattern="[a-z\s]+$">
									</td>
								</table>
							</td>
						</tr>
						<tr>
							<td>
								<label for="endereco">Endereço : </label>
							</td>
							<td >
								<table>
									<td>
										<input type="text" name="endereco" size="35%">
									</td>
									<td>
										<label for="estado"> Estado :  </label><span style="padding-left:29px">
										<select name="estado"> 
										<option value = "--">Selecione uma opcao</option>
										<option value="ac">Acre</option> 
										<option value="al">Alagoas</option> 
										<option value="am">Amazonas</option> 
										<option value="ap">Amapá</option> 
										<option value="ba">Bahia</option> 
										<option value="ce">Ceará</option> 
										<option value="df">Distrito Federal</option> 
										<option value="es">Espírito Santo</option> 
										<option value="go">Goiás</option> 
										<option value="ma">Maranhão</option> 
										<option value="mt">Mato Grosso</option> 
										<option value="ms">Mato Grosso do Sul</option> 
										<option value="mg">Minas Gerais</option> 
										<option value="pa">Pará</option> 
										<option value="pb">Paraíba</option> 
										<option value="pr">Paraná</option> 
										<option value="pe">Pernambuco</option> 
										<option value="pi">Piauí</option> 
										<option value="rj">Rio de Janeiro</option> 
										<option value="rn">Rio Grande do Norte</option> 
										<option value="ro">Rondônia</option> 
										<option value="rs">Rio Grande do Sul</option> 
										<option value="rr">Roraima</option> 
										<option value="sc">Santa Catarina</option> 
										<option value="se">Sergipe</option> 
										<option value="sp">São Paulo</option> 
										<option value="to">Tocantins</option> 
									</td>	
								</table>
							<td>
						</tr>
						<tr>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								<legend><B><FONT SIZE = "3" >Contato</FONT></b></legend>
							</td>
							<td><td>
						</tr>
							
						<tr>
							<td>
								<label for="email"> E-mail : </label>
							</td>
							<td>
								<table>
									<td>	
										<input type="text" name="email" size= "49">
									</td>
									<td>
										<label for="telefone"> Telefone : </label>
									</td>
									<td>
										<input type="text" name="telefone" size= "34" maxlength="11">
									</td>
								</table>
						</tr>
						<tr>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								<legend><B><FONT SIZE = "3" > Login</FONT></b></legend>
							</td>
							<td></td>
						</tr>
						<tr>
							<td>
								<label for="senha">Senha: </label>
							</td>
							<td>
								<input type="text" name="senha" size= "49" required="required" pattern="[a-z\s]+$" >
							</td>
						</tr>
						<tr>
							<td>
								<label for="confirma">Confirmar a Senha: </label>
							</td>
							<td>
								<input type="text" name="confirma" size= "49" required="required" pattern="[a-z\s]+$" >
							</td>
						</tr>
					</table>
			</fieldset>
			
					<table cellspacing="10" align = "center">
						<td>		
							<form action="login.html" method="get">
								<input  type="submit" value="Salvar">
								
							</form>
						</td>
						<td>
							<form action="cadastro.php" method="get">
								<input  type="submit" value="Limpar">
							</form>
						</td>
						<td>
							<form action="index.html" method="get">
								<input  type="submit" value="Home">
							</form>
						</td>
					</table>
		</div>
		
	<footer >	
		<table align="center" id="rodape">
			<tr>
				<td >	
					TalitaFlores@site.com
				</td>
				<td>
					<hr class="linhavertical"> 
				</td>
				<td>
					<address> Macaxeira, Recife - PE </address>
				</td>
				<td>
					<hr class="linhavertical"> 
				</td>
				<td>
					Tel: (81) 34002-8922</br>
				</td>
			</tr>
		</table>
	</footer> 
	</br>
	
</body>
</html>	