<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>clases domingo</title>
</head>
<body>
	<h1>Mi Perfil</h1>
	<table border="1">
		<thead>
			<tr>
				<th>Nombres</th>
				<th>Apellidos</th>
				<th>Fecha de Nacimiento</th>
				<th>DNI</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Omar Jesus</td>
				<td>Fernandez Zea</td>
				<td>29 de Mayo de 1990</td>
				<td>46636118</td>
			</tr>
		</tbody>
	</table>

	<?php 
		//$fechaactual=date('Y');
		//$fechanac=1990
		//echo $edadactual=$fechactual-$fechanac;
		echo "<br>";
		$añoactual=2015;
		$añodenacimiento=1990;
		$edadactual=$añoactual-$añodenacimiento;
		echo "Edad Actual: ";
		echo $edadactual;
	 ?>
</body>
</html>