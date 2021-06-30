<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" href="../css/bootstrap.css" type="text/css" />
		
	</head>
	<body>
	
<?php 
			
			foreach($datos as $listado){
				$peso[]=$listado['peso'];
				$calorias[]=$listado['calorias'];
	
			}
			print_r($peso);
			print_r($calorias);
		
	
?>



<script type="text/javascript" languaje="javascript">

var pesoMaximo=10;
var pesos=<?php echo json_encode($peso);?>;
var valores=<?php echo json_encode($calorias);?>;
//document.write("HOLA MUNDOOOOOOOOO  nose  "+"<br>");
//document.write(valores+"<br>");
//document.write(pesos+"<br>");


 function llenarMochila(pesoMaximo, pesos, valores){
	//document.write("HOLA MUNDOOOOOOOOO  nose  "+"<br>");
    let values = [];
	//document.write("HOLA MUNDOOOOOOOOO check "+"<br>");
    //TABLA DE RESULTADOS INTERMEDIOS: Valores máximos
    var numIter=0;
    values = pesos.map(v => Array.from({length:  pesoMaximo+1}, () => 0));
	//document.write("HOLA MUNDOOOOOOOOO  nose  "+"<br>");
    for (let i=1; i<pesos.length; i++) {
        numIter++;
        for (let j=1; j<=pesoMaximo; j++){
            numIter++;
            if (i===1) {
                if (j>=pesos[i]) values[i][j] = valores[i];
            } else if (j<pesos[i]) {
                values[i][j] = values[i-1][j];
            } else {
                values[i][j] = Math.max(values[i-1][j], valores[i] + values[i-1][j-pesos[i]]);
            }
        }
    }
    //BUCLE VORAZ
    let objetos = [];
    let j = pesoMaximo;
    for (let i=pesos.length-1; i>0; i--){
        numIter++;
        if (values[i][j] !== values[i-1][j] && values[i][j] === values[i-1][j-pesos[i]] + valores[i]){
			//document.write(pesos[ï]+values[i][j]+"Respuesta");
            objetos.push(i);
            j -= pesos[i];
        }
    }

	document.write(objetos+"final");
	
    //return objetos;
}
//document.write("HOLA MUNDOOOOOOOOO");
llenarMochila(pesoMaximo,pesos,valores);
</script>
	
 
 
</body>

</html>