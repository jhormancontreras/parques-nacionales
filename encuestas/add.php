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

            <h1 class="">Preguntas</h1>

            <div class= "estilopreg">

                <div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <h4>
                                <?php		
								$sql = mysqli_query($con, "SELECT * FROM preguntas Where ID_pregunta = '1'");
								while($fila=$sql->fetch_array()){
									echo " <option value = '".$fila['ID_pregunta']."'>"."1. ".$fila['pregunta']. "</option>";
								}
							?>
                            </h4>
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
                            <h4>
                                <?php		
								$sql = mysqli_query($con, "SELECT * FROM preguntas Where ID_pregunta = '2'");
								while($fila=$sql->fetch_array()){
									echo " <option value = '".$fila['ID_pregunta']."'>"."2. ".$fila['pregunta']. "</option>";
								}
							?>
                            </h4>
                        </div>

                        <label class="col-sm-3 control-label">Respuesta</label>
                        <div class="col-sm-3">
                            <select class="form-control">
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
									echo " <option value = '".$fila['ID_pregunta']."'>"."3. ".$fila['pregunta']. "</option>";
								}
							?>
                            </h4>
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
                            <h4>
                                <?php		
								$sql = mysqli_query($con, "SELECT * FROM preguntas Where ID_pregunta = '4'");
								while($fila=$sql->fetch_array()){
									echo " <option value = '".$fila['ID_pregunta']."'>"."4. ".$fila['pregunta']. "</option>";
								}
							?>
                            </h4>
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
                            <h4>
                                <?php		
								$sql = mysqli_query($con, "SELECT * FROM preguntas Where ID_pregunta = '5'");
								while($fila=$sql->fetch_array()){
									echo " <option value = '".$fila['ID_pregunta']."'>"."5. ".$fila['pregunta']. "</option>";
								}
							?>
                            </h4>
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

                </div>

                <h1 class="text-center">Aspectos Generales</h1>

                <div class= "estilopreg">

                <div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <h4>
                                <?php		
								$sql = mysqli_query($con, "SELECT * FROM preguntas Where ID_pregunta = '6'");
								while($fila=$sql->fetch_array()){
									echo " <option value = '".$fila['ID_pregunta']."'>"."6. ".$fila['pregunta']. "</option>";
								}
							?>
                            </h4>
                        </div>

                        <label class="col-sm-3 control-label">Respuesta</label>
                        <div class="col-sm-3">
                            <select class="form-control">
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
									echo " <option value = '".$fila['ID_pregunta']."'>"."7. ".$fila['pregunta']. "</option>";
								}
							?>
                            </h4>
                        </div>

                        <label class="col-sm-3 control-label">Respuesta</label>
                        <div class="col-sm-3">
                            <select class="form-control">
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
									echo " <option value = '".$fila['ID_pregunta']."'>"."8. ".$fila['pregunta']. "</option>";
								}
							?>
                            </h4>
                        </div>

                        <label class="col-sm-3 control-label">Respuesta</label>
                        <div class="col-sm-3">
                            <select class="form-control">
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
									echo " <option value = '".$fila['ID_pregunta']."'>"."9. ".$fila['pregunta']. "</option>";
								}
							?>
                            </h4>
                        </div>

                        <label class="col-sm-3 control-label">Respuesta</label>
                        <div class="col-sm-3">
                            <select class="form-control">
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
									echo " <option value = '".$fila['ID_pregunta']."'>"."10. ".$fila['pregunta']. "</option>";
								}
							?>
                            </h4>
                        </div>

                        <label class="col-sm-3 control-label">Respuesta</label>
                        <div class="col-sm-3">
                            <select class="form-control">
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
									echo " <option value = '".$fila['ID_pregunta']."'>"."11. ".$fila['pregunta']. "</option>";
								}
							?>
                            </h4>
                        </div>

                        <label class="col-sm-3 control-label">Respuesta</label>
                        <div class="col-sm-3">
                            <select class="form-control">
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
									echo " <option value = '".$fila['ID_pregunta']."'>"."12. ".$fila['pregunta']. "</option>";
								}
							?>
                            </h4>
                        </div>

                        <label class="col-sm-3 control-label">Respuesta</label>
                        <div class="col-sm-3">
                            <select class="form-control">
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
									echo " <option value = '".$fila['ID_pregunta']."'>"."13. ".$fila['pregunta']. "</option>";
								}
							?>
                            </h4>
                        </div>

                        <label class="col-sm-3 control-label">Respuesta</label>
                        <div class="col-sm-3">
                            <select class="form-control">
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

                <div class= "estilopreg">

                <div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <h4>
                                <?php		
								$sql = mysqli_query($con, "SELECT * FROM preguntas Where ID_pregunta = '14'");
								while($fila=$sql->fetch_array()){
									echo " <option value = '".$fila['ID_pregunta']."'>"."14. ".$fila['pregunta']. "</option>";
								}
							?>
                            </h4>
                        </div>

                        <label class="col-sm-3 control-label">Respuesta</label>
                        <div class="col-sm-3">
                            <select class="form-control">
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
									echo " <option value = '".$fila['ID_pregunta']."'>"."15. ".$fila['pregunta']. "</option>";
								}
							?>
                            </h4>
                        </div>

                        <label class="col-sm-3 control-label">Respuesta</label>
                        <div class="col-sm-3">
                            <select class="form-control">
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
									echo " <option value = '".$fila['ID_pregunta']."'>"."16. ".$fila['pregunta']. "</option>";
								}
							?>
                            </h4>
                        </div>

                        <label class="col-sm-3 control-label">Respuesta</label>
                        <div class="col-sm-3">
                            <select class="form-control">
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
									echo " <option value = '".$fila['ID_pregunta']."'>"."17. ".$fila['pregunta']. "</option>";
								}
							?>
                            </h4>
                        </div>

                        <label class="col-sm-3 control-label">Respuesta</label>
                        <div class="col-sm-3">
                            <select class="form-control">
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
									echo " <option value = '".$fila['ID_pregunta']."'>"."18. ".$fila['pregunta']. "</option>";
								}
							?>
                            </h4>
                        </div>

                        <label class="col-sm-3 control-label">Respuesta</label>
                        <div class="col-sm-3">
                            <select class="form-control">
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
									echo " <option value = '".$fila['ID_pregunta']."'>"."19. ".$fila['pregunta']. "</option>";
								}
							?>
                            </h4>
                        </div>

                        <label class="col-sm-3 control-label">Respuesta</label>
                        <div class="col-sm-3">
                            <select class="form-control">
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
									echo " <option value = '".$fila['ID_pregunta']."'>"."20. ".$fila['pregunta']. "</option>";
								}
							?>
                            </h4>
                        </div>

                        <label class="col-sm-3 control-label">Respuesta</label>
                        <div class="col-sm-3">
                            <select class="form-control">
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
									echo " <option value = '".$fila['ID_pregunta']."'>"."21. ".$fila['pregunta']. "</option>";
								}
							?>
                            </h4>
                        </div>

                        <label class="col-sm-3 control-label">Respuesta</label>
                        <div class="col-sm-3">
                            <select class="form-control">
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
									echo " <option value = '".$fila['ID_pregunta']."'>"."22. ".$fila['pregunta']. "</option>";
								}
							?>
                            </h4>
                        </div>

                        <label class="col-sm-3 control-label">Respuesta</label>
                        <div class="col-sm-3">
                            <select class="form-control">
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
									echo " <option value = '".$fila['ID_pregunta']."'>"."23. ".$fila['pregunta']. "</option>";
								}
							?>
                            </h4>
                        </div>

                        <label class="col-sm-3 control-label">Respuesta</label>
                        <div class="col-sm-3">
                            <select class="form-control">
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
									echo " <option value = '".$fila['ID_pregunta']."'>"."24. ".$fila['pregunta']. "</option>";
								}
							?>
                            </h4>
                        </div>

                        <label class="col-sm-3 control-label">Respuesta</label>
                        <div class="col-sm-3">
                            <select class="form-control">
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
									echo " <option value = '".$fila['ID_pregunta']."'>"."25. ".$fila['pregunta']. "</option>";
								}
							?>
                            </h4>
                        </div>

                        <label class="col-sm-3 control-label">Respuesta</label>
                        <div class="col-sm-3">
                            <select class="form-control">
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
									echo " <option value = '".$fila['ID_pregunta']."'>"."26. ".$fila['pregunta']. "</option>";
								}
							?>
                            </h4>
                        </div>

                        <label class="col-sm-3 control-label">Respuesta</label>
                        <div class="col-sm-3">
                            <select class="form-control">
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
									echo " <option value = '".$fila['ID_pregunta']."'>"."27. ".$fila['pregunta']. "</option>";
								}
							?>
                            </h4>
                        </div>

                        <label class="col-sm-3 control-label">Respuesta</label>
                        <div class="col-sm-3">
                        <input type="text" name="otrocual" class="form-control" placeholder=""
                                            required>
                        </div>
                    </div>
                </div>

                </div>

                <h1 class="text-center">Servicios</h1>

                <div class= "estilopreg">

                <div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <h4>
                            <?php		
								$sql = mysqli_query($con, "SELECT * FROM preguntas Where ID_pregunta = '28'");
								while($fila=$sql->fetch_array()){
									echo " <option value = '".$fila['ID_pregunta']."'>"."28. ".$fila['pregunta']. "</option>";
								}
							?>
                            </h4>
                        </div>

                        <label class="col-sm-3 control-label">Respuesta</label>
                        <div class="col-sm-3">
                            <select class="form-control">
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
									echo " <option value = '".$fila['ID_pregunta']."'>"."29. ".$fila['pregunta']. "</option>";
								}
							?>
                            </h4>
                        </div>

                        <label class="col-sm-3 control-label">Respuesta</label>
                        <div class="col-sm-3">
                            <select class="form-control">
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
									echo " <option value = '".$fila['ID_pregunta']."'>"."30. ".$fila['pregunta']. "</option>";
								}
							?>
                            </h4>
                        </div>

                        <label class="col-sm-3 control-label">Respuesta</label>
                        <div class="col-sm-3">
                            <select class="form-control">
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
									echo " <option value = '".$fila['ID_pregunta']."'>"."31. ".$fila['pregunta']. "</option>";
								}
							?>
                            </h4>
                        </div>

                        <label class="col-sm-3 control-label">Respuesta</label>
                        <div class="col-sm-3">
                            <select class="form-control">
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
									echo " <option value = '".$fila['ID_pregunta']."'>"."32. ".$fila['pregunta']. "</option>";
								}
							?>
                            </h4>
                        </div>

                        <label class="col-sm-3 control-label">Respuesta</label>
                        <div class="col-sm-3">
                            <select class="form-control">
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
									echo " <option value = '".$fila['ID_pregunta']."'>"."33. ".$fila['pregunta']. "</option>";
								}
							?>
                            </h4>
                        </div>

                        <label class="col-sm-3 control-label">Respuesta</label>
                        <div class="col-sm-3">
                            <select class="form-control">
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
									echo " <option value = '".$fila['ID_pregunta']."'>"."34. ".$fila['pregunta']. "</option>";
								}
							?>
                            </h4>
                        </div>

                        <label class="col-sm-3 control-label">Respuesta</label>
                        <div class="col-sm-3">
                            <select class="form-control">
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
									echo " <option value = '".$fila['ID_pregunta']."'>"."35. ".$fila['pregunta']. "</option>";
								}
							?>
                            </h4>
                        </div>

                        <label class="col-sm-3 control-label">Respuesta</label>
                        <div class="col-sm-3">
                            <select class="form-control">
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
									echo " <option value = '".$fila['ID_pregunta']."'>"."36. ".$fila['pregunta']. "</option>";
								}
							?>
                            </h4>
                        </div>

                        <label class="col-sm-3 control-label">Respuesta</label>
                        <div class="col-sm-3">
                            <select class="form-control">
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
									echo " <option value = '".$fila['ID_pregunta']."'>"."37. ".$fila['pregunta']. "</option>";
								}
							?>
                            </h4>
                        </div>

                        <label class="col-sm-3 control-label">Respuesta</label>
                        <div class="col-sm-3">
                            <select class="form-control">
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

                <h1 class="text-center">Perfil Sociodemográfico</h1>

                <div class= "estilopreg">

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
                        <input type="text" name="e-mail" class="form-control" placeholder="e-mail"
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

                <br><br>

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