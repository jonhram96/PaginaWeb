<?php 
	$server="localhost";
	$user="id8127264_root";
	$password="administrador";
	$dbname="id8127264_videoclub";

	$conexion=mysqli_connect($server, $user, $password, $dbname);
		
	
	//$id=$_POST["num1"];	
	$nombre=$_POST["num2"];
	$director=$_POST["num3"];
	$actor=$_POST["num4"];
	$ano=$_POST["num5"];
	
	if(!$conexion){
		die("Error:" .mysqli_connect_error());
	}
	else
	{
		$query="INSERT INTO peliculas VALUES ('', '$nombre', '$director', '$actor', '$ano')";		
	}
?>
	

<html> 
	<head> 	
		<link rel="stylesheet" href="css/pagina.css">
		<META HTTP-EQUIV="REFRESH" CONTENT="1;URL=https://cineutcj.000webhostapp.com"> 
	</head>

	<body>
		<header id="main-header">			
			<a id="logo-header" href="index.php">
				<span class="site-name">VideoClub </span>		</a> 
			<nav>
				<ul>
					<li><a href="Index.php">Inicio</a></li>
					<li><a href="#">peliculas</a></li> 
					<li><a href="#">Series</a></li>
					<li><a href="#">Buscar</a></li>
				</ul>
			</nav>
		</header>
		<section id="main-content">
			<article>
				<div class="content">
					<?php
						if(mysqli_query($conexion, $query))
						{
							echo "Registro guardado";
						}
						else
						{
							echo "Error: " . $query . "<br>" . mysqli_error($conexion);
						}
						mysqli_close($conexion);
					?>	
				</div>			
			</article> 
		</section> 
	</body>
	<footer id="main-footer">
		<p>&copy; 2018 VideoClub </p>
	</footer> 
</html>