<!DOCTYPE html>
<html>
<head>
    <title>Bienvenido al sistema de encuesta Air Satisfaction Survey</title>
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
                <form id="form-login" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" autocomplete="off">
                    <!--A saber, el atributo for funciona como el id.-->
                    <!--ejemplo <label for="usuario">Usuario:</label>-->
                    <!--required es nuevo en html5, si el campo está vacío te avisa, pero cuidado, no valida la información-->
                    <p><label >INGRESE RUT(sin puntos):</label></p>
                        <input name="usuario" type="text" id="usuario" placeholder="12345678-9" autofocus="" required=""></p>
 
                    <p><label>INGRESE CODIGO DE VUELO:</label></p>
                        <input name="clave" type="password" id="contrasenia" placeholder="P5638" required=""></p>
 
                    <p id="bot"><input type="submit" id="submit" name="submit" value="Ingresar" class="boton"></p>
                </form>
            </div><!--fin cuerpo-->
 
            <div id="pie" align="center">
			<br/><br/><br/><a>Encuesta de satifaccion de vuelo, creada por alumnos de AIEP</a>
			</div>
        </div><!-- fin contenedor -->
    </div><!--fin envoltura-->
</body>
 
</html>

 <?php
     session_start(); // Iniciamos session 
          if ($_SERVER["REQUEST_METHOD"] == "POST") { // comprobamos q el metodo a usar es el POST
            if (empty($_POST["usuario"])) { // preguntamos o verificamos que nuestras cajas de texto de nuestro formulario no vengan vacias 
                $name = "Requiere un Usuario"; // si estan vacias  asignamos un valor a la variable para que no generen error
            } else {
                $name = $_POST["usuario"]; // si la caja de texto del formulario tiene informacion  entonces se la asigna a la variable $name
            }
            if (empty($_POST["clave"])) {  // lo mismo que ocurre con la caja de texto usuario
                $password = "Requiere una clave";
            } else {
                $password = $_POST["clave"];
            }
			define('DB_SERVER','localhost');
			define('DB_NAME','contenedor_encuestas_air');
			define('DB_USER','root');
			define('DB_PASS','');
		$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS);
		mysqli_select_db($con,DB_NAME);
		
    
    $con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS);
    mysqli_select_db($con,DB_NAME);
    
    $sql = "select * from cliente_valido where Rut='$name' and Codigo='$password'";
    $res = mysqli_query($con,$sql);
    $count = 0;
    while($row = mysqli_fetch_object($res)){
        $count++;
        $result =$row;
    }
    if($count ==1){
		$_SESSION['usuarioactivo'] = $name;
		
			$con2 = mysqli_connect(DB_SERVER,DB_USER,DB_PASS);
			mysqli_select_db($con2,DB_NAME);
			$sql2 = "select * from encuesta where Rut='$name' and Codigo='$password'";
			$res2 = mysqli_query($con2,$sql2);
			$cont =0;
				while($row = mysqli_fetch_object($res2)){
					$cont++;
					$result =$row;
				}
				if($cont ==0){
					header('Location: /Encuesta/llenarEncuesta.php');
				}else{
					header('Location: /Encuesta/confirmacionEncuestaRealizada.php');
				}
	}else{
		header('Location: /Encuesta/index.php');
	}
        }
  ?>