<!DOCTYPE html>
<html>
<head>
<link id="favicon" rel="shortcut icon" href="img\return-home-button-png-7.png" type="image/png">
	<title>Oficina</title>
	<meta charset="utf-8">

<?php 

require_once "backend/banc.php";

session_start();


#verificando se o indice existe!
if (isset($_POST['send'])) {
	
	#arrays de erros
	$erros= array();

	#recebendo os dados!
	$usuario = mysqli_escape_string($conect, $_POST['usuario']);
	$senha = mysqli_escape_string($conect, $_POST['senha']);

	#verificando se os campos estão vazios!
	if (empty($usuario) or empty($senha)) {
		
		$erros[]="<span style='color:#ffc18c; font-size:18px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;> Os campos usuário e senha precisam ser preechidos!</span>";

	}else{

		#verificando se o usuario existe!
		$sql="SELECT usuario FROM login WHERE usuario = '$usuario' ";
		$resultado= mysqli_query($conect, $sql);
		

		if (mysqli_num_rows($resultado) > 0) {
			$senha=md5($senha);

			$sql= "SELECT usuario,senha FROM login WHERE usuario= '123456'  AND senha ='jorge'";
			$resultado = mysqli_query($conect, $sql);
			

			if (mysqli_num_rows($resultado) == 1) {

				$dados=mysqli_fetch_array($resultado);
				$_SESSION['logado'] = true;
				$_SESSION['id_user'] = $dados['id'];
				echo "Seja bemvindo!";
				header('Location:home.php');
			}else {
				
				$erros[]="<span style='color:#ffc18c;font-size:18px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;> Usuário e senha não conferem!!</span>";
		}
		

			}else {
				
				$erros[]="<span style='color:#ffc18c;font-size:18px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;> Usuário inexistente!</span>";
			}
}
}
 ?>

	<link rel="stylesheet" type="text/css" href="css/ind.css">

<style type="text/css">
	
	*{
			margin:0;
			padding:0;
		}

		body{
		width:100%; user-select: none; 
        font-weight: normal;   

  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none;

			background-color:#377796;
		}



#magic{ 
			background-color: #377796;text-align:center;
    
    min-height: 240px;
		}
		
		#ok{

	font-family: "IcoMoon";
    font-size: 220px;
    color: #fff;
    content: "a";
    float: left;
    margin-right: 20px;
    margin-bottom: 10px;
    background-color: #666;
    overflow: hidden;
    height: 240px;
    width: 240px;
    line-height: 1;
    text-align: center;


		}

	.ok input{
 
	}

	.ok input[type="text"]{

		width:264px;
		height:39px;
		background-color:#eee;
		border-radius:5px;
		transition:999s;
		line-height:65px;
		border:none;
		font-size:12pt;
padding:0 9px;
		
	}

	.ok input[type="password"]{

		width:264px;
		height:39px;
		background-color:#eee;
		border-radius:5px;
		transition:999s;
		border:none;
		font-size:15pt;

padding:0 9px;

		
	}


	.ok input[type="submit"]{
 
		border-radius:3px;
		background-color:#2c312b9c;
		transition:999s;
		border:none; 
		color:white;
		transition:1s;
padding:11px 44px;margin-left:141px;
		
	}
 
	.ok input:hover[type="submit"]{

		background-color:#0000009c ;
		transition:1s;
		
	}.ok select{

		width:20%;
		height:33px;
		background-color:transparent;
		border:none;
		color:#eee;
		transition:1s;
		margin-left:40%;
		font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;

		
	}.ok select option{
background-color:#eee;
color: white;
		
	}

	.ok span{

		line-height:60px;
		font-weight:15px;
		color:white;
		font-size: 16px;
		font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;

	}

	.ok h1{ 
		line-height:60px;
		font-size:29px;
		font-weight:normal;
		letter-spacing: -1px;
		color: white;
		font-family: "Open Sans Light","Segoe UI Light","Segoe UI",sans-serif;

	}
	 #img{
        width:4em; 
        height:4em; 
      }
</style>


</head>
<body>

	<div id="important" style="margin:7% auto;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:19px;">

	
	</div>

	<div id="magic">

	<div class="ok"> 
	 <img src="img/w-logo-white.png" id="img" title="Oficina Office">
		<h1>Bem-vindo</h1> <br><?php 
// Copyright (C) Tech Brains Corporation. All rights reserved.
// Use of this source code is governed by a BSD-style license that can be
// found in the LICENSE file.
 #*
 #* This source code is licensed under the Tech Brains
 #* LICENSE file in the root directory of this source tree
#verificando se a variável $erros não esta vazia!
if (!empty($erros)) {
	
	#percorrendo o array
	foreach ($erros as $say) {
		
		#exibindo mensagens de erros no array!
		echo $say ."<br>";
	}
}
?>
			<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">

	
			<span style="margin-left:-219px; font-size:19px; line-height:47px;">Usuário</span><br><input type="text" name="usuario"><br><br>

	 	<span style=" margin-left:-231px;font-size:19px;line-height:31px;">Senha</span><br> <input type="password" name="senha"> <br>
			<label style=" margin-left:-199px;font-size:17px;line-height:55px;color:#fff">Fucionário</label>
			 
			<br> 
			<input type="submit" name="send" value="Entrar">

			</form>
			
		</div>
		
	</div>

</body>
</html>