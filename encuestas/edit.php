<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
<!--
Project      : Datos de empleados con PHP, MySQLi y Bootstrap CRUD  (Create, read, Update, Delete) 
Author		 : Obed Alvarado
Website		 : http://www.obedalvarado.pw
Blog         : http://obedalvarado.pw/blog/
Email	 	 : info@obedalvarado.pw
-->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Datos de empleados</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-datepicker.css" rel="stylesheet">
	<link href="css/style_nav.css" rel="stylesheet">
	<style>
		.content {
			margin-top: 80px;
		}
	</style>
	
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<?php include("nav.php");?>
	</nav>
	<div class="container">
		<div class="content">
			<h2>Datos de los visitantes &raquo; Editar datos</h2>
			<hr />
			
			<?php
			// escaping, additionally removing everything that could be (html/javascript-) code
			$nik = mysqli_real_escape_string($con,(strip_tags($_GET["nik"],ENT_QUOTES)));
			$sql = mysqli_query($con, "SELECT * FROM registro_datos_visitantes WHERE ID_registro='$nik'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: index.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			if(isset($_POST['save'])){
				//$codigo		     = mysqli_real_escape_string($con,(strip_tags($_POST["codigo"],ENT_QUOTES)));//Escanpando caracteres 
				$tipo_persona		     = mysqli_real_escape_string($con,(strip_tags($_POST["tipo_persona"],ENT_QUOTES)));//Escanpando caracteres 
				$ID_area	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_area"],ENT_QUOTES)));//Escanpando caracteres 
				$mes	 = mysqli_real_escape_string($con,(strip_tags($_POST["mes"],ENT_QUOTES)));//Escanpando caracteres 
				$Nacionalidad	     = mysqli_real_escape_string($con,(strip_tags($_POST["Nacionalidad"],ENT_QUOTES)));//Escanpando caracteres 
				//$ocupacion		 = mysqli_real_escape_string($con,(strip_tags($_POST["ocupacion"],ENT_QUOTES)));//Escanpando caracteres 
				$año 	 = mysqli_real_escape_string($con,(strip_tags($_POST["año"],ENT_QUOTES)));//Escanpando caracteres 
				$cantidad			 = mysqli_real_escape_string($con,(strip_tags($_POST["cantidad"],ENT_QUOTES)));//Escanpando caracteres  
				
				$update = mysqli_query($con, "UPDATE registro_datos_visitantes SET ID_area='$ID_area', mes='$mes', Nacionalidad='$Nacionalidad', año='$año', cantidad='$cantidad', tipo_persona='$tipo_persona' WHERE ID_registro='$nik'") or die(mysqli_error());
				if($update){
					header("Location: edit.php?nik=".$nik."&pesan=sukses");
				}else{
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error, no se pudo guardar los datos.</div>';
				}
			}
			
			if(isset($_GET['pesan']) == 'sukses'){
				echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Los datos han sido guardados con éxito.</div>';
				header("Location: index.php");
			}
			?>
			<form class="form-horizontal" action="" method="post">
			<div class="form-group">
					<label class="col-sm-3 control-label">Area</label>
					<div class="col-sm-3">
						<select name="ID_area" class="form-control">
							<option value="">Seleccionar Area</option>
							<?php
							
							$sql = mysqli_query($con, "SELECT * FROM areas_protegidas");
							while($fila=$sql->fetch_array()){

							echo " <option value = '".$fila['ID_area']."'>".$fila['nombre']. "</option>";

							}

							?>
							
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">mes</label>
					<div class="col-sm-4">
						<input type="text" name="mes" value="<?php echo $row ['mes']; ?>" class="form-control" placeholder="mes" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Tipo de persona</label>
					<div class="col-sm-4">
						<input type="text" name="tipo_persona" value="<?php echo $row ['tipo_persona']; ?>" class="form-control" placeholder="tipo de persona" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Procedencia</label>
					<div class="col-sm-4">
						<input type="text" name="Nacionalidad" value="<?php echo $row ['Nacionalidad']; ?>" class="form-control" placeholder="Nacionalidad" required>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-3 control-label">Año</label>
					<div class="col-sm-3">
						<input type="text" name="año" value="<?php echo $row ['año']; ?>" class="form-control" placeholder="año" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Cantidad</label>
					<div class="col-sm-3">
						
						<input type="text" name="cantidad" value="<?php echo $row ['cantidad']; ?>" class="form-control" placeholder="cantidad" required>
					</div>
                    
				</div>
							
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit"   name="save" class="btn btn-sm btn-primary" value="Guardar datos">
						<a href="index.php" class="btn btn-sm btn-danger">Cancelar</a>
					</div>
				</div>
			</form>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
	$('.date').datepicker({
		format: 'dd-mm-yyyy',
	})
	</script>
</body>
</html>