<?php
class empleos {
	private $pdo;
	
	public $course_type_id;
	public $course_modality_id;
	public $institution_id;
	public $name;
	public $duration;
	public $description;
	public $price;
	


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

			$stm = $this->pdo->prepare("SELECT * from m_departamento");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)	{
			die($e->getMessage());
		}
	}

	public function ListarComboCiudad(){
		try	{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * from m_ciudad");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)	{
			die($e->getMessage());
		}
	}

	public function ListarModalidad(){
		try	{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM jobs_jobmodality");
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

	public function ListarCategoria(){
		try	{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM categories_category");
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

			$stm = $this->pdo->prepare("SELECT * from jobs_jobtype");
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

			$stm = $this->pdo->prepare("SELECT * FROM empresas_empresa");
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
			$stm = $this->pdo ->prepare("SELECT jbs.id as jobs_id,
			empresas_empresa_idempresa, ee.name as empresa_name, jbs.status as estadojobs,
			jobs_jobtype_id,jt.name as type_jobs,
			jobs_jobmodality_id,jm.name as modality_name,
			jbs.name,description,price,duration,
			locations_ubigeo_id,lu.name as name_ubigeo,
			categories_category_id,cc.name as categoria,
			jbs.m_departamento_iddepartamento,d.iddepartamento,d.descdepartamento,
			jbs.m_provincia_idprovincia,p.idprovincia,p.descprovincia,
			jbs.m_ciudad_idciudad,c.idciudad,c.descciudad
			
				
				 FROM jobs_job jbs
				 inner join empresas_empresa ee
				 on jbs.empresas_empresa_idempresa = ee.idempresa
				 inner join jobs_jobmodality jm
				 on jbs.jobs_jobmodality_id = jm.id
				 inner join jobs_jobtype jt
				 on jbs.jobs_jobtype_id = jt.id
				 left join  locations_ubigeo lu
				 on jbs.locations_ubigeo_id = lu.id
				 inner join  categories_category cc
				 on jbs.categories_category_id = cc.id
				 inner join m_departamento d
				 on jbs.m_departamento_iddepartamento = d.iddepartamento
				 inner join m_provincia p
				 on jbs.m_provincia_idprovincia = p.idprovincia
				   inner join m_ciudad c
				 on jbs.m_ciudad_idciudad = c.idciudad

			     where jbs.id  =   ?");			          

			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);

		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function Registrar(empleos $data) {
		try {
		$sql = "INSERT into jobs_job(name,slug,duration,description,price,status,created_at,updated_at,jobs_joborigin_id,jobs_jobtype_id,jobs_jobmodality_id,
		empresas_empresa_idempresa,locations_ubigeo_id,categories_category_id,m_departamento_iddepartamento,m_provincia_idprovincia,m_ciudad_idciudad) 
		values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

		$this->pdo->prepare($sql)->execute(
				array(
					$data->name,
					$data->slug,
					$data->duration,
					$data->description,
					$data->price,
					$data->status,
					$data->created_at,
					$data->updated_at,
					$data->jobs_joborigin_id,
					$data->jobs_jobtype_id,
					$data->jobs_jobmodality_id,
					$data->empresas_empresa_idempresa,
					$data->locations_ubigeo_id,
					$data->categoria,
					$data->departamento,
					$data->provincia,
					$data->distrito
                   
                )
			);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	

	public function Actualizar($data){
		try {
			$sql = "UPDATE jobs_job SET 
						name   = ?,
						slug   = ?,
						duration  = ?,
						description  = ?,
						price  = ?,
						status  = ?,
						created_at              = ?,
						updated_at                = ?,
						jobs_joborigin_id  = ?,
						jobs_jobtype_id  = ?,
						jobs_jobmodality_id   = ?,
		                empresas_empresa_idempresa   = ?,
						categories_category_id  = ?,
						m_departamento_iddepartamento  = ?,
						m_provincia_idprovincia  = ?,
						m_ciudad_idciudad  = ?
						
				        WHERE id = ?";

			$this->pdo->prepare($sql)->execute(
				    array(
						$data->name,
						$data->slug,
						$data->duration,
						$data->description,
						$data->price,
						$data->status,
						$data->created_at,
						$data->updated_at,
						$data->jobs_joborigin_id,
						$data->jobs_jobtype_id,
						$data->jobs_jobmodality_id,
						$data->empresas_empresa_idempresa,
						$data->categoria,
						$data->departamento,
						$data->provincia,
						$data->distrito,

						$data->jobs_id,
					)
				);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
 


	public function Eliminar($id){
		try {
			$stm = $this->pdo ->prepare("DELETE FROM jobs_job WHERE id = ?");          
			$stm->execute(array($id));

		} catch (Exception $e) {
			die($e->getMessage());
		}
	}




}