<?php
	$db = new mysqli('localhost', 'jesus', '123', 'InfoMx');
	if($db->connect_errno > 0){
		echo "<script>
	 					alert('usuario y contraseña son incorrecto')
					</script>";
   	echo "<script>
						window.location='index.html';
					</script>";
    die('Imposible conectar [' . $db->connect_error . ']');
}else{
      // echo "<script>alert('entro');</script>";
}
?>
