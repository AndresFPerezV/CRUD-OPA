

<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" href="../css/bootstrap.css" type="text/css" />
		
	</head>
	<body>
	<table border="1">
		<tr>
		<td>CODIGO</td>
		<td>NOMBRE</td>
		<td>PESO</td>
		<td>CALORIAS</td>
		</tr>
		<?php 
			foreach($datos as $listado){
			echo '<tr>';
			echo '<td>'.$listado['CodigoE'].'</td>';
			echo '<td>'.$listado['nombre'].'</td>';
			echo '<td>'.$listado['peso'].'</td>';
			echo '<td>'.$listado['calorias'].'</td>';
			echo '<tr>';
			}

	
	
		?>
	

	<</table>
	
           
 
	
 
 
</body>

</html>








