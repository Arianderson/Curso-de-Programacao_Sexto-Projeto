<html>
<head>
	<title>Empresa | Telefonica</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-color: #820AD1">					
<!--Conteudo de condição...-->
 <div>
	 <div style="width: 600px; height: 200px; background-color:#f0f0f0; color: #AB4BEA; ; margin: auto; border-radius:3px; font-family:Comic Sans MS;">

	
	<?php 
		$login = $_POST['usuario'];
		$senha = $_POST['password'];

		if ($login == 'arianderson'){
			if ($senha == '1'){
				header("location: home.php?login=$login&senha=$senha");
			}else{
					header("location: index.php");
					exit();}
			}
				elseif($login == 'luiz'){
				if($senha=='2'){
					header("location: home.php?login=$login&senha=$senha");
				}else{
					header("location: index.php");
					exit();}	
			}
			elseif($login == 'daniel'){
				if($senha == '3'){					
					header("location: home.php?login=$login&senha=$senha");
				}else{
						header("location:index.php");
					exit();}
			}
			elseif($login == 'douglas'){
				if($senha == '4'){				
					header("location: home.php?login=$login&senha=$senha");
				}else{
						header("location: index.php");
					exit();}
				}else{
					header("location: index.php");
					exit();}	
	?>
	</div>
<!--fim do codigo por enquanto...-->
</div> 
</body>
</html>
