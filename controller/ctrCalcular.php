<?php
	
	
	require('../modelo/elemento.php');
	

	$modelo=new Elemento(NULL,NULL,NULL,NULL);
	$datos=$modelo->listarElementos();
		require('../views/Resultado.php');
		
		//print_r($datos);
		
	
			
			foreach($datos as $listado){
			$codigo[]=$listado['CodigoE'];

			}

			$matriz=array(
				array(0)
			);

			

			
			//print_r($codigo);
	
	

?>


