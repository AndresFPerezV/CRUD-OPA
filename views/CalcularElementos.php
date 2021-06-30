<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" href="../css/bootstrap.css" type="text/css" />
		
	</head>
	<body>


 <div class="container"> 	
 
	<div class="form-group col-md-6">
		
		<form autocomplete="off" method="post" action="../controller/ctrCalcular.php">
			<h3>INGRESE EL MINIMO DE CALORIAS</h3>

            <div class="form-group">
				<input name="mcalorias" type="text" class="form-control" placeholder="Calorias Minimas" value=""/>
				
			</div>
			<h3>INGRESE EL PESO MAXIMO</h3>
			<div class="form-group">
				<input name="maxpeso" type="text" class="form-control" placeholder="Peso maximo" value=""/>
				
			</div>
			
			
			<div class="form-group">
				<button class="btn btn-success" type="submit" name="frmRegistrar">ENVIAR</button>
				
			</div>
			
		
		</form>
		
	</div>
              
</div>
           
 
 
 
 
</body>

</html>
