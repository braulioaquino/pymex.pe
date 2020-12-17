<?php
class empleos_tipo {
	private $pdo;
	
	public $idtipoempleos;
	public $name;
	public $slug;
	


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
	public function ListarCursotipo(){
		try	{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * from courses_coursetype");
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
			$stm = $this->pdo ->prepare("SELECT id,name,slug 
			from jobs_jobtype 
			where  id=  ?");			          

			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);

		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function Registrar(empleos_tipo $data) {
		try {
		$sql = "INSERT into jobs_jobtype(name,slug) 
		values(?,?)";

		$this->pdo->prepare($sql)->execute(
				array(
					$data->name,
					$data->slug
                   
                )
			);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}


	public function Actualizar($data){
		try {
			$sql = "UPDATE jobs_jobtype SET 
							name          = ?,
						    slug          = ?
						
				            WHERE id = ?";

			$this->pdo->prepare($sql)->execute(
				    array(
						$data->name,
					    $data->slug,

						$data->id,
					)
				);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
 


	public function Eliminar($id){
		try {
			$stm = $this->pdo ->prepare("DELETE FROM tbl_persona WHERE idusuario = ?");          
			$stm->execute(array($id));

		} catch (Exception $e) {
			die($e->getMessage());
		}
	}




}