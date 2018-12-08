<?php 
	$server="localhost";
	$user="id8127264_root";
	$password="administrador";
	$dbname="id8127264_videoclub";

	$conexion=mysqli_connect($server, $user, $password, $dbname);
	
	$id = $_GET['id'];
?>
		
<!DOCTYPE html>

<html>
	<head>
		<title>Operaciones</title>
		<link rel="stylesheet" href="css/pagina.css">				
	</head>

	<header id="main-header">	
		<a id="logo-header" href="Index.php">
			<span class="site-name">VideoClub </span></a> 
		<nav>
			<ul>
				<li><a href="Index.php">Inicio</a></li>
				<li><a href="#">Wallpapers</a></li> 
				
			</ul>
		</nav>
	</header>
	
	<section id="main-content">
		<article>
			<div class="content">
				<body>
					<form action ="Update.php" method="post">		
						
					<?php
						if(!$conexion){
							die("Error:" .mysqli_connect_error());
						}
						else
						{
							$query="SELECT * FROM peliculas WHERE id='$id'";		
						}
						$resultado=mysqli_query($conexion, $query);
						if(mysqli_num_rows($resultado)>0)
						{		
							while ($row=mysqli_fetch_assoc($resultado))
							{
					?>	

								<label for="id" > Id: </label>
								<input type = "text" class="redondeado" readonly="readonly" name ="id" value="<?php echo $row["id"]; ?>"> <br>
									
								<label for="num2"> Nombre: </label>
								<input type = "text" name ="num2" class="redondeado" value="<?php echo $row["nombre"]; ?>"> <br>
											
								<label for="num3"> Director: </label>
								<input type = "text" name ="num3" class="redondeado" value="<?php echo $row["director"]; ?>"> <br>			
								
								<label for="num4"> Actor: </label>
								<input type = "text" name ="num4" class="redondeado" value="<?php echo $row["actor"]; ?>"> <br>
									
								<label for="num5"> A&ntilde;o: </label>
								<input type = "year" name ="num5" class="redondeado" value="<?php echo $row["ano"]; ?>"> <br>
								
								<input type = "submit" value = "Actualizar" class="btnagregar"/>
					<?php					
							}			
				}
				else
				{
					echo "0 registros";
				}
				mysqli_close($conexion);			
				?>			
					</form>	
				</body>	
			</div>	
		</article>
	</section> 
	
	<footer id="main-footer">
		<p>&copy; 2018 VideoClub </p>
	</footer> 
</html>
