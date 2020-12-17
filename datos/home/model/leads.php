<?php
class leads {
	private $pdo;
    
	public $idusuario;
	public $course_name;
	public $name;
	public $email;
	public $location;
	public $phone;
	public $status;


	public function __CONSTRUCT()	{
		try	{
			$this->pdo = Database::StartUp();     
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

	

	public function Obtener($id){
		try {
			$stm = $this->pdo ->prepare("SELECT *
				 from leads_lead 

			    where id  =   ?");			          

			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);

		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function Registrar(leads $data) {
		try {
		$sql = "INSERT into leads_lead(course_name,name,email,location,phone,status) 
		values(?,?,?,?,?,?)";

		$this->pdo->prepare($sql)->execute(
				array(
					$data->course_name,
					$data->name,
					$data->email,
				    $data->location,
					$data->phone,
					$data->status
                   
                )
			);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}


	public function Actualizar($data){
		try {
			$sql = "UPDATE leads_lead SET 
						course_name          = ?,
						email                = ?,
						location             = ?,
						phone                = ?,
						status               = ?
						
				        WHERE id = ?";

			$this->pdo->prepare($sql)->execute(
				    array(
				    	$data->course_name,
						$data->email,
						$data->location,
						$data->phone,
						$data->status,

						$data->id,
					)
				);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
 


	public function Eliminar($id){
		try {
			$stm = $this->pdo ->prepare("DELETE FROM leads_lead WHERE id = ?");          
			$stm->execute(array($id));

		} catch (Exception $e) {
			die($e->getMessage());
		}
	}




}