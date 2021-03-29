<!DOCTYPE html>
<html>
<?php
			session_start();
			$usuario = $_SESSION['usuarioactivo'];
			if($usuario ==""){
				session_destroy();
				header('Location: /Encuesta/index.php');
			}
		?>
<head>
    <title>Encuesta Lista</title>
    <meta charset="utf-8">
    <link type="text/css" href="estilos.css" rel="stylesheet" />
</head>
 
<body>
 
    <div id="envoltura">
        <div id="contenedor">
 
            <div id="cabecera" align="center">
                <img src="imagenes/avion.jpg" WIDTH=70% HEIGHT=50% >
            </div>
 
            <div id="cuerpo" align="center">
                <style>
ul{
	list-style-type:none;
	margin:0;
	padding:0;
	overflow:hidden;
	background-color:#333;
}
li{
	float:left;
}
li a{
	diplay:block;
	color:white;
	text-align:center;
	padding: 14px 16px;
	text-decoration:none;
}
li a:hover{
	background-color:#111;
}
</style>

	<fieldset>  
		<legend>Resultados de tus encuestas</legend>
		<?php
		echo "Tu encuesta se grabo correctamente ".$usuario;
		session_destroy();
		?>
		<br/><br/>
		<?php
		
		echo "Gracias por participar, tu opinion es muy importante para nosotros "
		
		?>
	<br><br/><input type='Submit' value=Salir name=Accion id=Accion OnClick="window.location.href='index.php'"> 


				
		
	</fieldset>
				
				
				
				
				
            </div><!--fin cuerpo-->
 
            <div id="pie" align="center">
			<br/><br/><br/><a>Encuesta de satifaccion de vuelo, creada por alumnos de AIEP</a>
			</div>
        </div><!-- fin contenedor -->
    </div><!--fin envoltura-->
</body>
 
</html>
