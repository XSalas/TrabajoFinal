<?php
session_start();

if (
  !isset($_SESSION["respuesta1"]) || $_SESSION["respuesta1"] != "admin" ||
  !isset($_SESSION["respuesta2"]) || $_SESSION["respuesta2"] != "1234"
) {
  // En cas contrari torna a login php
  header("Location: login.php");
  exit();
}

// Check if the button for "Profes" or "Alumnos" is clicked
if (isset($_GET['table'])) {
  $selectedTable = $_GET['table'];
} else {
  $selectedTable = "alumnos"; // Default table
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>LA NET</title>
    <link rel="stylesheet" type="text/css" href="ASTIL2.css">
</head>
<body>
   <h1>La NET del Profe</h1>
	<div id="barratheadmin">
		<ul>
			<li><a href="?table=profes"><button class="alta">Profes</button></a></li>
			<li><a href="?table=alumnos"><button class="alta">Alumnos</button></a></li>
			<li><a href="#"><button class="botoeditar">Afegir</button></a></li>
			<li><a href="#"><button class="botoeliminar">Borrar</button></a></li>
			<li><a href="#"><button class="alta">Modificar</button></a></li>
		</ul>
	</div>

	<?php if ($selectedTable === "profes"): ?>
		<div class="container">
			<div class="user-table">
				<h2>Lista de Profes</h2>
				<table>
					<tr>
						<th>ID</th>
						<th>Nombre</th>
						<th>Email</th>
						<th>DNI/NIE</th>
						<th>Telefono</th>
						<th>Rol</th>
						<th>Acciones</th>
					</tr>
					<tr>
						<td>1</td>
						<td>Profesor 1</td>
						<td>profesor1@example.com</td>
						<td>1234567890</td>
						<td>1234567890</td>
						<td>Profesor</td>
						<td>
							<button class="alta">Alta</button>
							<button class="botoeditar">Editar</button>
							<button class="botoeliminar">Eliminar</button>
						</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Profesor 2</td>
						<td>profesor2@example.com</td>
						<td>0987654321</td>
						<td>0987654321</td>
						<td>Profesor</td>
						<td>
							<button class="alta">Alta</button>
							<button class="botoeditar">Editar</button>
							<button class="botoeliminar">Eliminar</button>
						</td>
					</tr>
				</table>
			</div>
		</div>
	<?php else: ?>
		<div class="container">
			<div class="admin-info">
				<h2>Admin</h2>
				<img src="admin.jpg" width="50%" height="50%">
				<p>Nom: Administrador</p>
				<p>Email: admin@gmail.es</p>
				<p>Rol: Admin</p>
			</div>
	
			<div class="user-table">
				<h2>Lista de Alumnos</h2>
				<table>
					<tr>
						<th>ID</th>
						<th>Nombre</th>
						<th>Email</th>
						<th>DNI/NIE</th>
						<th>Telefono</th>
						<th>Rol</th>
						<th>Acciones</th>
					</tr>
					<tr>
						<td>1</td>
						<td>Guillem Salas</td>
						<td>jeferson@fjebellvitge.edu</td>
						<td>5454646K</td>
						<td>66666666</td>
						<td>Estudiante</td>
						<td>
							<button class="alta">Alta</button>
							<button class="botoeditar">Editar</button>
							<button class="botoeliminar">Eliminar</button>
						</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Jeferson Rosas</td>
						<td>gillemsalas@fjeclot.edu</td>
						<td>5454646K</td>
						<td>66666666</td>
						<td>Estudiante</td> 
						<td>
							<button class="alta">Alta</button>
							<button class="botoeditar">Editar</button>
							<button class="botoeliminar">Eliminar</button>
						</td>
					</tr>
				</table>
			</div>
		</div>
	<?php endif; ?>

</body>
</html>

