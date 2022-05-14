<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registro visitantes</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style_nav.css" rel="stylesheet">

	<style>
		.content {
			margin-top: 80px;
		}
	</style>

</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<?php include('nav.php');?>
	</nav>
	<div class="container">
		<div class="content">
			<h2>Lista de datos visitantes</h2>
			<hr />

			<?php
			if(isset($_GET['aksi']) == 'delete'){
				// escaping, additionally removing everything that could be (html/javascript-) code
				$nik = mysqli_real_escape_string($con,(strip_tags($_GET["nik"],ENT_QUOTES)));
				$cek = mysqli_query($con, "SELECT * FROM registro_datos_visitantes WHERE ID_registro='$nik'");
				if(mysqli_num_rows($cek) == 0){
					echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> No se encontraron datos.</div>';
				}else{
					$delete = mysqli_query($con, "DELETE FROM registro_datos_visitantes WHERE ID_registro='$nik'");
					if($delete){
						echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Datos eliminado correctamente.</div>';
					}else{
						echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Error, no se pudo eliminar los datos.</div>';
					}
				}
			}
			?>

			<form class="form-inline" method="get">
				<div class="form-group">
					<select name="filter" class="form-control" onchange="form.submit()">
						<option value="0">Filtrar por Area</option>
						<option value="todos">Mostrar todos</option>
						<?php $filter = (isset($_GET['filter']) ? strtolower($_GET['filter']) : NULL);  ?>
						<?php
							
							$sql = mysqli_query($con, "SELECT * FROM area_protegida");
							while($fila=$sql->fetch_array()){

							echo " <option value = '".$fila['ID_area']."'>".$fila['nombre']. "</option>";

							}

							?>	
					</select>
				</div>

				
			</form>

			<br />
			<div class="table-responsive">
			<table class="table table-striped table-hover">
				<tr>
                    <th>ID</th>
					<th>Area</th>
					<th>Mes</th>
					<th>Tipo de Persona</th>
                    <th>Procedencia</th>
                    <th>año</th>
					<th>cantidad</th>
					<th>Acciones</th>
					
				</tr>
			<?php
				if($filter){
					if($filter=="todos"){
						$sql = mysqli_query($con, "SELECT * FROM registro_datos_visitantes r INNER JOIN area_protegida a ON r.ID_area= a.ID_area ORDER BY r.mes ASC");
					} else{
					$sql = mysqli_query($con, "SELECT * FROM registro_datos_visitantes r INNER JOIN area_protegida a ON r.ID_area= a.ID_area WHERE a.ID_area='$filter' ORDER BY a.ID_area ASC");
					}
				}
				else{
					$sql = mysqli_query($con, "SELECT * FROM registro_datos_visitantes r INNER JOIN area_protegida a ON r.ID_area= a.ID_area ORDER BY r.mes ASC");
				}
				if(mysqli_num_rows($sql) == 0){
					echo '<tr><td colspan="8">No hay datos.</td></tr>';
				}else{
					
					while($row = mysqli_fetch_array($sql)){
						?>
						<tr>
							<td><?php echo $row['ID_registro'] ?></td>
							<td><?php echo $row['nombre'] ?></td>
							<td><?php echo $row['mes'] ?></td>
							<td><?php echo $row['tipo_persona'] ?></td>
							<td><?php echo $row['Nacionalidad'] ?></td>
							<td><?php echo $row['año'] ?></td>
							<td><?php echo $row['cantidad'] ?></td>
									
							                        
							<td>

								<a href="edit.php? nik= <?php echo $row['ID_registro'] ?>" title="Editar datos" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
								<a href="index.php?aksi=delete&nik=<?php echo $row['ID_registro'] ?>" title="Eliminar" onclick="return confirm(\'Esta seguro de borrar los datos '.$row['ID_area'].'?\')" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
							</td>
						</tr>
					<?php
					
					}
					 
				}
				?>
			</table>
			</div>
		</div>
	</div><center>
	<p>&copy; Registros <?php echo date("Y");?></p
		</center>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
