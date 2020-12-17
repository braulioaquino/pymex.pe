<?php
class cursos {
	private $pdo;
    
	public $idcurso;
	public $titulo;
	public $slug;
	public $informacion;
	public $categorias;
	public $SubCategorias;
	public $tipo;
	public $precio_curso;
	public $cost_type;
	public $status;  
	public $created_at;  
	public $updated_at;
	public $duracion_curso;
	public $fecha_inicio;
	public $fecha_fin;
	public $course_modality_id;
	public $institution_id;
	public $txtSyllabus;

	public $methodology;          
	public $payment_method;   
	public $periodo;          
	public $moneda; 

	


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

			$stm = $this->pdo->prepare(" SELECT * FROM categories_subcategory ORDER BY name ASC");
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
	public function ListarAuthor(){
		try	{
			$result = array();

			$stm = $this->pdo->prepare("SELECT id,name FROM institutions_institution ORDER BY name ASC ");
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
					$stm = $this->pdo ->prepare("SELECT cur.id as idcurso,course_type_id,course_modality_id,institution_id,cur.cost_type,
					cur.name as nombre_curso ,cur.slug as slug_curso,cur.duration,periodo,description,syllabus,sub_categories,methodology,payment_method,
															price,tipomoneda,start_date,end_date,category_id,sub_categories,cur.status,
					cm.id as id_modalidad,cm.name  as nombre_modalidad,cc.id as id_categoria,cc.name as nombre_categoria,
								sc.id as id_subcategoria,sc.name as nombre_subcategoria,
								cct.id as id_cursotipo,cct.name as nombre_cursotipo,
					ins.id as id_author,  ins.name as nombre_author
					
						from courses_course  cur
						left join courses_coursemodality cm
						on cur.course_modality_id = cm.id
									left join categories_category cc
									on cur.category_id = cc.id
									left join categories_subcategory sc
									on cur.sub_categories = sc.id
									left join courses_coursetype cct
									on cur.course_type_id = cct.id
						left join institutions_institution ins
									on cur.institution_id = ins.id
						where  cur.id    =  ?");			          

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
		duration,
		periodo,
		description,
		syllabus,	
		price,
		tipomoneda,
		methodology,
		payment_method,
		cost_type,
		status,
		start_date,
		end_date,
		created_at,
		updated_at,
		category_id,
		sub_categories
		) 
		values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

		$this->pdo->prepare($sql)->execute(
				array(
					$data->tipo,
					$data->course_modality_id,
					$data->institution_id,
					$data->titulo,
					$data->slug,
					$data->duracion_curso,
					$data->periodo,
					$data->informacion,
					$data->syllabus,
					$data->precio_curso,
					$data->moneda,
					$data->methodology,
					$data->payment_method,
					$data->cost_type,
					$data->status,
					$data->fecha_inicio,
					$data->fecha_fin,
					$data->created_at, 
					$data->updated_at, 
					$data->categorias,
					$data->SubCategorias
					
					
					
                   
                )
			);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}


	public function Actualizar($data){
		try {
			$sql = "UPDATE courses_course SET 
						course_type_id          = ?,
						course_modality_id      = ?,
						institution_id          = ?,
						name                    = ?,
						slug                    = ?,
						duration                = ?,
						periodo                 = ?,
						description             = ?,
						syllabus                = ?,
						price                   = ?,
						tipomoneda              = ?,
						status                  = ?,
						start_date              = ?,
						end_date                = ?,
						methodology             = ?,
						payment_method          = ?,
						cost_type               = ?,
						category_id             = ?,
						sub_categories          = ?
						
				    WHERE id = ?";

			$this->pdo->prepare($sql)->execute(
				    array(
				    $data->tipo,
						$data->course_modality_id,
						$data->institution_id,
						$data->titulo,
						$data->slugedit,
						$data->duracion_curso,
						$data->periodo,
						$data->informacion,
						$data->syllabus,
						$data->precio_curso,
						$data->moneda,
						$data->status,
						$data->fecha_inicio,
						$data->fecha_fin,
						$data->methodology,
						$data->payment_method,
						$data->cost_type,
						$data->categorias,
						$data->SubCategorias,

						$data->idcurso,
					)
				);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
 


	public function Eliminar($id){
		try {
			$stm = $this->pdo ->prepare("DELETE FROM courses_course WHERE id = ?");          
			$stm->execute(array($id));

		} catch (Exception $e) {
			die($e->getMessage());
		}
	}




}