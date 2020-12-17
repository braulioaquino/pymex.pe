<?php
class instituciones {
	private $pdo;
    
				public $idinstituciones;  
				
				public $institution_type_id;  
				public $ubigeo_id;  
				public $name;  
				public $business_name;  
				public $ruc; 
				public $legal_address;
				public $phone;  
				public $email;  
				public $web_site;  
				public $slug;
				public $general_information;  
				public $created_at; 
				public $updated_at;
	
	public function __CONSTRUCT()	{
		try	{
			$this->pdo = Database::StartUp();     
		}
		catch(Exception $e)	{
			die($e->getMessage());
		}
	}

	public function ListarInstituciontipo(){
		try	{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * from institutions_institutiontype");
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



	public function Obtener($id){
		try {
			$stm = $this->pdo ->prepare("SELECT ii.id as id_inst,institution_type_id,ity.name as nombre_tipo, ubigeo_id,lu.name as name_ubigeo,
			ii.name,business_name,ruc,
			legal_address,phone,email,web_site,
			ii.slug as slug_institucion,general_information,created_at,updated_at
			
			from institutions_institution ii
			left join institutions_institutiontype ity
			on ii.institution_type_id = ity.id
			left join locations_ubigeo lu
			on ii.ubigeo_id = lu.id
			WHERE ii.id = ? ");			          

			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);

		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function Registrar(instituciones $data) {
		try {
		$sql = "INSERT into institutions_institution(institution_type_id,ubigeo_id,
		name,
		business_name,
		ruc,
		legal_address,
		phone,
		email,
		web_site,
		slug,
		general_information,
		created_at,
		updated_at

		
		) 
		values(?,?,?,?,?,?,?,?,?,?,?,?,?)";

		$this->pdo->prepare($sql)->execute(
				array(
					$data->institution_type_id,
					$data->ubigeo_id,
					$data->name,
					$data->business_name,
					$data->ruc,
					$data->legal_address,
					$data->phone,
					$data->email,
					$data->web_site,
					$data->slug,
					$data->general_information,
					$data->created_at, 
					$data->updated_at


                   
                )
			);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}


	public function Actualizar($data){
		try {
			$sql = "UPDATE institutions_institution SET 
					institution_type_id = ?,
					ubigeo_id  = ?,
					name      = ?,
					business_name  = ?,
					ruc = ?,
					legal_address   = ?,
					phone   = ?,
					email   = ?,
					web_site   = ?,
					slug   = ?,
					general_information  = ?,
					created_at  = ?,
					updated_at  = ?
						
				    WHERE id = ?";

			$this->pdo->prepare($sql)->execute(
				    array(
							$data->institution_type_id,
							$data->ubigeo_id,
							$data->name,
							$data->business_name,
							$data->ruc,
							$data->legal_address,
							$data->phone,
							$data->email,
							$data->web_site,
							$data->slug,
							$data->general_information,
							$data->created_at, 
							$data->updated_at,

						 $data->idinstituciones,
					)
				);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
 


	public function Eliminar($id){
		try {
			$stm = $this->pdo ->prepare("DELETE FROM institutions_institution WHERE id = ?");          
			$stm->execute(array($id));

		} catch (Exception $e) {
			die($e->getMessage());
		}
	}




}