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
    <title>Agregar</title>

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
            <h2>Registrar respuestas &raquo; Agregar </h2>
            <hr />

            <?php
			if(isset($_POST['add'])){
				//$ID_registro     = mysqli_real_escape_string($con,(strip_tags($_POST["ID_registro"],ENT_QUOTES)));//Escanpando caracteres 
				$respuesta		     = mysqli_real_escape_string($con,(strip_tags($_POST["respuesta"],ENT_QUOTES)));//Escanpando caracteres 
				//$ocupacion	     = mysqli_real_escape_string($con,(strip_tags($_POST["ocupacion"],ENT_QUOTES)));//Escanpando caracteres 
				$ID_pregunta	 = mysqli_real_escape_string($con,(strip_tags($_POST["Nacionalidad"],ENT_QUOTES)));//Escanpando caracteres 
				//$cantidad	     = mysqli_real_escape_string($con,(strip_tags($_POST["cantidad"],ENT_QUOTES)));//Escanpando caracteres 
				//$mes      	     = mysqli_real_escape_string($con,(strip_tags($_POST["mes"],ENT_QUOTES)));//Escanpando caracteres 
				//$ID_area		 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_area"],ENT_QUOTES)));//Escanpando caracteres 
				//$tipo_persona	 = mysqli_real_escape_string($con,(strip_tags($_POST["tipo_persona"],ENT_QUOTES)));//Escanpando caracteres 
				
			

				$cek = mysqli_query($con, "SELECT * FROM respuesta WHERE ID_respuesta='$ID_registro'");
				if(mysqli_num_rows($cek) == 0){
						$insert = mysqli_query($con, "INSERT INTO respuesta(respuesta,ID_pregunta)
															VALUES('$respuesta','$ID_pregunta')") or die(mysqli_error());
						if($insert){
							echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Bien hecho! Los datos han sido guardados con éxito.</div>';
						header("Location: index.php");
						}else{
							echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error. No se pudo guardar los datos !</div>';
						}
					 
				}else{
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error. código existe!</div>';
				}
			}


			?>

            <form class="form-horizontal" action="" method="post">

                <div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <?php		
								$sql = mysqli_query($con, "SELECT * FROM preguntas Where ID_pregunta = '1'");
								while($fila=$sql->fetch_array()){
									echo " <option value = '".$fila['ID_pregunta']."'>"."1. ".$fila['pregunta']. "</option>";
								}
							?>
                        </div>

                        <label class="col-sm-3 control-label">Respuesta</label>
                        <div class="col-sm-3">
                            <select class="form-control">
                                <?php		
								$sql = mysqli_query($con, "SELECT * FROM respuesta Where ID_pregunta = '1'");
								while($fila=$sql->fetch_array()){
									echo " <option value = '".$fila['ID_pregunta']."'>".$fila['respuesta']. "</option>";
								}
							?>
                            </select>
                        </div>
                    </div>
                </div>

				<div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <?php		
								$sql = mysqli_query($con, "SELECT * FROM preguntas Where ID_pregunta = '2'");
								while($fila=$sql->fetch_array()){
									echo " <option value = '".$fila['ID_pregunta']."'>"."2. ".$fila['pregunta']. "</option>";
								}
							?>
                        </div>

                        <label class="col-sm-3 control-label">Respuesta</label>
                        <div class="col-sm-3">
                            <select class="form-control">
                                <?php		
								$sql = mysqli_query($con, "SELECT * FROM respuesta Where ID_pregunta = '1'");
								while($fila=$sql->fetch_array()){
									echo " <option value = '".$fila['ID_pregunta']."'>".$fila['respuesta']. "</option>";
								}
							?>
                            </select>
                        </div>
                    </div>
                </div>

				<div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <?php		
								$sql = mysqli_query($con, "SELECT * FROM preguntas Where ID_pregunta = '3'");
								while($fila=$sql->fetch_array()){
									echo " <option value = '".$fila['ID_pregunta']."'>"."3. ".$fila['pregunta']. "</option>";
								}
							?>
                        </div>

                        <label class="col-sm-3 control-label">Respuesta</label>
                        <div class="col-sm-3">
                            <select class="form-control">
                                <?php		
								$sql = mysqli_query($con, "SELECT * FROM respuesta Where ID_pregunta = '3'");
								while($fila=$sql->fetch_array()){
									echo " <option value = '".$fila['ID_pregunta']."'>".$fila['respuesta']. "</option>";
								}
							?>
                            </select>
                        </div>
                    </div>
                </div>

				<div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <?php		
								$sql = mysqli_query($con, "SELECT * FROM preguntas Where ID_pregunta = '4'");
								while($fila=$sql->fetch_array()){
									echo " <option value = '".$fila['ID_pregunta']."'>"."4. ".$fila['pregunta']. "</option>";
								}
							?>
                        </div>

                        <label class="col-sm-3 control-label">Respuesta</label>
                        <div class="col-sm-3">
                            <select class="form-control">
                                <?php		
								$sql = mysqli_query($con, "SELECT * FROM respuesta Where ID_pregunta = '4'");
								while($fila=$sql->fetch_array()){
									echo " <option value = '".$fila['ID_pregunta']."'>".$fila['respuesta']. "</option>";
								}
							?>
                            </select>
                        </div>
                    </div>
                </div>

				
				<div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <?php		
								$sql = mysqli_query($con, "SELECT * FROM preguntas Where ID_pregunta = '5'");
								while($fila=$sql->fetch_array()){
									echo " <option value = '".$fila['ID_pregunta']."'>"."5. ".$fila['pregunta']. "</option>";
								}
							?>
                        </div>

                        <label class="col-sm-3 control-label">Respuesta</label>
                        <div class="col-sm-3">
                            <select class="form-control">
                                <?php		
								$sql = mysqli_query($con, "SELECT * FROM respuesta Where ID_pregunta = '5'");
								while($fila=$sql->fetch_array()){
									echo " <option value = '".$fila['ID_pregunta']."'>".$fila['respuesta']. "</option>";
								}
							?>
                            </select>
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-3 control-label">&nbsp;</label>
                    <div class="col-sm-6">
                        <input type="submit" name="add" class="btn btn-sm btn-primary" value="Guardar datos">
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