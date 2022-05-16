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
    <!-- <nav class="navbar navbar-default navbar-fixed-top">
        <?php // include("nav.php");?>
    </nav> -->
    <div class="container">
        <div class="content">
            <center><h2> Encuesta de satisfacción </h2></center>
            <hr />

            <?php
			if(isset($_POST['add'])){
				$ID_area     = mysqli_real_escape_string($con,(strip_tags($_POST["ID_area"],ENT_QUOTES)));//Escanpando caracteres 
				$sector		     = mysqli_real_escape_string($con,(strip_tags($_POST["sector"],ENT_QUOTES)));//Escanpando caracteres 
				$fecha		     = mysqli_real_escape_string($con,(strip_tags($_POST["fecha"],ENT_QUOTES)));//Escanpando caracteres 
				
                $ID_pregunta	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_pregunta"],ENT_QUOTES)));//Escanpando caracteres 
                $ID_respuesta	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_respuesta"],ENT_QUOTES)));//Escanpando caracteres 
			

                $ID_pregunta1	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_pregunta1"],ENT_QUOTES)));//Escanpando caracteres 
                $ID_respuesta1	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_respuesta1"],ENT_QUOTES)));//Escanpando caracteres 
			
                $ID_pregunta2	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_pregunta2"],ENT_QUOTES)));//Escanpando caracteres 
                $ID_respuesta2	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_respuesta2"],ENT_QUOTES)));//Escanpando caracteres 
			
                $ID_pregunta3	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_pregunta3"],ENT_QUOTES)));//Escanpando caracteres 
                $ID_respuesta3	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_respuesta3"],ENT_QUOTES)));//Escanpando caracteres 
			
                $ID_pregunta4	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_pregunta4"],ENT_QUOTES)));//Escanpando caracteres 
                $ID_respuesta4	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_respuesta4"],ENT_QUOTES)));//Escanpando caracteres 
			
                $ID_pregunta5	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_pregunta5"],ENT_QUOTES)));//Escanpando caracteres 
                $ID_respuesta5	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_respuesta5"],ENT_QUOTES)));//Escanpando caracteres 
			
                $ID_pregunta6	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_pregunta6"],ENT_QUOTES)));//Escanpando caracteres 
                $ID_respuesta6	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_respuesta6"],ENT_QUOTES)));//Escanpando caracteres 
			
                $ID_pregunta7	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_pregunta7"],ENT_QUOTES)));//Escanpando caracteres 
                $ID_respuesta7	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_respuesta7"],ENT_QUOTES)));//Escanpando caracteres 
			
                $ID_pregunta8	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_pregunta8"],ENT_QUOTES)));//Escanpando caracteres 
                $ID_respuesta8	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_respuesta8"],ENT_QUOTES)));//Escanpando caracteres 
			
                $ID_pregunta9	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_pregunta9"],ENT_QUOTES)));//Escanpando caracteres 
                $ID_respuesta9	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_respuesta9"],ENT_QUOTES)));//Escanpando caracteres 
			
                $ID_pregunta10	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_pregunta10"],ENT_QUOTES)));//Escanpando caracteres 
                $ID_respuesta10	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_respuesta10"],ENT_QUOTES)));//Escanpando caracteres 
			
                $ID_pregunta11	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_pregunta11"],ENT_QUOTES)));//Escanpando caracteres 
                $ID_respuesta11	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_respuesta11"],ENT_QUOTES)));//Escanpando caracteres 
			
                $ID_pregunta12	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_pregunta12"],ENT_QUOTES)));//Escanpando caracteres 
                $ID_respuesta12	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_respuesta12"],ENT_QUOTES)));//Escanpando caracteres 
			
                $ID_pregunta13	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_pregunta13"],ENT_QUOTES)));//Escanpando caracteres 
                $ID_respuesta13	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_respuesta13"],ENT_QUOTES)));//Escanpando caracteres 
			
                $ID_pregunta13	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_pregunta13"],ENT_QUOTES)));//Escanpando caracteres 
                $ID_respuesta13	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_respuesta13"],ENT_QUOTES)));//Escanpando caracteres 
			
                $ID_pregunta14	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_pregunta14"],ENT_QUOTES)));//Escanpando caracteres 
                $ID_respuesta14	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_respuesta14"],ENT_QUOTES)));//Escanpando caracteres 
			
                $ID_pregunta15	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_pregunta15"],ENT_QUOTES)));//Escanpando caracteres 
                $ID_respuesta15	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_respuesta15"],ENT_QUOTES)));//Escanpando caracteres 
			
                $ID_pregunta16	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_pregunta16"],ENT_QUOTES)));//Escanpando caracteres 
                $ID_respuesta16	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_respuesta16"],ENT_QUOTES)));//Escanpando caracteres 
			
				$ID_pregunta17	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_pregunta17"],ENT_QUOTES)));//Escanpando caracteres 
                $ID_respuesta17	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_respuesta17"],ENT_QUOTES)));//Escanpando caracteres 
			
                $ID_pregunta18	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_pregunta18"],ENT_QUOTES)));//Escanpando caracteres 
                $ID_respuesta18 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_respuesta18"],ENT_QUOTES)));//Escanpando caracteres 
			

                $ID_pregunta19	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_pregunta19"],ENT_QUOTES)));//Escanpando caracteres 
                $ID_respuesta19	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_respuesta19"],ENT_QUOTES)));//Escanpando caracteres 
			
                $ID_pregunta20	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_pregunta20"],ENT_QUOTES)));//Escanpando caracteres 
                $ID_respuesta20	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_respuesta20"],ENT_QUOTES)));//Escanpando caracteres 
			
                $ID_pregunta21	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_pregunta21"],ENT_QUOTES)));//Escanpando caracteres 
                $ID_respuesta21	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_respuesta21"],ENT_QUOTES)));//Escanpando caracteres 
			
                $ID_pregunta22	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_pregunta22"],ENT_QUOTES)));//Escanpando caracteres 
                $ID_respuesta22	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_respuesta22"],ENT_QUOTES)));//Escanpando caracteres 
			
                $ID_pregunta23	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_pregunta23"],ENT_QUOTES)));//Escanpando caracteres 
                $ID_respuesta23	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_respuesta23"],ENT_QUOTES)));//Escanpando caracteres 
			
                $ID_pregunta24	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_pregunta24"],ENT_QUOTES)));//Escanpando caracteres 
                $ID_respuesta24	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_respuesta24"],ENT_QUOTES)));//Escanpando caracteres 
			
                $ID_pregunta25	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_pregunta25"],ENT_QUOTES)));//Escanpando caracteres 
                $ID_respuesta25	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_respuesta25"],ENT_QUOTES)));//Escanpando caracteres 
			
                $ID_pregunta26	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_pregunta26"],ENT_QUOTES)));//Escanpando caracteres 
                $ID_respuesta26	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_respuesta26"],ENT_QUOTES)));//Escanpando caracteres 
			
                $ID_pregunta27	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_pregunta27"],ENT_QUOTES)));//Escanpando caracteres 
                $ID_respuesta27	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_respuesta27"],ENT_QUOTES)));//Escanpando caracteres 
			
                $ID_pregunta28	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_pregunta28"],ENT_QUOTES)));//Escanpando caracteres 
                $ID_respuesta28	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_respuesta28"],ENT_QUOTES)));//Escanpando caracteres 
			
                $ID_pregunta29	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_pregunta29"],ENT_QUOTES)));//Escanpando caracteres 
                $ID_respuesta29	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_respuesta29"],ENT_QUOTES)));//Escanpando caracteres 
			
                $ID_pregunta30	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_pregunta30"],ENT_QUOTES)));//Escanpando caracteres 
                $ID_respuesta30	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_respuesta30"],ENT_QUOTES)));//Escanpando caracteres 
			
                $ID_pregunta31	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_pregunta31"],ENT_QUOTES)));//Escanpando caracteres 
                $ID_respuesta31	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_respuesta31"],ENT_QUOTES)));//Escanpando caracteres 
			
                $ID_pregunta32	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_pregunta32"],ENT_QUOTES)));//Escanpando caracteres 
                $ID_respuesta32	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_respuesta32"],ENT_QUOTES)));//Escanpando caracteres 
			
                $ID_pregunta33	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_pregunta33"],ENT_QUOTES)));//Escanpando caracteres 
                $ID_respuesta33	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_respuesta33"],ENT_QUOTES)));//Escanpando caracteres 
			
                $ID_pregunta34	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_pregunta34"],ENT_QUOTES)));//Escanpando caracteres 
                $ID_respuesta34	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_respuesta34"],ENT_QUOTES)));//Escanpando caracteres 
			
                $ID_pregunta35	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_pregunta35"],ENT_QUOTES)));//Escanpando caracteres 
                $ID_respuesta35	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_respuesta35"],ENT_QUOTES)));//Escanpando caracteres 
			
                $ID_pregunta36	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_pregunta36"],ENT_QUOTES)));//Escanpando caracteres 
                $ID_respuesta36	 = mysqli_real_escape_string($con,(strip_tags($_POST["ID_respuesta36"],ENT_QUOTES)));//Escanpando caracteres 
			
						$insert = mysqli_query($con, "INSERT INTO datos_encu_resp(ID_respuesta,ID_pregunta)
															VALUES('$ID_respuesta','$ID_pregunta'),('$ID_respuesta1','$ID_pregunta1'),('$ID_respuesta2','$ID_pregunta2'),
                                                            ('$ID_respuesta3','$ID_pregunta3'),('$ID_respuesta4','$ID_pregunta4'),('$ID_respuesta5','$ID_pregunta5'),
                                                            ('$ID_respuesta6','$ID_pregunta6'),('$ID_respuesta7','$ID_pregunta7'),('$ID_respuesta8','$ID_pregunta8'),
                                                            ('$ID_respuesta9','$ID_pregunta9'),('$ID_respuesta10','$ID_pregunta10'),('$ID_respuesta11','$ID_pregunta11'),
                                                            ('$ID_respuesta12','$ID_pregunta12'), ('$ID_respuesta13','$ID_pregunta13'), ('$ID_respuesta14','$ID_pregunta14'),
                                                            ('$ID_respuesta15','$ID_pregunta15'), ('$ID_respuesta16','$ID_pregunta16'), ('$ID_respuesta17','$ID_pregunta17'),
                                                            ('$ID_respuesta18','$ID_pregunta18'), ('$ID_respuesta19','$ID_pregunta19'), ('$ID_respuesta20','$ID_pregunta20'),
                                                            ('$ID_respuesta21','$ID_pregunta21'), ('$ID_respuesta22','$ID_pregunta22'), ('$ID_respuesta23','$ID_pregunta23'),
                                                            ('$ID_respuesta24','$ID_pregunta24'), ('$ID_respuesta25','$ID_pregunta25'), ('$ID_respuesta26','$ID_pregunta26'),
                                                            ('$ID_respuesta27','$ID_pregunta27'), ('$ID_respuesta28','$ID_pregunta28'), ('$ID_respuesta29','$ID_pregunta29'),
                                                            ('$ID_respuesta30','$ID_pregunta30'), ('$ID_respuesta31','$ID_pregunta31'), ('$ID_respuesta32','$ID_pregunta32'),
                                                            ('$ID_respuesta33','$ID_pregunta33'), ('$ID_respuesta34','$ID_pregunta34'), ('$ID_respuesta35','$ID_pregunta35'),
                                                            ('$ID_respuesta36','$ID_pregunta36')") or die(mysqli_error());
						if($insert){
							echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Bien hecho! Los datos han sido guardados con éxito.</div>';
						header("Location: index.php");
						}else{
							echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error. No se pudo guardar los datos !</div>';
						}
					 
				
			}


			?>

            <form class="form-horizontal" action="" method="post">
                
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Area</label>
                        <div class="col-sm-3">
                            <select name="ID_area" class="form-control">
                                <option value="">Seleccionar Area</option>

                                <?php
                            $sql = mysqli_query($con, "SELECT * FROM area_protegida");
                            while($fila=$sql->fetch_array()){
                                echo " <option value = '".$fila['ID_area']."'>".$fila['nombre']. "</option>";
                            }
                        ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Sector</label>
                        <div class="col-sm-3">
                            <select name="sector" class="form-control">
                                <option value="">Seleccionar sector</option>

                                <?php
                            $sql = mysqli_query($con, "SELECT * FROM sector");
                            while($fila=$sql->fetch_array()){
                                echo " <option value = '".$fila['ID_sector']."'>".$fila['nombre']. "</option>";
                            }
                        ?>
                            </select>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Fecha</label>
                            <div class="col-sm-2">
                                <input type="date" name="fecha" class="form-control" placeholder="fecha" required>
                            </div>
                        </div>
                    </div>

                    <h1 class="">Preguntas</h1>

                    <div class="estilopreg">

                        <div>
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <h4>
                                        <?php		
								$sql = mysqli_query($con, "SELECT * FROM preguntas Where ID_pregunta = '1'");
								while($fila=$sql->fetch_array()){
                                    echo " <input type='hidden' value = '".$fila['ID_pregunta']."' name ='ID_pregunta'> ";
									echo " <option value = '".$fila['ID_pregunta']."'>"."1. ".$fila['pregunta']. "</option>";
								}
							?>
                                    </h4>
                                </div>

                                <label class="col-sm-3 control-label">Respuesta</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="ID_respuesta">
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
                                    <h4>
                                        <?php		
								$sql = mysqli_query($con, "SELECT * FROM preguntas Where ID_pregunta = '2'");
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
                                        <?php		
								$sql = mysqli_query($con, "SELECT * FROM respuesta Where ID_pregunta = '2'");
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
								$sql = mysqli_query($con, "SELECT * FROM preguntas Where ID_pregunta = '3'");
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
                                    <h4>
                                        <?php		
								$sql = mysqli_query($con, "SELECT * FROM preguntas Where ID_pregunta = '4'");
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
                                    <h4>
                                        <?php		
								$sql = mysqli_query($con, "SELECT * FROM preguntas Where ID_pregunta = '5'");
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

                    </div>

                    <h1 class="text-center">Aspectos Generales</h1>

                    <div class="estilopreg">

                        <div>
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <h4>
                                        <?php		
								$sql = mysqli_query($con, "SELECT * FROM preguntas Where ID_pregunta = '6'");
								while($fila=$sql->fetch_array()){
                                    echo " <input type='hidden' value = '".$fila['ID_pregunta']."' name ='ID_pregunta5'> ";
									echo " <option value = '".$fila['ID_pregunta']."'>"."6. ".$fila['pregunta']. "</option>";
								}
							?>
                                    </h4>
                                </div>

                                <label class="col-sm-3 control-label">Respuesta</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="ID_respuesta5">
                                        <?php		
								$sql = mysqli_query($con, "SELECT * FROM respuesta Where ID_pregunta = '6'");
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
								$sql = mysqli_query($con, "SELECT * FROM preguntas Where ID_pregunta = '7'");
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
                                        <?php		
								$sql = mysqli_query($con, "SELECT * FROM respuesta Where ID_pregunta = '7'");
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
								$sql = mysqli_query($con, "SELECT * FROM preguntas Where ID_pregunta = '8'");
								while($fila=$sql->fetch_array()){
                                    echo " <input type='hidden' value = '".$fila['ID_pregunta']."' name ='ID_pregunta7'> ";
									echo " <option value = '".$fila['ID_pregunta']."'>"."8. ".$fila['pregunta']. "</option>";
								}
							?>
                                    </h4>
                                </div>

                                <label class="col-sm-3 control-label">Respuesta</label>
                                <div class="col-sm-3">
                                    <select class="form-control"name="ID_respuesta7">
                                        <?php		
								$sql = mysqli_query($con, "SELECT * FROM respuesta Where ID_pregunta = '8'");
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
								$sql = mysqli_query($con, "SELECT * FROM preguntas Where ID_pregunta = '9'");
								while($fila=$sql->fetch_array()){
                                    echo " <input type='hidden' value = '".$fila['ID_pregunta']."' name ='ID_pregunta8'> ";
									echo " <option value = '".$fila['ID_pregunta']."'>"."9. ".$fila['pregunta']. "</option>";
								}
							?>
                                    </h4>
                                </div>

                                <label class="col-sm-3 control-label">Respuesta</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="ID_respuesta8">
                                        <?php		
								$sql = mysqli_query($con, "SELECT * FROM respuesta Where ID_pregunta = '9'");
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
								$sql = mysqli_query($con, "SELECT * FROM preguntas Where ID_pregunta = '10'");
								while($fila=$sql->fetch_array()){
                                    echo " <input type='hidden' value = '".$fila['ID_pregunta']."' name ='ID_pregunta9'> ";
									echo " <option value = '".$fila['ID_pregunta']."'>"."10. ".$fila['pregunta']. "</option>";
								}
							?>
                                    </h4>
                                </div>

                                <label class="col-sm-3 control-label">Respuesta</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="ID_respuesta9">
                                        <?php		
								$sql = mysqli_query($con, "SELECT * FROM respuesta Where ID_pregunta = '10'");
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
								$sql = mysqli_query($con, "SELECT * FROM preguntas Where ID_pregunta = '11'");
								while($fila=$sql->fetch_array()){
                                    echo " <input type='hidden' value = '".$fila['ID_pregunta']."' name ='ID_pregunta10'> ";
									echo " <option value = '".$fila['ID_pregunta']."'>"."11. ".$fila['pregunta']. "</option>";
								}
							?>
                                    </h4>
                                </div>

                                <label class="col-sm-3 control-label">Respuesta</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="ID_respuesta10">
                                        <?php		
								$sql = mysqli_query($con, "SELECT * FROM respuesta Where ID_pregunta = '11'");
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
								$sql = mysqli_query($con, "SELECT * FROM preguntas Where ID_pregunta = '12'");
								while($fila=$sql->fetch_array()){
                                    echo " <input type='hidden' value = '".$fila['ID_pregunta']."' name ='ID_pregunta11'> ";
									echo " <option value = '".$fila['ID_pregunta']."'>"."12. ".$fila['pregunta']. "</option>";
								}
							?>
                                    </h4>
                                </div>

                                <label class="col-sm-3 control-label">Respuesta</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="ID_respuesta11">
                                        <?php		
								$sql = mysqli_query($con, "SELECT * FROM respuesta Where ID_pregunta = '12'");
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
								$sql = mysqli_query($con, "SELECT * FROM preguntas Where ID_pregunta = '13'");
								while($fila=$sql->fetch_array()){
                                    echo " <input type='hidden' value = '".$fila['ID_pregunta']."' name ='ID_pregunta12'> ";
									echo " <option value = '".$fila['ID_pregunta']."'>"."13. ".$fila['pregunta']. "</option>";
								}
							?>
                                    </h4>
                                </div>

                                <label class="col-sm-3 control-label">Respuesta</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="ID_respuesta12">
                                        <?php		
								$sql = mysqli_query($con, "SELECT * FROM respuesta Where ID_pregunta = '13'");
								while($fila=$sql->fetch_array()){
									echo " <option value = '".$fila['ID_pregunta']."'>".$fila['respuesta']. "</option>";
								}
							?>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>

                    <h1 class="text-center">Actividades</h1>

                    <div class="estilopreg">

                        <div>
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <h4>
                                        <?php		
								$sql = mysqli_query($con, "SELECT * FROM preguntas Where ID_pregunta = '14'");
								while($fila=$sql->fetch_array()){
                                    echo " <input type='hidden' value = '".$fila['ID_pregunta']."' name ='ID_pregunta13'> ";
									echo " <option value = '".$fila['ID_pregunta']."'>"."14. ".$fila['pregunta']. "</option>";
								}
							?>
                                    </h4>
                                </div>

                                <label class="col-sm-3 control-label">Respuesta</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="ID_respuesta13">
                                        <?php		
								$sql = mysqli_query($con, "SELECT * FROM respuesta Where ID_pregunta = '14'");
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
								$sql = mysqli_query($con, "SELECT * FROM preguntas Where ID_pregunta = '15'");
								while($fila=$sql->fetch_array()){
                                    echo " <input type='hidden' value = '".$fila['ID_pregunta']."' name ='ID_pregunta14'> ";
									echo " <option value = '".$fila['ID_pregunta']."'>"."15. ".$fila['pregunta']. "</option>";
								}
							?>
                                    </h4>
                                </div>

                                <label class="col-sm-3 control-label">Respuesta</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="ID_respuesta14">
                                        <?php		
								$sql = mysqli_query($con, "SELECT * FROM respuesta Where ID_pregunta = '15'");
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
								$sql = mysqli_query($con, "SELECT * FROM preguntas Where ID_pregunta = '16'");
								while($fila=$sql->fetch_array()){
                                    echo " <input type='hidden' value = '".$fila['ID_pregunta']."' name ='ID_pregunta15'> ";
									echo " <option value = '".$fila['ID_pregunta']."'>"."16. ".$fila['pregunta']. "</option>";
								}
							?>
                                    </h4>
                                </div>

                                <label class="col-sm-3 control-label">Respuesta</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="ID_respuesta15">
                                        <?php		
								$sql = mysqli_query($con, "SELECT * FROM respuesta Where ID_pregunta = '16'");
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
								$sql = mysqli_query($con, "SELECT * FROM preguntas Where ID_pregunta = '17'");
								while($fila=$sql->fetch_array()){
                                    echo " <input type='hidden' value = '".$fila['ID_pregunta']."' name ='ID_pregunta16'> ";
									echo " <option value = '".$fila['ID_pregunta']."'>"."17. ".$fila['pregunta']. "</option>";
								}
							?>
                                    </h4>
                                </div>

                                <label class="col-sm-3 control-label">Respuesta</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="ID_respuesta16">
                                        <?php		
								$sql = mysqli_query($con, "SELECT * FROM respuesta Where ID_pregunta = '17'");
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
								$sql = mysqli_query($con, "SELECT * FROM preguntas Where ID_pregunta = '18'");
								while($fila=$sql->fetch_array()){
                                    echo " <input type='hidden' value = '".$fila['ID_pregunta']."' name ='ID_pregunta17'> ";
									echo " <option value = '".$fila['ID_pregunta']."'>"."18. ".$fila['pregunta']. "</option>";
								}
							?>
                                    </h4>
                                </div>

                                <label class="col-sm-3 control-label">Respuesta</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="ID_respuesta17">
                                        <?php		
								$sql = mysqli_query($con, "SELECT * FROM respuesta Where ID_pregunta = '18'");
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
								$sql = mysqli_query($con, "SELECT * FROM preguntas Where ID_pregunta = '19'");
								while($fila=$sql->fetch_array()){
                                    echo " <input type='hidden' value = '".$fila['ID_pregunta']."' name ='ID_pregunta18'> ";
									echo " <option value = '".$fila['ID_pregunta']."'>"."19. ".$fila['pregunta']. "</option>";
								}
							?>
                                    </h4>
                                </div>

                                <label class="col-sm-3 control-label">Respuesta</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="ID_respuesta18">
                                        <?php		
								$sql = mysqli_query($con, "SELECT * FROM respuesta Where ID_pregunta = '19'");
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
								$sql = mysqli_query($con, "SELECT * FROM preguntas Where ID_pregunta = '20'");
								while($fila=$sql->fetch_array()){
                                    echo " <input type='hidden' value = '".$fila['ID_pregunta']."' name ='ID_pregunta19'> ";
									echo " <option value = '".$fila['ID_pregunta']."'>"."20. ".$fila['pregunta']. "</option>";
								}
							?>
                                    </h4>
                                </div>

                                <label class="col-sm-3 control-label">Respuesta</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="ID_respuesta19">
                                        <?php		
								$sql = mysqli_query($con, "SELECT * FROM respuesta Where ID_pregunta = '20'");
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
								$sql = mysqli_query($con, "SELECT * FROM preguntas Where ID_pregunta = '21'");
								while($fila=$sql->fetch_array()){
                                    echo " <input type='hidden' value = '".$fila['ID_pregunta']."' name ='ID_pregunta20'> ";
									echo " <option value = '".$fila['ID_pregunta']."'>"."21. ".$fila['pregunta']. "</option>";
								}
							?>
                                    </h4>
                                </div>

                                <label class="col-sm-3 control-label">Respuesta</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="ID_respuesta20">
                                        <?php		
								$sql = mysqli_query($con, "SELECT * FROM respuesta Where ID_pregunta = '21'");
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
								$sql = mysqli_query($con, "SELECT * FROM preguntas Where ID_pregunta = '22'");
								while($fila=$sql->fetch_array()){
                                    echo " <input type='hidden' value = '".$fila['ID_pregunta']."' name ='ID_pregunta21'> ";
									echo " <option value = '".$fila['ID_pregunta']."'>"."22. ".$fila['pregunta']. "</option>";
								}
							?>
                                    </h4>
                                </div>

                                <label class="col-sm-3 control-label">Respuesta</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="ID_respuesta21">
                                        <?php		
								$sql = mysqli_query($con, "SELECT * FROM respuesta Where ID_pregunta = '22'");
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
								$sql = mysqli_query($con, "SELECT * FROM preguntas Where ID_pregunta = '23'");
								while($fila=$sql->fetch_array()){
                                    echo " <input type='hidden' value = '".$fila['ID_pregunta']."' name ='ID_pregunta22'> ";
									echo " <option value = '".$fila['ID_pregunta']."'>"."23. ".$fila['pregunta']. "</option>";
								}
							?>
                                    </h4>
                                </div>

                                <label class="col-sm-3 control-label">Respuesta</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="ID_respuesta22">
                                        <?php		
								$sql = mysqli_query($con, "SELECT * FROM respuesta Where ID_pregunta = '23'");
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
								$sql = mysqli_query($con, "SELECT * FROM preguntas Where ID_pregunta = '24'");
								while($fila=$sql->fetch_array()){
                                    echo " <input type='hidden' value = '".$fila['ID_pregunta']."' name ='ID_pregunta23'> ";
									echo " <option value = '".$fila['ID_pregunta']."'>"."24. ".$fila['pregunta']. "</option>";
								}
							?>
                                    </h4>
                                </div>

                                <label class="col-sm-3 control-label">Respuesta</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="ID_respuesta23">
                                        <?php		
								$sql = mysqli_query($con, "SELECT * FROM respuesta Where ID_pregunta = '24'");
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
								$sql = mysqli_query($con, "SELECT * FROM preguntas Where ID_pregunta = '25'");
								while($fila=$sql->fetch_array()){
                                    echo " <input type='hidden' value = '".$fila['ID_pregunta']."' name ='ID_pregunta24'> ";
									echo " <option value = '".$fila['ID_pregunta']."'>"."25. ".$fila['pregunta']. "</option>";
								}
							?>
                                    </h4>
                                </div>

                                <label class="col-sm-3 control-label">Respuesta</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="ID_respuesta24">
                                        <?php		
								$sql = mysqli_query($con, "SELECT * FROM respuesta Where ID_pregunta = '25'");
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
								$sql = mysqli_query($con, "SELECT * FROM preguntas Where ID_pregunta = '26'");
								while($fila=$sql->fetch_array()){
                                    echo " <input type='hidden' value = '".$fila['ID_pregunta']."' name ='ID_pregunta25'> ";
									echo " <option value = '".$fila['ID_pregunta']."'>"."26. ".$fila['pregunta']. "</option>";
								}
							?>
                                    </h4>
                                </div>

                                <label class="col-sm-3 control-label">Respuesta</label>
                                <div class="col-sm-3">
                                    <select class="form-control"name="ID_respuesta25">
                                        <?php		
								$sql = mysqli_query($con, "SELECT * FROM respuesta Where ID_pregunta = '26'");
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
								$sql = mysqli_query($con, "SELECT * FROM preguntas Where ID_pregunta = '27'");
								while($fila=$sql->fetch_array()){
                                    echo " <input type='hidden' value = '".$fila['ID_pregunta']."' name ='ID_pregunta26'> ";
									echo " <option value = '".$fila['ID_pregunta']."'>"."27. ".$fila['pregunta']. "</option>";
								}
							?>
                                    </h4>
                                </div>

                                <label class="col-sm-3 control-label">Respuesta</label>
                                <div class="col-sm-3">
                                    <input type="text" name="ID_respuesta26" class="form-control" placeholder="" required>
                                </div>
                            </div>
                        </div>

                    </div>

                    <h1 class="text-center">Servicios</h1>

                    <div class="estilopreg">

                        <div>
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <h4>
                                        <?php		
								$sql = mysqli_query($con, "SELECT * FROM preguntas Where ID_pregunta = '28'");
								while($fila=$sql->fetch_array()){
                                    echo " <input type='hidden' value = '".$fila['ID_pregunta']."' name ='ID_pregunta27'> ";
									echo " <option value = '".$fila['ID_pregunta']."'>"."28. ".$fila['pregunta']. "</option>";
								}
							?>
                                    </h4>
                                </div>

                                <label class="col-sm-3 control-label">Respuesta</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="ID_respuesta27">
                                        <?php		
								$sql = mysqli_query($con, "SELECT * FROM respuesta Where ID_pregunta = '28'");
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
								$sql = mysqli_query($con, "SELECT * FROM preguntas Where ID_pregunta = '29'");
								while($fila=$sql->fetch_array()){
                                    echo " <input type='hidden' value = '".$fila['ID_pregunta']."' name ='ID_pregunta28'> ";
									echo " <option value = '".$fila['ID_pregunta']."'>"."29. ".$fila['pregunta']. "</option>";
								}
							?>
                                    </h4>
                                </div>

                                <label class="col-sm-3 control-label">Respuesta</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="ID_respuesta28">
                                        <?php		
								$sql = mysqli_query($con, "SELECT * FROM respuesta Where ID_pregunta = '29'");
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
								$sql = mysqli_query($con, "SELECT * FROM preguntas Where ID_pregunta = '30'");
								while($fila=$sql->fetch_array()){
                                    echo " <input type='hidden' value = '".$fila['ID_pregunta']."' name ='ID_pregunta29'> ";
									echo " <option value = '".$fila['ID_pregunta']."'>"."30. ".$fila['pregunta']. "</option>";
								}
							?>
                                    </h4>
                                </div>

                                <label class="col-sm-3 control-label">Respuesta</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="ID_respuesta29">
                                        <?php		
								$sql = mysqli_query($con, "SELECT * FROM respuesta Where ID_pregunta = '30'");
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
								$sql = mysqli_query($con, "SELECT * FROM preguntas Where ID_pregunta = '31'");
								while($fila=$sql->fetch_array()){
                                    echo " <input type='hidden' value = '".$fila['ID_pregunta']."' name ='ID_pregunta30'> ";
									echo " <option value = '".$fila['ID_pregunta']."'>"."31. ".$fila['pregunta']. "</option>";
								}
							?>
                                    </h4>
                                </div>

                                <label class="col-sm-3 control-label">Respuesta</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="ID_respuesta30">
                                        <?php		
								$sql = mysqli_query($con, "SELECT * FROM respuesta Where ID_pregunta = '31'");
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
								$sql = mysqli_query($con, "SELECT * FROM preguntas Where ID_pregunta = '32'");
								while($fila=$sql->fetch_array()){
                                    echo " <input type='hidden' value = '".$fila['ID_pregunta']."' name ='ID_pregunta31'> ";
									echo " <option value = '".$fila['ID_pregunta']."'>"."32. ".$fila['pregunta']. "</option>";
								}
							?>
                                    </h4>
                                </div>

                                <label class="col-sm-3 control-label">Respuesta</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="ID_respuesta31">
                                        <?php		
								$sql = mysqli_query($con, "SELECT * FROM respuesta Where ID_pregunta = '32'");
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
								$sql = mysqli_query($con, "SELECT * FROM preguntas Where ID_pregunta = '33'");
								while($fila=$sql->fetch_array()){
                                    echo " <input type='hidden' value = '".$fila['ID_pregunta']."' name ='ID_pregunta32'> ";
									echo " <option value = '".$fila['ID_pregunta']."'>"."33. ".$fila['pregunta']. "</option>";
								}
							?>
                                    </h4>
                                </div>

                                <label class="col-sm-3 control-label">Respuesta</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="ID_respuesta32">
                                        <?php		
								$sql = mysqli_query($con, "SELECT * FROM respuesta Where ID_pregunta = '33'");
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
								$sql = mysqli_query($con, "SELECT * FROM preguntas Where ID_pregunta = '34'");
								while($fila=$sql->fetch_array()){
                                    echo " <input type='hidden' value = '".$fila['ID_pregunta']."' name ='ID_pregunta33'> ";
									echo " <option value = '".$fila['ID_pregunta']."'>"."34. ".$fila['pregunta']. "</option>";
								}
							?>
                                    </h4>
                                </div>

                                <label class="col-sm-3 control-label">Respuesta</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="ID_respuesta33">
                                        <?php		
								$sql = mysqli_query($con, "SELECT * FROM respuesta Where ID_pregunta = '34'");
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
								$sql = mysqli_query($con, "SELECT * FROM preguntas Where ID_pregunta = '35'");
								while($fila=$sql->fetch_array()){
                                    echo " <input type='hidden' value = '".$fila['ID_pregunta']."' name ='ID_pregunta34'> ";
									echo " <option value = '".$fila['ID_pregunta']."'>"."35. ".$fila['pregunta']. "</option>";
								}
							?>
                                    </h4>
                                </div>

                                <label class="col-sm-3 control-label">Respuesta</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="ID_respuesta34">
                                        <?php		
								$sql = mysqli_query($con, "SELECT * FROM respuesta Where ID_pregunta = '35'");
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
								$sql = mysqli_query($con, "SELECT * FROM preguntas Where ID_pregunta = '36'");
								while($fila=$sql->fetch_array()){
                                    echo " <input type='hidden' value = '".$fila['ID_pregunta']."' name ='ID_pregunta35'> ";
									echo " <option value = '".$fila['ID_pregunta']."'>"."36. ".$fila['pregunta']. "</option>";
								}
							?>
                                    </h4>
                                </div>

                                <label class="col-sm-3 control-label">Respuesta</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="ID_respuesta35">
                                        <?php		
								$sql = mysqli_query($con, "SELECT * FROM respuesta Where ID_pregunta = '36'");
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
								$sql = mysqli_query($con, "SELECT * FROM preguntas Where ID_pregunta = '37'");
								while($fila=$sql->fetch_array()){
                                    echo " <input type='hidden' value = '".$fila['ID_pregunta']."' name ='ID_pregunta36'> ";
									echo " <option value = '".$fila['ID_pregunta']."'>"."37. ".$fila['pregunta']. "</option>";
								}
							?>
                                    </h4>
                                </div>

                                <label class="col-sm-3 control-label">Respuesta</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="ID_respuesta36">
                                        <?php		
								$sql = mysqli_query($con, "SELECT * FROM respuesta Where ID_pregunta = '37'");
								while($fila=$sql->fetch_array()){
									echo " <option value = '".$fila['ID_pregunta']."'>".$fila['respuesta']. "</option>";
								}
							?>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>

                 

                    <br><br>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">&nbsp;</label>
                        <div class="col-sm-6">
                            <input type="submit" name="add" class="btn btn-sm btn-primary" value="Enviar">
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