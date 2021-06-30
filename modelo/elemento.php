
<?php
	//cear en en la carpeta modelo el archivo proveedor.php
	require('../db/Conectar.php');
	
	class Elemento{
		private $CodigoE;
		private $nombre;
		private $peso;
		private $calorias;
		private $conexionDB;
		
		public function __construct($id, $nom, $pes, $cal){
			$this->conexionDB = new Conectar();
			$this->CodigoE = $id;
			$this->nombre = $nom;
			$this->peso = $pes;
			$this->calorias = $cal;
		}
		
		public function __destruct(){
			$this->conexionDB = NULL;
		}
		
		public function registrarElemento(){
			try{
				$sql = "INSERT INTO elemento (CodigoE,nombre,peso,calorias) VALUES (?,?,?,?)";
				
				$stmt = $this->conexionDB->connect()->prepare($sql);
				
				$stmt->bindParam(1, $this->CodigoE);
				$stmt->bindParam(2, $this->nombre);
				$stmt->bindParam(3, $this->peso);
				$stmt->bindParam(4, $this->calorias);
				
				//Ejecutar la sentencia
				$stmt->execute();
			}
			catch(Exception $error)
			{
				die ("Se produjo un error: $error");
			}
			
			if(isset($stmt))
			{
				echo "Registro almacenado";
				exit();
			}
			else
			{
				echo "Hay problemas con la sentencia SQL";
			}
		}
		
		
		public function buscarElemento($id){
			$sql = "select * from elemento where CodigoE = $id";
			$query = $this->conexionDB->connect()->prepare($sql);
			$query->execute();
			$result = $query->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}

		public function borrarElemento(){
			$sql = "DELETE from elemento WHERE CodigoE = $this->CodigoE";
			$query = $this->conexionDB->connect()->prepare($sql);
			$query->execute();
			return $query;
		}

		public function actualizarElemento(){
			try
			{
			$sql = "UPDATE CodigoE SET
			nombre = ?,
			peso = ?,
			calorias = ?
			WHERE CodigoE = $this->CodigoE";
			$query = $this->conexionDB->connect()->prepare($sql);
			$query->execute(array(
			$this->nombre,
			$this->peso,
			$this->calorias
			));
			?>
			<script>
			alert('Registro actualizado');
			location.href="../views/frmRegistroElementos.php";
			</script>
			<?php
			}
			catch(Exception $e)
			{
			die($e->getMessage());
			}
		}

		public function listarElementos(){
			$sql="select * from elementos";
			$query=$this->conexionDB->connect()->prepare($sql);
			$query->execute();
			$result = $query->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}
	
	
	}
	
	
?>



