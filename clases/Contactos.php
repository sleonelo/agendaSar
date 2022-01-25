<?php 
	require_once "Conexion.php";

	class Contactos extends Conexion {
		public function agregarContacto($datos) {
			$conexion = Conexion::conectar();

			$sql = "INSERT INTO t_contactos (id_categoria,
											nombre,
											provincia,
											departamento,
											telefono,
											responsable,
											descripcion_tc)
					VALUES ( ?, ?, ?, ?, ?, ?, ? )";
			$query = $conexion->prepare($sql);
			$query->bind_param('issssss', $datos['idCategoria'],
										 $datos['nombre'],
										 $datos['provincia'],
										 $datos['departamento'],
										 $datos['telefono'],
										 $datos['responsable'],
										 $datos['descripcion_tc']);
			$respuesta = $query->execute();
			return $respuesta;
		}

		public function eliminarContacto($idContacto) {
			$conexion = Conexion::conectar();

			$sql = "DELETE FROM t_contactos WHERE id_contacto = ?";
			$query = $conexion->prepare($sql);
			$query->bind_param('i', $idContacto);
			$respuesta = $query->execute();
			return $respuesta;
		}

		public function obtenerDatosContacto($idContacto) {
			$conexion = Conexion::conectar();

			$sql = "SELECT  id_contacto,
							id_categoria,
							nombre,
							provincia,
							departamento,
							telefono,
							responsable,
							descripcion_tc
							 
					FROM t_contactos 
					WHERE id_contacto = '$idContacto'";
			$result = mysqli_query($conexion, $sql);

			$contacto = mysqli_fetch_array($result);

			$datos = array(
				"id_contacto" => $contacto['id_contacto'],
				"id_categoria" => $contacto['id_categoria'],
				"nombre" => $contacto['nombre'],
				"provincia" => $contacto['provincia'],
				"departamento" => $contacto['departamento'],
				"telefono" => $contacto['telefono'],
				"responsable" => $contacto['responsable'],
				"descripcion_tc" => $contacto['descripcion_tc'] 
					);
			return $datos;
		}

		public function actualizarContacto($datos) {
			$conexion = Conexion::conectar();

			$sql = "UPDATE t_contactos SET id_categoria = ?, 
										   nombre = ?,
										   provincia = ?,
										   departamento = ?,
										   telefono = ?,
										   responsable = ?,
										   descripcion_tc = ?
					WHERE id_contacto = ?";
			$query = $conexion->prepare($sql);
			$query->bind_param('issssssi', $datos['idCategoria'],
										  $datos['nombre'],
										  $datos['provincia'],
										  $datos['departamento'],
										  $datos['telefono'],
										  $datos['responsable'],
										  $datos['descripcion_tc'],
										  $datos['idContacto']);
			$respuesta = $query->execute();
			return $respuesta;
		}
	}

 ?>