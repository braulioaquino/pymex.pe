<?php
class usuarios {
	private $pdo;
    
	public $idusuario;

	public $nombre;
	public $apellido;
	public $dni;
	public $phone;
	public $email;
	public $locations_ubigeo_id;
	public $centro_trabajo;
	public $puesto;
	public $nivelusu;

	


	public function __CONSTRUCT()	{
		try	{
			$this->pdo = Database::StartUp();     
		}
		catch(Exception $e)	{
			die($e->getMessage());
		}
	}

	public function ListarComboDepartamento(){
		try	{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * from tbl_departamento");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)	{
			die($e->getMessage());
		}
	}
	public function ListarUbicacion(){
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
	
	public function ListarComboArea(){
		try	{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * from tbl_area");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)	{
			die($e->getMessage());
		}
	}

	public function Listar(){
		try	{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM tbl_usuario");
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
			$stm = $this->pdo ->prepare("");			          

			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);

		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function Registrar(usuarios $data) {
		try {
		$sql = "INSERT into users_user(nombre,apellido,dni,phone,email,locations_ubigeo_id,centro_trabajo,puesto,nivelusu) 
		values(?,?,?,?,?,?,?,?,?)";

		$this->pdo->prepare($sql)->execute(
				array(
					$data->nombre,
					$data->apellido,
					$data->dni,
					$data->phone,
					$data->email,
					$data->locations_ubigeo_id,
					$data->centro_trabajo,
					$data->puesto,
					$data->nivelusu
                   
                )
			);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	

	public function Actualizar($data){
		try {
			$sql = "UPDATE tbl_usuario SET 
						nomusu          = ?,
						apeusu          = ?,
						corrusu         = ?,
						clausu          = ?,
						tbl_perfiles_idperfil = ?,
						activacion          = ?
						
				    WHERE idusuario = ?";

			$this->pdo->prepare($sql)->execute(
				    array(
				    	$data->nomusu,
					    $data->apeusu,
						$data->corrusu,
						$data->clausu,
						$data->tbl_perfiles_idperfil,
						$data->estado,

						$data->idusuario,
					)
				);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
 


	public function Eliminar($id){
		try {
			$stm = $this->pdo ->prepare("DELETE FROM users WHERE id = ?");          
			$stm->execute(array($id));

		} catch (Exception $e) {
			die($e->getMessage());
		}
	}




}