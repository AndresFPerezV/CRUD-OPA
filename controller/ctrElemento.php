

<?php
	
	//echo "Este es el controlador de elementos";
	require('../modelo/elementos.php');
	
	$CodigoE = isset($_POST['CodigoE']) ? $_POST['CodigoE']: NULL;
	$nombre = isset($_POST['nombre']) ? $_POST['nombre']: NULL;
	$peso = isset($_POST['peso']) ? $_POST['peso']: NULL;
	$calorias = isset($_POST['calorias']) ? $_POST['calorias']: NULL;
	
	
	if(isset($_POST['frmRegistrar']))
	{
		$modelo = new Elemento($CodigoE,$nombre,$peso,$calorias);
		$modelo->registrarElemento();
		
	}
	else if(isset($_POST['CodigoE']))
	{
		if(empty($CodigoE))
		{
			?>
			<script>
				alert('Debe ingresar el codigo del Elemento');
				location.href="../views/frmRegistroElementos.php";
			</script>
			<?php
		}
		else
		{
			$modelo = new Elemento(NULL,NULL,NULL,NULL);
			$datos = $modelo->buscarElemento($CodigoE);
			//print_r($datos);
			require_once('../views/frmActualizarElementos.php');
		}
	}else if(isset($_POST['frmActualizar']))
	{
	$modelo = new Elemento($CodigoE,$nombre,$peso,$calorias);
	$modelo->actualizarElemento();
	}
	else if(isset($_POST['frmBorrar']))
	{
	$modelo = new Elemento($CodigoE,NULL,NULL,NULL);
	$res = $modelo->borrarElemento();
	if($res)
	{
	?>
	<script>
	alert('Registro borrado');
	location.href="../views/frmRegistroElementos.php";
	</script>
	<?php
	}
	}

	
	

?>


