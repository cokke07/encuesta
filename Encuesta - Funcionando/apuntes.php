$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS) or die("Error en la conexion");
		mysqli_select_db($con,DB_NAME) or die ("no database");
    
		$sql = "select * from encuesta where Rut='$iduser' && Codigo='$pass'";
		$res = mysqli_query($con,$sql);
    
		if($res){
		
        echo ("Usuario registrado");
		header('Location: /Encuesta/confirmacionEncuesta.php');
		}else{
        echo ("Usuario NO registrado");
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
		----------------------------------------------------------------------funcionando--------------------
		$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS) or die("Error en la conexion");
		mysqli_select_db($con,DB_NAME) or die ("no database");
    
		$sql = "select * from encuesta where Rut='$iduser' && Codigo='$pass'";
		$res = mysqli_query($con,$sql);
    
		if($res){
		
        //echo ("Usuario registrado");
		header('Location: /Encuesta/confirmacionEncuesta.php');
		}else{
        //echo ("Usuario NO registrado");
		}
		-----------------------------------------------------------------------------------
		<script>
window.alert("Texto a mostrar");
alert("Texto a mostrar");
</script>
----------------------------
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS);
		mysqli_select_db($con,DB_NAME);
		$sql = "select * from encuesta where Rut='$name' and Codigo='$password'";
		$res = mysqli_query($con,$sql);
		$cont =0;
		/*
			if($res){
				echo "entre...";
		   		//header('Location: /Encuesta/confirmacionEncuestaRealizada.php');
			}*/
		while($row = mysqli_fetch_object($res)){
        $cont++;
        $result =$row;
    }
    if($count ==0){
		
		header('Location: /Encuesta/llenarEncuesta.php');
	}else{
    	header('Location: /Encuesta/confirmacionEncuestaRealizada.php');
    }
		
		