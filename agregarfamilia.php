<?php
	$idfamilia 		= $_POST['idfamilia'];
	$nombrefamilia	= $_POST['nombrefamilia'];
	
		if ($idfamilia >= 5 ) {
			require("conect_db.php");
			mysql_query("INSERT INTO Familia (id_familia,nombre_familia) VALUES('".$idfamilia."','".$nombrefamilia."')");
			mysql_close($conecta);
			echo 'Se ha añadido una nueva familia';
	} else { 
		echo 'Introduzca un minimo de 5 caracteres';
	}
	
?>