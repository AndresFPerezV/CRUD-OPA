<?php


	$consulta1 = isset($_GET['consulta1']) ? $_GET['consulta1']: NULL;
	require('../modelo/elemento.php');
	//echo ($consulta1);
	//print_r($_GET);

	$modelo=new Proveedor(NULL,NULL,NULL,NULL);

	if($consulta1=='listado1')
	{
		$datos=$modelo->listarElementos();
		require('../views/listadoElementos.php');
		
		//print_r($datos);
	}
?>


