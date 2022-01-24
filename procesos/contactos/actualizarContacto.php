<?php 

	require_once "../../clases/Contactos.php";
	$Contactos = new Contactos();

	$datos = array(
				"idContacto" => $_POST['idContactoU'],
				"nombre" => $_POST['nombreU'],
				"provincia" => $_POST['provinciaU'],
				"departamento" => $_POST['departamentoU'],
				"telefono" => $_POST['telefonoU'],
				"responsable" => $_POST['responsableU'],
				"descripcion_tc" => $_POST['descripcion_tcU'],
				"idCategoria" => $_POST['idCategoriaSelectU']
					);

	echo $Contactos->actualizarContacto($datos);
 ?>