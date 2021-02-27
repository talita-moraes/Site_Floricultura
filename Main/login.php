<!DOCTYPE html>
<html lang = "pt-br">
<head>
	<meta charset = "UTF-8"/>
	<title>LOGIN - FLORES & SHOP </title>
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
	
	<div ALIGN = "center" class= "login">
	<table >
		<tr><td>
			
			<fieldset>
					<table cellspacing="10" >
						<tr>
							<td>Login:</td>
							<td align="left">
								<input type ="text" name="CPFLogin" size= "52" maxlength="20" placeholder="CPF" required="required" >
							</td>
						</tr>
						
						<tr>
							<td>Senha:</td>
							<td align="left">
								<input type ="text" name="senha" size= "52" maxlength="20" placeholder="******" required="required">
							</td>
						</tr>
						
						<tr>
							<td></td>
							<td>
								<table cellspacing="3" ALIGN = "right" >
									<td>
										<form action="formularioLogin.php" method="post">
											<input type="submit" name="submit" value="Enviar">
										</form>
									</td>
									
								</table>
							</td>
						</tr>
					</table>
				
				<form action="cadastro.php" method="get">
					<input  type="submit" value="Cadastrar">
				</form>					
			</fieldset>
			
		</td></tr>
	</table>
	
	<table cellspacing="10" ALIGN = "center" >			
		<tr background= "imagens/foto1.png" alt="Marca"  >
			<td align = "left">
				<span style="padding-left:10px"></span>	
			</td>
			<td align = "left"  background= "imagens/foto1 - copia.png" width="10000px" >
				<br></br>
					<p> <span style="padding-left:10px"></span>	</p>
				<br></br>
			</td>
			<td  align = "right">
				<span style="padding-left:10px"></span>	
			</td>
		</tr>
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
