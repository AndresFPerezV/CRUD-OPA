

<?php
	//crear ctrProveedor.php en la carpeta controller
	//echo "Este es el controlador de proveedor";
	require('../modelo/elementos.php');
	
	$idProveedor = isset($_POST['idProveedor']) ? $_POST['idProveedor']: NULL;
	$nombre = isset($_POST['nombre']) ? $_POST['nombre']: NULL;
	$telefono = isset($_POST['telefono']) ? $_POST['telefono']: NULL;
	$direccion = isset($_POST['direccion']) ? $_POST['direccion']: NULL;
	
	
	if(isset($_POST['frmRegistrar']))
	{
		$modelo = new Proveedor($idProveedor,$nombre,$telefono,$direccion);
		$modelo->registrarProveedor();
		
	}
	else if(isset($_POST['frmBuscar']))
	{
		if(empty($idProveedor))
		{
			?>
			<script>
				alert('Debe ingresar el id del proveedor');
				location.href="../views/frmRegistroProveedores.php";
			</script>
			<?php
		}
		else
		{
			$modelo = new Proveedor(NULL,NULL,NULL,NULL);
			$datos = $modelo->buscarProveedor($idProveedor);
			//print_r($datos);
			require_once('../views/frmActualizarProveedores.php');
		}
	}else if(isset($_POST['frmActualizar']))
	{
	$modelo = new Proveedor($idProveedor,$nombre,$telefono,$direccion);
	$modelo->actualizarProveedor();
	}
	else if(isset($_POST['frmBorrar']))
	{
	$modelo = new Proveedor($idProveedor,NULL,NULL,NULL);
	$res = $modelo->borrarProveedor();
	if($res)
	{
	?>
	<script>
	alert('Registro borrado');
	location.href="../views/frmRegistroProveedores.php";
	</script>
	<?php
	}
	}

	
	

?>


