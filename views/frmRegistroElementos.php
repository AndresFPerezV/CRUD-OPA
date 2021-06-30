

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
			<h3>INGRESE LOS ELEMENTOS</h3>
			
			<div class="form-group">
				<input name="CodigoE" type="text" class="form-control" placeholder="Codigo del elemento" value=""/>
				
			</div>
			
			<div class="form-group">
				<input name="nombre" type="text" class="form-control" placeholder="Nombre del elemento" value=""/>
				
			</div>
			
			<div class="form-group">
				<input name="peso" type="text" class="form-control" placeholder="peso" value=""/>
				
			</div>
			
			<div class="form-group">
				<input name="calorias" type="text" class="form-control" placeholder="calorias" value=""/>
				
			</div>
			
			<div class="form-group">
				<button class="btn btn-success" type="submit" name="frmRegistrar">Registrar</button>
				<button class="btn btn-primary" type="submit" name="frmBuscar">Buscar</button>
				<button class="btn btn-warning" type="submit" name="frmActualizar" disabled="true">Actualizar</button>
				<button class="btn btn-danger" type="submit" name="frmBorrar" disabled="true">Borrar</button>
			</div>
			
		
		</form>
		
	</div>
              
</div>
           
 
 
 
 
</body>

</html>








