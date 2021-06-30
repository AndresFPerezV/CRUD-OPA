<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" href="../css/bootstrap.css" type="text/css" />
		
	</head>
	<body>
	
<?php
			$maxpeso = isset($_POST['maxpeso']) ? $_POST['maxpeso']: NULL;

			if(isset($_POST['frmRegistrar']))
			{
			$pesomax=$maxpeso;
			}

			
			foreach($datos as $listado){
				$peso[]=$listado['peso'];
				$calorias[]=$listado['calorias'];
	
			}
			//print_r($peso);
			//print_r($calorias);


		
	
?>



<script type="text/javascript" languaje="javascript">

var pesoMaximo=<?php echo json_encode($pesomax);?>;;
var pesos=<?php echo json_encode($peso);?>;
var valores=<?php echo json_encode($calorias);?>;

//document.write(valores+"<br>");
//document.write(pesos+"<br>");
function llenarMochila(pesoMaximo, pesos, valores){
	
    let values = [];
	
    var numIter=0;
    values = pesos.map(v => Array.from({length:  pesoMaximo+1}, () => 0));
	
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
	

	//document.write(objetos+"final");
	document.write("LOS ELEMENTOS QUE SE PUEDEN LLEVAR SON: "+"<br>");
	
	for (var x = 0; x < objetos.length; x++) {
		
		if(objetos[x]==0){
			document.write("Elemento1  Peso=5  Calorias=3"+"<br>"+"<br>");
		}else{
			if(objetos[x]==1){
				document.write("Elemento2  Peso=3  Calorias=5"+"<br>");
			}else{
				if(objetos[x]==2){
					document.write("Elemento3  Peso=5  Calorias=2"+"<br>");
				}else{
					if(objetos[x]==3){
						document.write("Elemento4  Peso=1  Calorias=8"+"<br>");
					}else{
						document.write("Elemento5  Peso=2  Calorias=3"+"<br>");
					}
				}
			}
		}
		
	}

    //return objetos;
}

llenarMochila(pesoMaximo,pesos,valores);
</script>
	
 
 
</body>

</html>