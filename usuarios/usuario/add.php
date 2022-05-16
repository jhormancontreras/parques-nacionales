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
    <link href="../../bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="../../bootstrap/bootstrap-datepicker.css" rel="stylesheet">
    <link href="../../bootstrap/style_nav.css" rel="stylesheet">
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

    <div class="container">
        <div class="content">
            <center>
                <h2>Registrar de Datos de los Visitantes</h2>
            </center>
            <hr />

            <?php
			if(isset($_POST['add'])){
				$ID_pregunta     = mysqli_real_escape_string($con,(strip_tags($_POST["ID_pregunta"],ENT_QUOTES)));//Escanpando caracteres 
				$ID_respuesta 		     = mysqli_real_escape_string($con,(strip_tags($_POST["ID_respuesta"],ENT_QUOTES)));//Escanpando caracteres 
                $nombre 		     = mysqli_real_escape_string($con,(strip_tags($_POST["nombre"],ENT_QUOTES)));//Escanpando caracteres 
				
				$ID_pregunta1     = mysqli_real_escape_string($con,(strip_tags($_POST["ID_pregunta1"],ENT_QUOTES)));//Escanpando caracteres 
				$ID_respuesta1 		     = mysqli_real_escape_string($con,(strip_tags($_POST["ID_respuesta1"],ENT_QUOTES)));//Escanpando caracteres 
               // $nombre 		     = mysqli_real_escape_string($con,(strip_tags($_POST["nombre"],ENT_QUOTES)));//Escanpando caracteres 
				
                $ID_pregunta2     = mysqli_real_escape_string($con,(strip_tags($_POST["ID_pregunta2"],ENT_QUOTES)));//Escanpando caracteres 
				$ID_respuesta2 		     = mysqli_real_escape_string($con,(strip_tags($_POST["ID_respuesta2"],ENT_QUOTES)));//Escanpando caracteres 
               // $nombre 		     = mysqli_real_escape_string($con,(strip_tags($_POST["nombre"],ENT_QUOTES)));//Escanpando caracteres 
				
                $ID_pregunta3     = mysqli_real_escape_string($con,(strip_tags($_POST["ID_pregunta3"],ENT_QUOTES)));//Escanpando caracteres 
				$ID_respuesta3 		     = mysqli_real_escape_string($con,(strip_tags($_POST["ID_respuesta3"],ENT_QUOTES)));//Escanpando caracteres 
               // $nombre 		     = mysqli_real_escape_string($con,(strip_tags($_POST["nombre"],ENT_QUOTES)));//Escanpando caracteres 
               $ID_pregunta4     = mysqli_real_escape_string($con,(strip_tags($_POST["ID_pregunta4"],ENT_QUOTES)));//Escanpando caracteres 
               $ID_respuesta4 		     = mysqli_real_escape_string($con,(strip_tags($_POST["ID_respuesta4"],ENT_QUOTES)));//Escanpando caracteres 
              
             //  $ID_pregunta5     = mysqli_real_escape_string($con,(strip_tags($_POST["ID_pregunta5"],ENT_QUOTES)));//Escanpando caracteres 
			//	$ID_respuesta5 		     = mysqli_real_escape_string($con,(strip_tags($_POST["ID_respuesta5"],ENT_QUOTES)));//Escanpando caracteres 
               
                $ID_pregunta6    = mysqli_real_escape_string($con,(strip_tags($_POST["ID_pregunta6"],ENT_QUOTES)));//Escanpando caracteres 
				$ID_respuesta6 		     = mysqli_real_escape_string($con,(strip_tags($_POST["ID_respuesta6"],ENT_QUOTES)));//Escanpando caracteres 
               
			

				
						$insert = mysqli_query($con, "INSERT INTO respuesta_visitante( ID_pregunta,ID_respuesta,nombre)
															VALUES('$ID_pregunta','$ID_respuesta','$nombre'),('$ID_pregunta1','$ID_respuesta1','$nombre'),
                                                            ('$ID_pregunta2','$ID_respuesta2','$nombre'),('$ID_pregunta3','$ID_respuesta3','$nombre'),('$ID_pregunta4','$ID_respuesta4','$nombre'),
                                                            /*('$ID_pregunta5','$ID_respuesta5','$nombre'),*/('$ID_pregunta6','$ID_respuesta6','$nombre')") or die(mysqli_error());
						if($insert){
							echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Bien hecho! Los datos han sido guardados con éxito.</div>';
						header("Location: ../principal/index.php");
						}else{
							echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error. No se pudo guardar los datos !</div>';
						}
				
			}


			?>


            <form class="form-horizontal" action="" method="post">


                <div class="estilopreg">


                    <div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Area</label>
                            <div class="col-sm-3">
                                <select name="nombre" class="form-control">
                                    <option value="">Seleccionar Area</option>

                                    <?php
                                                $sql = mysqli_query($con, "SELECT * FROM area_protegida");
                                                while($fila=$sql->fetch_array()){
                                                    echo " <option value = '".$fila['nombre']."'>".$fila['nombre']. "</option>";
                                                }
                                            ?>

                                </select>
                            </div>
                        </div>

                        <div>
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <h4>
                                        <?php		
                                            $sql = mysqli_query($con, "SELECT * FROM preguntas Where ID_pregunta = '38'");
                                            while($fila=$sql->fetch_array()){
                                                echo " <input type='hidden' value = '".$fila['ID_pregunta']."' name ='ID_pregunta'> ";
                                                echo " <option  value = '".$fila['ID_pregunta']."'>"."1. ".$fila['pregunta']. "</option>";
                                            }
                                            ?>
                                    </h4>
                                </div>

                                <label class="col-sm-3 control-label">Respuesta</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="ID_respuesta">
                                        <option value="#">Seleccionar</option>
                                        <?php		
                                        $sql = mysqli_query($con, "SELECT * FROM respuesta Where ID_pregunta = '38'");
                                        while($fila=$sql->fetch_array()){
                                            echo " <option value = '".$fila['ID_respuesta']."'>".$fila['respuesta']. "</option>";
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
                                                        echo " <input type='hidden' value = '".$fila['ID_pregunta']."' name ='ID_pregunta1'> ";
                                                        echo " <option value = '".$fila['ID_pregunta']."'>"."2. ".$fila['pregunta']. "</option>";
                                                    }
                                                    ?>
                                    </h4>
                                </div>

                                <label class="col-sm-3 control-label">Respuesta</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="ID_respuesta1">
                                        <option value="#">Seleccionar</option>
                                        <?php		
                                                $sql = mysqli_query($con, "SELECT * FROM respuesta Where ID_pregunta = '39'");
                                                while($fila=$sql->fetch_array()){
                                                    echo " <option value = '".$fila['ID_respuesta']."'>".$fila['respuesta']. "</option>";
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
                                                echo " <input type='hidden' value = '".$fila['ID_pregunta']."' name ='ID_pregunta2'> ";
                                                echo " <option value = '".$fila['ID_pregunta']."'>"."3. ".$fila['pregunta']. "</option>";
                                            }
                                            ?>
                                    </h4>
                                </div>

                                <label class="col-sm-3 control-label">Respuesta</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="ID_respuesta2">
                                        <option value="#">Seleccionar</option>
                                        <?php		
                                                    $sql = mysqli_query($con, "SELECT * FROM respuesta Where ID_pregunta = '40'");
                                                    while($fila=$sql->fetch_array()){
                                                        echo " <option value = '".$fila['ID_respuesta']."'>".$fila['respuesta']. "</option>";
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
                                                    echo " <input type='hidden' value = '".$fila['ID_pregunta']."' name ='ID_pregunta3'> ";
                                                    echo " <option value = '".$fila['ID_pregunta']."'>"."4. ".$fila['pregunta']. "</option>";
                                                }
                                                ?>
                                    </h4>
                                </div>

                                <label class="col-sm-3 control-label">Respuesta</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="ID_respuesta3">
                                        <option value="#">Seleccionar</option>
                                        <?php		
                                            $sql = mysqli_query($con, "SELECT * FROM respuesta Where ID_pregunta = '41'");
                                            while($fila=$sql->fetch_array()){
                                                echo " <option value = '".$fila['ID_respuesta']."'>".$fila['respuesta']. "</option>";
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
                                                    echo " <input type='hidden' value = '".$fila['ID_pregunta']."' name ='ID_pregunta4'> ";
                                                    echo " <option value = '".$fila['ID_pregunta']."'>"."5. ".$fila['pregunta']. "</option>";
                                                }
                                                ?>
                                    </h4>
                                </div>

                                <label class="col-sm-3 control-label">Respuesta</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="ID_respuesta4">
                                        <option value="#">Seleccionar</option>
                                        <?php		
                                                $sql = mysqli_query($con, "SELECT * FROM respuesta Where ID_pregunta = '42'");
                                                while($fila=$sql->fetch_array()){
                                                    echo " <option value = '".$fila['ID_respuesta']."'>".$fila['respuesta']. "</option>";
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
                                                    echo " <input type='hidden' value = '".$fila['ID_pregunta']."' name ='ID_pregunta5'> ";
                                                    echo " <option value = '".$fila['ID_pregunta']."'>"."6. ".$fila['pregunta']. "</option>";
                                                }
                                                ?>
                                    </h4>
                                </div>

                                <label class="col-sm-3 control-label">Respuesta</label>
                                <div class="col-sm-3">
                                    <input type="text" name="ID_respuesta5" class="form-control" placeholder="e-mail"
                                        required>
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
                                                    echo " <input type='hidden' value = '".$fila['ID_pregunta']."' name ='ID_pregunta6'> ";
                                                    echo " <option value = '".$fila['ID_pregunta']."'>"."7. ".$fila['pregunta']. "</option>";
                                                }
                                                ?>
                                    </h4>
                                </div>

                                <label class="col-sm-3 control-label">Respuesta</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="ID_respuesta6">
                                        <option value="#">Seleccionar</option>
                                        <?php		
                                            $sql = mysqli_query($con, "SELECT * FROM respuesta Where ID_pregunta = '44'");
                                            while($fila=$sql->fetch_array()){
                                                echo " <option value = '".$fila['ID_respuesta']."'>".$fila['respuesta']. "</option>";
                                            }
                                            ?>
                                    </select>
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