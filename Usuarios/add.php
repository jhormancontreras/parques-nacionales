<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar datos de los visitantes</title>

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
            <h2>Registrar de Datos de los Visitantes &raquo; Agregar Datos </h2>
            <hr />

            <?php
			if(isset($_POST['add'])){
				//$ID_registro     = mysqli_real_escape_string($con,(strip_tags($_POST["ID_registro"],ENT_QUOTES)));//Escanpando caracteres 
				$año 		     = mysqli_real_escape_string($con,(strip_tags($_POST["año"],ENT_QUOTES)));//Escanpando caracteres 
				//$ocupacion	     = mysqli_real_escape_string($con,(strip_tags($_POST["ocupacion"],ENT_QUOTES)));//Escanpando caracteres 
				$Nacionalidad	 = mysqli_real_escape_string($con,(strip_tags($_POST["Nacionalidad"],ENT_QUOTES)));//Escanpando caracteres 
				$cantidad	     = mysqli_real_escape_string($con,(strip_tags($_POST["cantidad"],ENT_QUOTES)));//Escanpando caracteres 
				$mes      	     = mysqli_real_escape_string($con,(strip_tags($_POST["mes"],ENT_QUOTES)));//Escanpando caracteres 
				$ID_area		 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_area"],ENT_QUOTES)));//Escanpando caracteres 
				//$tipo_persona	 = mysqli_real_escape_string($con,(strip_tags($_POST["tipo_persona"],ENT_QUOTES)));//Escanpando caracteres 
				
			

				$cek = mysqli_query($con, "SELECT * FROM registro_datos_visitantes WHERE ID_registro='$ID_registro'");
				if(mysqli_num_rows($cek) == 0){
						$insert = mysqli_query($con, "INSERT INTO registro_datos_visitantes( año,Nacionalidad, cantidad, mes, ID_area)
															VALUES('$año','$Nacionalidad','$cantidad','$mes','$ID_area')") or die(mysqli_error());
						if($insert){
							echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Bien hecho! Los datos han sido guardados con éxito.</div>';
						header("Location: bienvenidos.php");
						}else{
							echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error. No se pudo guardar los datos !</div>';
						}
					 
				}else{
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error. código existe!</div>';
				}
			}


			?>


            <form class="form-horizontal" action="" method="post">
                <h1 class="text-center">Perfil Sociodemográfico</h1>

                <div class="estilopreg">

                    <div>
                        <div class="form-group">
                            <div class="col-sm-6">
                                <h4>
                                    <?php		
                $sql = mysqli_query($con, "SELECT * FROM preguntas Where ID_pregunta = '38'");
                while($fila=$sql->fetch_array()){
                    echo " <option value = '".$fila['ID_pregunta']."'>"."38. ".$fila['pregunta']. "</option>";
                }
                  ?>
                                </h4>
                            </div>

                            <label class="col-sm-3 control-label">Respuesta</label>
                            <div class="col-sm-3">
                                <select class="form-control">
                                    <?php		
                $sql = mysqli_query($con, "SELECT * FROM respuesta Where ID_pregunta = '38'");
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
                                <h4>
                                    <?php		
                $sql = mysqli_query($con, "SELECT * FROM preguntas Where ID_pregunta = '39'");
                while($fila=$sql->fetch_array()){
                    echo " <option value = '".$fila['ID_pregunta']."'>"."39. ".$fila['pregunta']. "</option>";
                }
                ?>
                                </h4>
                            </div>

                            <label class="col-sm-3 control-label">Respuesta</label>
                            <div class="col-sm-3">
                                <select class="form-control">
                                    <?php		
                $sql = mysqli_query($con, "SELECT * FROM respuesta Where ID_pregunta = '39'");
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
                                <h4>
                                    <?php		
                $sql = mysqli_query($con, "SELECT * FROM preguntas Where ID_pregunta = '40'");
                while($fila=$sql->fetch_array()){
                    echo " <option value = '".$fila['ID_pregunta']."'>"."40. ".$fila['pregunta']. "</option>";
                }
                ?>
                                </h4>
                            </div>

                            <label class="col-sm-3 control-label">Respuesta</label>
                            <div class="col-sm-3">
                                <select class="form-control">
                                    <?php		
                $sql = mysqli_query($con, "SELECT * FROM respuesta Where ID_pregunta = '40'");
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
                                <h4>
                                    <?php		
                $sql = mysqli_query($con, "SELECT * FROM preguntas Where ID_pregunta = '41'");
                while($fila=$sql->fetch_array()){
                    echo " <option value = '".$fila['ID_pregunta']."'>"."41. ".$fila['pregunta']. "</option>";
                }
                ?>
                                </h4>
                            </div>

                            <label class="col-sm-3 control-label">Respuesta</label>
                            <div class="col-sm-3">
                                <select class="form-control">
                                    <?php		
                $sql = mysqli_query($con, "SELECT * FROM respuesta Where ID_pregunta = '41'");
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
                                <h4>
                                    <?php		
                $sql = mysqli_query($con, "SELECT * FROM preguntas Where ID_pregunta = '42'");
                while($fila=$sql->fetch_array()){
                    echo " <option value = '".$fila['ID_pregunta']."'>"."42. ".$fila['pregunta']. "</option>";
                }
                 ?>
                                </h4>
                            </div>

                            <label class="col-sm-3 control-label">Respuesta</label>
                            <div class="col-sm-3">
                                <select class="form-control">
                                    <?php		
                $sql = mysqli_query($con, "SELECT * FROM respuesta Where ID_pregunta = '42'");
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
                                <h4>
                                    <?php		
                $sql = mysqli_query($con, "SELECT * FROM preguntas Where ID_pregunta = '43'");
                while($fila=$sql->fetch_array()){
                    echo " <option value = '".$fila['ID_pregunta']."'>"."43. ".$fila['pregunta']. "</option>";
                }
                 ?>
                                </h4>
                            </div>

                            <label class="col-sm-3 control-label">Respuesta</label>
                            <div class="col-sm-3">
                                <input type="text" name="e-mail" class="form-control" placeholder="e-mail" required>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="form-group">
                            <div class="col-sm-6">
                                <h4>
                                    <?php		
                $sql = mysqli_query($con, "SELECT * FROM preguntas Where ID_pregunta = '44'");
                while($fila=$sql->fetch_array()){
                    echo " <option value = '".$fila['ID_pregunta']."'>"."44. ".$fila['pregunta']. "</option>";
                }
                 ?>
                                </h4>
                            </div>

                            <label class="col-sm-3 control-label">Respuesta</label>
                            <div class="col-sm-3">
                                <select class="form-control">
                                    <?php		
                $sql = mysqli_query($con, "SELECT * FROM respuesta Where ID_pregunta = '44'");
                while($fila=$sql->fetch_array()){
                    echo " <option value = '".$fila['ID_pregunta']."'>".$fila['respuesta']. "</option>";
                }
                ?>
                                </select>
                            </div>
                        </div>
                    </div>



                </div>


                <div class="form-group text-center" style="margin-top: 20px">
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