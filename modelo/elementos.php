
<?php
	//cear en en la carpeta modelo el archivo proveedor.php
	require('../db/Conectar.php');
	
	class Proveedor{
		private $idProveedor;
		private $nombre;
		private $telefono;
		private $direccion;
		private $conexionDB;
		
		public function __construct($id, $nom, $tel, $dir){
			$this->conexionDB = new Conectar();
			$this->idProveedor = $id;
			$this->nombre = $nom;
			$this->telefono = $tel;
			$this->direccion = $dir;
		}
		
		public function __destruct(){
			$this->conexionDB = NULL;
		}
		
		public function registrarProveedor(){
			try{
				$sql = "INSERT INTO proveedor (idProveedor,nombre,telefono,direccion) VALUES (?,?,?,?)";
				
				$stmt = $this->conexionDB->connect()->prepare($sql);
				
				$stmt->bindParam(1, $this->idProveedor);
				$stmt->bindParam(2, $this->nombre);
				$stmt->bindParam(3, $this->telefono);
				$stmt->bindParam(4, $this->direccion);
				
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
		
		
		public function buscarProveedor($id){
			$sql = "select * from proveedor where idProveedor = $id";
			$query = $this->conexionDB->connect()->prepare($sql);
			$query->execute();
			$result = $query->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}

		public function borrarProveedor(){
			$sql = "DELETE from proveedor WHERE idProveedor = $this->idProveedor";
			$query = $this->conexionDB->connect()->prepare($sql);
			$query->execute();
			return $query;
		}

		public function actualizarProveedor(){
			try
			{
			$sql = "UPDATE proveedor SET
			nombre = ?,
			telefono = ?,
			direccion = ?
			WHERE idProveedor = $this->idProveedor";
			$query = $this->conexionDB->connect()->prepare($sql);
			$query->execute(array(
			$this->nombre,
			$this->telefono,
			$this->direccion
			));
			?>
			<script>
			alert('Registro actualizado');
			location.href="../views/frmRegistroProveedores.php";
			</script>
			<?php
			}
			catch(Exception $e)
			{
			die($e->getMessage());
			}
		}

		public function listarProveedores(){
			$sql="select * from proveedor";
			$query=$this->conexionDB->connect()->prepare($sql);
			$query->execute();
			$result = $query->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}
	
	
	}
	
	
?>



