<?php
class cursos {
	private $pdo;
    
	public $idcursos;
	public $titulo;
	public $slug;
	public $informacion;
	public $categorias;
	public $SubCategorias;
	public $tipo;
	public $precio_curso;
	public $fecha_inicio;
	public $fecha_fin;
	public $course_modality_id;
	public $institution_id;

	


	public function __CONSTRUCT()	{
		try	{
			$this->pdo = Database::StartUp();     
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
	public function ListarCategorias(){
		try	{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * from categories_category");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)	{
			die($e->getMessage());
		}
	}

	public function ListarSubcategorias(){
		try	{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM categories_subcategory");
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

			$stm = $this->pdo->prepare("SELECT * FROM courses_coursemodality");
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
			$stm = $this->pdo ->prepare("SELECT u.idusuario,apeusu,nomusu,corrusu,clausu,tbl_perfiles_idperfil,u.activacion ,tu.id_tipo_usuario,
			des_tipo_usuario,ue.tbl_departamento_iddepartamento,dp.descdepartamento,ue.tbl_provincia_idprovincia,pr.descprovincia,ue.tbl_ciudad_idciudad,ci.descciudad,
			ue.tbl_area_idarea,ar.descarea
				 from tbl_usuario u
				 inner join tbl_usuario_empresa ue
				 on u.idusuario=ue.idusuario
				 inner  join tbl_tipo_usuario tu
				 on ue.id_tipo_usuario= tu.id_tipo_usuario
				 inner join tbl_departamento dp
				 on ue.tbl_departamento_iddepartamento=dp.iddepartamento
				 inner join tbl_provincia pr
				 on ue.tbl_provincia_idprovincia=pr.idprovincia
				 inner join tbl_ciudad ci
				 on ue.tbl_ciudad_idciudad=ci.idciudad
				 inner join tbl_area ar
				 on ue.tbl_area_idarea = ar.idarea

			    where u.idusuario  =   ?");			          

			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);

		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function Registrar(cursos $data) {
		try {
		$sql = "INSERT into courses_course(course_type_id,course_modality_id,institution_id,
		name,
		slug,
		description,
		price,
		start_date,
		end_date,
		category_id,
		sub_categories
		) 
		values(?,?,?,?,?,?,?,?,?,?)";

		$this->pdo->prepare($sql)->execute(
				array(
					$data->tipo,
					$data->course_modality_id,
					$data->institution_id,
					$data->titulo,
					$data->slug,
					$data->informacion,
					$data->precio_curso,
					$data->fecha_inicio,
					$data->fecha_fin,
					$data->categorias,
					$data->SubCategorias
					
					
					
                   
                )
			);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

		public function Registrar2(usuariosempresa $data) 	{
		try {
		$sql = "INSERT into tbl_usuario_empresa(idusuario,idempresa,id_tipo_usuario,
		tbl_departamento_iddepartamento,tbl_provincia_idprovincia,tbl_ciudad_idciudad,tbl_area_idarea) 
		values(?,?,?,?,?,?,?)";

		$this->pdo->prepare($sql)->execute(
				array( 
					$data->id_usuario_generado,
				    $data->idempresa,
					$data->tipo_usuario,
					$data->tbl_departamento_iddepartamento,
	                $data->tbl_provincia_idprovincia,
	                $data->tbl_ciudad_idciudad,
	                $data->tbl_area_idarea
                   
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
			$stm = $this->pdo ->prepare("DELETE FROM tbl_persona WHERE idusuario = ?");          
			$stm->execute(array($id));

		} catch (Exception $e) {
			die($e->getMessage());
		}
	}




}