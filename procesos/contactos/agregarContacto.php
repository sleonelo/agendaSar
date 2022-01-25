<?php 

	require_once "../../clases/Contactos.php";
	$Contactos = new Contactos();

	$datos = array(
				"idCategoria" => $_POST['idCategoriaSelect'],
				"nombre" => $_POST['nombre'],
				"provincia" => $_POST['provincia'],
				"departamento" => $_POST['departamento'],
				"telefono" => $_POST['telefono'],
				"responsable" => $_POST['responsable'],
				"descripcion_tc" => $_POST['descripcion_tc']
					);

	echo $Contactos->agregarContacto($datos);
 ?>