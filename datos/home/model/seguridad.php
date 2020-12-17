<?php
class seguridad {
	private $pdo;
    
	public $idusuario;

	public $nombre;
	public $apellido;
	public $email;
	public $contrasena;
	public $tipo;
	public $numero;
	public $celular;
	public $localidad;
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
		$sql = "INSERT into users(name,email,password,apellidos,tipo_doc,documento,telefono,ciudad,nivelusu) 
		values(?,?,?,?,?,?,?,?,?)";

		$this->pdo->prepare($sql)->execute(
				array(
					$data->nombre,
					$data->email,
				    $data->contrasena,
					$data->apellido,
					$data->tipo,
					$data->numero,
					$data->celular,
					$data->localidad,
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