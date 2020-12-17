<?php
class empresas{
	private $pdo;
	
	public $nombre;
	public $ruc;
	public $telefono;
	public $web;
	public $tipo;
	public $idempresa;
	public $business_name;
	


	public function __CONSTRUCT()	{
		try	{
			$this->pdo = Database::StartUp();     
		}
		catch(Exception $e)	{
			die($e->getMessage());
		}
	}

	public function ListarModalidad(){
		try	{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM courses_coursemodality");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)	{
			die($e->getMessage());
		}
	}
	public function Listarubigeo(){
		try	{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM locations_ubigeo");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)	{
			die($e->getMessage());
		}
	}

	public function ListarJobstipo(){
		try	{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * from empresas_empresatype");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)	{
			die($e->getMessage());
		}
	}

	public function ListarAuthor(){
		try	{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM institutions_institution");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)	{
			die($e->getMessage());
		}
	}

	public function ListarComboTipoUsuario(){
		try	{
			$result = array();

			// $stm = $this->pdo->prepare("SELECT * from tbl_tipo_usuario");
			$stm = $this->pdo->prepare("SELECT * from tbl_tipo_usuario order by id_tipo_usuario desc limit 1");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)	{
			die($e->getMessage());
		}
	}
	

	public function Obtener($id){
		try {
			$stm = $this->pdo ->prepare("SELECT idempresa,ubigeo_id,lu.name,ee.name as nombre_empresa,business_name,ruc,legal_address,phone,email,web_site,general_information,empresas_empresatype_id,et.name as empresa_tipo
			FROM empresas_empresa ee
			inner join empresas_empresatype et
			on ee.empresas_empresatype_id = et.id
			left join locations_ubigeo lu
			on ee.ubigeo_id = lu.id
			where idempresa = ?");			          

			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);

		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function Registrar(empresas $data) {
		try {
		$sql = "INSERT into empresas_empresa(ubigeo_id,name,business_name,ruc,legal_address,phone,email,web_site,general_information,empresas_empresatype_id) 
		values(?,?,?,?,?,?,?,?,?,?)";

		$this->pdo->prepare($sql)->execute(
				array(
					$data->ubicacion,
					$data->nombre_negocio,
					$data->nombre,
					$data->ruc,
					$data->direccion,
					$data->telefono,
					$data->correo,
					$data->web,
					$data->informacion,
					$data->tipo
					
                   
                )
			);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}


	public function Actualizar($data){
		try {
			$sql = "UPDATE empresas_empresa SET 
			            ubigeo_id          = ?,
						name          = ?,
						business_name  =?,
						ruc          = ?,
						legal_address = ?,
						phone         = ?,
						email       =?,
						web_site      = ?,
						general_information =?,
						empresas_empresatype_id  = ?
						
				    WHERE idempresa = ?";

			$this->pdo->prepare($sql)->execute(
				    array(
						$data->ubicacion,
						$data->nombre,
						$data->nombre_negocio,
						$data->ruc,
						$data->direccion,
						$data->telefono,
						$data->correo,
						$data->web,
						$data->informacion,
						$data->tipo,
					

						$data->idempresa,
					)
				);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
 


	public function Eliminar($id){
		try {
			$stm = $this->pdo ->prepare("DELETE FROM empresas_empresa WHERE idempresa = ?");          
			$stm->execute(array($id));

		} catch (Exception $e) {
			die($e->getMessage());
		}
	}




}