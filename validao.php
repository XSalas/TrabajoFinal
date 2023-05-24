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
			<li><a href="#"><button class="alta">Alta</button></a></li>
			<li><a href="#"><button class="botoeditar">Afegir</button></a></li>
			<li><a href="#"><button class="botoeliminar">Borrar</button></a></li>
			<li><a href="#"><button class="alta">Modificar</button></a></li>
		</ul>
	</div>
    <div class="container">
        <div class="admin-info">
            <h2>Admin</h2>
			<img src="admin.jpg" width="50%" height="50%">
            <p>Nom: Administrador</p>
            <p>Email: admin@gmail.es</p>
            <p>Rol: Admin</p>
        </div>

        <div class="user-table">
            <h2>Lista de Usuarios</h2>
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
                    <td>Jeferson Rosas</td>
                    <td>jeferson@fjebellvitge.edu</td>
					<td>5454646K</td>
					<td> 66666666 </td>
                    <td>Estudiante</td>
                    <td>
						<button class="alta">Alta</button>
                        <button class="botoeditar">Editar</button>
                        <button class="botoeliminar">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Guillem Salas</td>
                    <td>gillemsalas@fjeclot.edu</td>
					<td>5454646K</td>
					<td> 66666666 </td>
                    <td>Estudiante</td> 
                    <td>
                        <button class="alta">Alta</button>
                        <button class="botoeditar">Editar</button>
                        <button class="botoeliminar">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Oriol Godoy</td>
                    <td>oriol@fjebellvitge.edu</td>
					<td>5454646K</td>
					<td> 66666666 </td>
                    <td>Estudiante</td>
                    <td>
                        <button class="alta">Alta</button>
                        <button class="botoeditar">Editar</button>
                        <button class="botoeliminar">Eliminar</button>
                    </td>
                </tr>
				<tr>
                    <td>4</td>
                    <td>Marta Sanchez</td>
                    <td>mrtasanches@fjeclot.edu</td>
					<td>5454646K</td>
					<td> 66666666 </td>
                    <td>Estudiante</td>
                    <td>
                        <button class="alta">Alta</button>
                        <button class="botoeditar">Editar</button>
                        <button class="botoeliminar">Eliminar</button>
                    </td>
                </tr>
				<tr>
                    <td>5</td>
                    <td>Jordi Sanchez</td>
                    <td>lqsea@fjebellvitge.edu</td>
					<td>5454646K</td>
					<td> 66666666 </td>
                    <td>Estudiante</td>
                    <td>
                        <button class="alta">Alta</button>
                        <button class="botoeditar">Editar</button>
                        <button class="botoeliminar">Eliminar</button>
                    </td>
                </tr>
				<tr>
                    <td>6</td>
                    <td>José Luis Gil</td>
                    <td>lqsea@fjebellvitge.edu</td>
					<td>5454646K</td>
					<td> 66666666 </td>
                    <td>Estudiante</td>
                    <td>
                        <button class="alta">Alta</button>
                        <button class="botoeditar">Editar</button>
                        <button class="botoeliminar">Eliminar</button>
                    </td>
                </tr>
				<tr>
                    <td>7</td>
                    <td>José Luis Gil</td>
                    <td>lqsea@fjebellvitge.edu</td>
					<td>5454646K</td>
					<td> 66666666 </td>
                    <td>Estudiante</td>
                    <td>
                        <button class="alta">Alta</button>
                        <button class="botoeditar">Editar</button>
                        <button class="botoeliminar">Eliminar</button>
                    </td>
                </tr>
				<tr>
                    <td>8</td>
                    <td>José Luis Gil</td>
                    <td>lqsea@fjebellvitge.edu</td>
					<td>5454646K</td>
					<td> 66666666 </td>
                    <td>Estudiante</td>
                    <td>
                        <button class="alta">Alta</button>
                        <button class="botoeditar">Editar</button>
                        <button class="botoeliminar">Eliminar</button>
                    </td>
                </tr>
				<tr>
                    <td>9</td>
                    <td>José Luis Gil</td>
                    <td>lqsea@fjebellvitge.edu</td>
					<td>5454646K</td>
					<td> 66666666 </td>
                    <td>Estudiante</td>
                    <td>
                        <button class="alta">Alta</button>
                        <button class="botoeditar">Editar</button>
                        <button class="botoeliminar">Eliminar</button>
                    </td>
                </tr>
				<tr>
                    <td>10</td>
                    <td>José Luis Gil</td>
                    <td>lqsea@fjebellvitge.edu</td>
					<td>5454646K</td>
					<td> 66666666 </td>
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
</body>
</html>

