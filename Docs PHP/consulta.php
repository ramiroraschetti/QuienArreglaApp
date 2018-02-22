<?php
include('functions.php');
$mail=$_GET['mail'];
$contrasena=$_GET['contrasena'];


if($resultset=getSQLResultSet("SELECT nombreCompleto FROM usuarios WHERE mail='$mail' AND contrasena='$contrasena'")){
	while ($row = $resultset->fetch_array(MYSQLI_NUM)){
		echo json_encode($row);
	}
}

?>


