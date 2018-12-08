<?php 
	$server="localhost";
	$user="id8127264_root";
	$password="administrador";
	$dbname="id8127264_videoclub";

	$conexion=mysqli_connect($server, $user, $password, $dbname);
?>

<!DOCTYPE html>

<html>
	<head>
		<title>FondosHD</title>		
	    <link rel="stylesheet" href="css/pagina.css">
	</head>
	
	<body>
		
		<header id="main-header">			
			<a id="logo-header" href="index.php">
				<span class="site-name">Wallpapers </span>		</a> 
			<nav>
				<ul>
					<li><a href="https://cineutcj.000webhostapp.com/index.php">Inicio</a></li>
					<li><a href="https://cineutcj.000webhostapp.com/peliculas.html">peliculas</a></li> 
				</ul>
			</nav>
		</header>
		<section id="main-content">
			<article>
				<div class="content">

					<form action ="Conexion.html" method="post">
						<p align="right">
							<input type = "submit" value = "Agregar" class="btnagregar" >
						</p>
						<table id="customers" style="width:100%" class="TB">
							<tr>
								<td>Numero de control </td>
								<td>Nombre </td>
								<td>Pelicula </td>
								<td>Descripcion</td>
								<td>A&ntilde;o</td>				
								<td>Borrar</td>
								<td>Actualizar</td>				
							</tr>
							
						<?php
							if(!$conexion){
								die("Error:" .mysqli_connect_error());
							}
							else
							{
								$query="SELECT * FROM peliculas";		
							}
							$resultado=mysqli_query($conexion, $query);
						
							if(mysqli_num_rows($resultado)>0)
							{	
								while ($row=mysqli_fetch_assoc($resultado))
								{			
						?>
								<tr>
									<td><?php echo $row["id"] ?> </td>
									<td><?php echo $row["nombre"] ?> </td>
									<td><?php echo $row["director"] ?> </td>
									<td><?php echo $row["actor"] ?> </td>
									<td><?php echo $row["ano"] ?> </td>						
									<td><a href='https://cineutcj.000webhostapp.com/Delete.php?id= <?php echo $row["id"];?>"'/>Borrar </a> </td>							
									<td><a href="https://cineutcj.000webhostapp.com/Actualizar.php?id= <?php echo $row["id"];?>"> Actualizar </a></td>								
								</tr>					
						<?php					
							}		
						}
						else
						{
							echo "0 registros";
						}
						mysqli_close($conexion);			
						?>			
						</table>	
					</form>						
				</div>	
   			</article> 
		</section> 
	</body>		
	<footer id="main-footer">
		<p>&copy; 2018 Wallpapers </p>
	</footer> 
	</body>
</html>