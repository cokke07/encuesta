<!DOCTYPE html>
<html>
<?php
			session_start();
			$usuario = $_SESSION['usuarioactivo'];
			if($usuario ==""){
				session_destroy();
				header('Location: /Encuesta/index.php');
			}
				define('DB_SERVER','localhost');
				define('DB_NAME','contenedor_encuestas_air');
				define('DB_USER','root');
				define('DB_PASS','');
    
    $con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS);
    mysqli_select_db($con,DB_NAME);
    
    $sql = "select * from cliente_valido where Rut='$usuario'";
    $res = mysqli_query($con,$sql);
    $count = 0;
	
	ob_start();

	
    while($row = mysqli_fetch_array($res)){
        $id=$row[0];
		$id2=$row[1];
		$count++;
        //$result =$row->idUusario;
		
    }
    if($count ==1){
			$iduser = $id;
			$pass = $id2;
		//echo $iduser;
	//	header('Location: /Encuesta/inicio.php');
    }else{
      //  header('Location: /Encuesta/index.php');
    }
		?>
<head>
    <title>Responder encuesta</title>
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
		<legend>Encuesta de Satifaccion</legend>
		<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
			<br/><a>¿Como evaluas el trato de nuestro personal? </a><br/>
			<input name="pregunta1txt" type="radio" value="5" />Excelente
			<input name="pregunta1txt" type="radio" value="4" />Muy Bueno
			<input name="pregunta1txt" type="radio" value="3" />Bueno
			<input name="pregunta1txt" type="radio" value="2" />Regular
			<input name="pregunta1txt" type="radio" value="1" />Malo
			<br/><br/>			
			<a>¿Como evaluas la comida servida en el avión?</a><br/>
			<input name="pregunta2txt" type="radio" value="5" />Excelente
			<input name="pregunta2txt" type="radio" value="4" />Muy Bueno
			<input name="pregunta2txt" type="radio" value="3" />Bueno
			<input name="pregunta2txt" type="radio" value="2" />Regular
			<input name="pregunta2txt" type="radio" value="1" />Malo
			<br/><br/>			
			<a>¿Encontraste comodos los asientos?</a><br/>
			<input name="pregunta3txt" type="radio" value="5" />Excelente
			<input name="pregunta3txt" type="radio" value="4" />Muy Bueno
			<input name="pregunta3txt" type="radio" value="3" />Bueno
			<input name="pregunta3txt" type="radio" value="2" />Regular
			<input name="pregunta3txt" type="radio" value="1" />Malo
			<br/><br/>
			<a>¿Recomendarias nuestra aerolinea a un amigo(a)?</a><br/>
			<input name="pregunta4txt" type="radio" value="5" />Excelente
			<input name="pregunta4txt" type="radio" value="4" />Muy Bueno
			<input name="pregunta4txt" type="radio" value="3" />Bueno
			<input name="pregunta4txt" type="radio" value="2" />Regular
			<input name="pregunta4txt" type="radio" value="1" />Malo
			<br/><br/>
			<a>¿Recibiste las intrucciones de seguridad antes de despegar?</a><br/>
			<input name="pregunta5txt" type="radio" value="5" />Excelente
			<input name="pregunta5txt" type="radio" value="4" />Muy Bueno
			<input name="pregunta5txt" type="radio" value="3" />Bueno
			<input name="pregunta5txt" type="radio" value="2" />Regular
			<input name="pregunta5txt" type="radio" value="1" />Malo
			<br/><br/>
			<a>¿Recibiste las intrucciones de seguridad antes de despegar?</a><br/>
			<input name="pregunta6txt" type="radio" value="5" />Excelente
			<input name="pregunta6txt" type="radio" value="4" />Muy Bueno
			<input name="pregunta6txt" type="radio" value="3" />Bueno
			<input name="pregunta6txt" type="radio" value="2" />Regular
			<input name="pregunta6txt" type="radio" value="1" />Malo
			<br/><br/>
			<a>¿Califica con nota de 1 a 7 nuestra aerolinea?</a><br/>
			<input name="pregunta7txt" type="radio" value="5" />Excelente
			<input name="pregunta7txt" type="radio" value="4" />Muy Bueno
			<input name="pregunta7txt" type="radio" value="3" />Bueno
			<input name="pregunta7txt" type="radio" value="2" />Regular
			<input name="pregunta7txt" type="radio" value="1" />Malo
			<br/><br/>
			<a>¿Volveras a viajar con nosotros?</a><br/>
			<input name="pregunta8txt" type="radio" value="5" />Excelente
			<input name="pregunta8txt" type="radio" value="4" />Muy Bueno
			<input name="pregunta8txt" type="radio" value="3" />Bueno
			<input name="pregunta8txt" type="radio" value="2" />Regular
			<input name="pregunta8txt" type="radio" value="1" />Malo
			<br/><br/>
			<a>¿Volveras a viajar con nosotros?</a><br/>
			<input name="pregunta9txt" type="radio" value="5" />Excelente
			<input name="pregunta9txt" type="radio" value="4" />Muy Bueno
			<input name="pregunta9txt" type="radio" value="3" />Bueno
			<input name="pregunta9txt" type="radio" value="2" />Regular
			<input name="pregunta9txt" type="radio" value="1" />Malo
			<br/><br/>
			<a>¿Volveras a viajar con nosotros?</a><br/>
			<input name="pregunta10txt" type="radio" value="5" />Excelente
			<input name="pregunta10txt" type="radio" value="4" />Muy Bueno
			<input name="pregunta10txt" type="radio" value="3" />Bueno
			<input name="pregunta10txt" type="radio" value="2" />Regular
			<input name="pregunta10txt" type="radio" value="1" />Malo
			<br/><br/>
			
			
			<input type="submit" value="Enviar Encuesta"> 
		</form>	
	</fieldset>
			
			</div><!--fin cuerpo-->
 
            <div id="pie" align="center">
			<br/><br/><br/><a>Encuesta de satifaccion de vuelo, creada por alumnos de AIEP</a>
			</div>
        </div><!-- fin contenedor -->
    </div><!--fin envoltura-->
</body>
 
</html>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
		/* if (empty($_POST["usuario"])) {
            $usuario = "Requiere un rut";
        } else {
            $usuario = $_POST["usuario"];
        } */
		
		
        if (empty($_POST["pregunta1txt"])) {
            $pregunta1txt = "0";
        } else {
            $pregunta1txt = $_POST["pregunta1txt"];
        }
        if (empty($_POST["pregunta2txt"])) {
            $pregunta2txt = "0";
        } else {
            $pregunta2txt = $_POST["pregunta2txt"];
        }
        if (empty($_POST["pregunta3txt"])) {
            $pregunta3txt = "0";
        } else {
            $pregunta3txt = $_POST["pregunta3txt"];
        }
        if (empty($_POST["pregunta4txt"])) {
            $pregunta4txt = "0";
        } else {
            $pregunta4txt = $_POST["pregunta4txt"];
        }
		if (empty($_POST["pregunta5txt"])) {
            $pregunta5txt = "0";
        } else {
            $pregunta5txt = $_POST["pregunta5txt"];
        }
		if (empty($_POST["pregunta6txt"])) {
            $pregunta6txt = "0";
        } else {
            $pregunta6txt = $_POST["pregunta6txt"];
        }
		if (empty($_POST["pregunta7txt"])) {
            $pregunta7txt = "0";
        } else {
            $pregunta7txt = $_POST["pregunta7txt"];
        }
		if (empty($_POST["pregunta8txt"])) {
            $pregunta8txt = "0";
        } else {
            $pregunta8txt = $_POST["pregunta8txt"];
        }
		if (empty($_POST["pregunta9txt"])) {
            $pregunta9txt = "0";
        } else {
            $pregunta9txt = $_POST["pregunta9txt"];
        }
		if (empty($_POST["pregunta10txt"])) {
            $pregunta10txt = "0";
        } else {
            $pregunta10txt = $_POST["pregunta10txt"];
        }

		$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS) or die("Error en la conexion");
		mysqli_select_db($con,DB_NAME) or die ("no database");
    
		$sql = "insert into encuesta values ('$iduser','$pass','$pregunta1txt','$pregunta2txt','$pregunta3txt','$pregunta4txt','$pregunta5txt','$pregunta6txt','$pregunta7txt','$pregunta8txt','$pregunta9txt','$pregunta10txt')";
		$res = mysqli_query($con,$sql);
    
		if($res){
		
        echo ("Usuario registrado");
		header('Location: /Encuesta/confirmacionEncuesta.php');
		}else{
        echo ("Usuario NO registrado");
		}		
		ob_end_flush();
		
    }
    ?>
