<html>
<head>
	<title>Empresa | Telefonica</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-color: #820AD1">					
<!--Conteudo Ola...-->
 <div>
	 <div style="width: 600px; height: 200px; background-color:#f0f0f0; color: #AB4BEA; ; margin: auto; border-radius:3px; font-family:Comic Sans MS;">

	
		<?php 
		$usuario=$_GET['login'];
		$password=$_GET['senha'];
				
		echo '<h1>Olá, ' . $usuario .' sua senha é:</h1>';
			echo"<br />";
				echo '<div style="text-align: center; font-size: 30px;"><u>' . $password; echo '</u>'
		?>

	</div>
<!--fim do codigo por enquanto...-->
</div> 
</body>
</html>