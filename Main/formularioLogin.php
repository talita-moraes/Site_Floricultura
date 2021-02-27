<!DOCTYPE html>
<html lang = "pt-br">
<head>
	<meta charset = "UTF-8"/>
	<title>Verifica - FLORES & SHOP </title>
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
	
	<?php 
		$login = $_POST['CPFlogin'];
		$senha = $_POST['senha'];

		$mensagem_erro = "";
		$erro = 0;

		$hostname="localhost";
		$username="root";
		$password="";
		$dbname="floricultura";
		$usertable="Usuario";

		mysql_connect($hostname,$username, $password) or die ("<html><script language='JavaScript'>alert('Unable to connect to database! Please try again later.'),history.go(-1)</script></html>");
		mysql_select_db($dbname);


		
		print "<hr>";
		print "<h1> Verificação no banco: </h1> </br>";

		$query = "SELECT * FROM $usertable WHERE CPFLOGIN = '$login'  AND Senha = '$senha' ";
		$result = mysql_query($query) or die("erro ao selecionar");


		if(mysql_num_rows ($result) <= 0 ) {
			echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');</script>";
			  
			print(" Não Cadastrado</br></br></br>");
			print ("<a href='cadastro.php'>Cadastrar Aqui</a>");
		} else{
			print(" BEM VINDO");
		}

	?>
	
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