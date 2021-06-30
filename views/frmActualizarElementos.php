
<?php
if(count($datos) > 0)
{
	$id = $datos[0]['CodigoE'];
	$nombre = $datos[0]['nombre'];
	$peso = $datos[0]['peso'];
	$calorias = $datos[0]['calorias'];


?>



<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" href="../css/bootstrap.css" type="text/css" />
		
	</head>
	<body>


 <div class="container"> 	
 
	<div class="form-group col-md-6">
		
		<form autocomplete="off" method="post" action="../controller/ctrElemento.php">
			<h3>Registro de Elementos</h3>
			
			<div class="form-group">
				<input name="CodigoE" type="text" class="form-control" placeholder="Codigo Elemento" value="<?php echo($id) ?>"/>
				
			</div>
			
			<div class="form-group">
				<input name="nombre" type="text" class="form-control" placeholder="Nombre del elemento" value="<?php echo($nombre) ?>"/>
				
			</div>
			
			<div class="form-group">
				<input name="peso" type="text" class="form-control" placeholder="peso" value="<?php echo($peso) ?>"/>
				
			</div>
			
			<div class="form-group">
				<input name="calorias" type="text" class="form-control" placeholder="contenido calorico del elemento" value="<?php echo($calorias) ?>"/>
				
			</div>
			
			<div class="form-group">
				<button class="btn btn-success" type="submit" name="frmRegistrar" disabled="true">Registrar</button>
				<button class="btn btn-primary" type="submit" name="frmBuscar">Buscar</button>
				<button class="btn btn-warning" type="submit" name="frmActualizar" >Actualizar</button>
				<button class="btn btn-danger" type="submit" name="frmBorrar" >Borrar</button>
			</div>
			
		
		</form>
		
	</div>
              
</div>
 <?php
 }
 else          
 {
 	?>
 	
 		<script>
 			alert("Registro no encontrado");
 			location.href="../views/frmRegistroElementos.php";	
 		</script>
 	<?php
 	
 }
 
 ?>
 
</body>

</html>








