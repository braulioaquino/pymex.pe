<?php
class categorias {
	private $pdo;
    
	public $idtipocursos;
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
			$stm = $this->pdo ->prepare("SELECT id,name,slug 
			from categories_category 
			where  id=  ?");			          

			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);

		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function Registrar(categorias $data) {
		try {
		$sql = "INSERT into categories_category(name,slug) 
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
			$sql = "UPDATE categories_category SET 
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
			$stm = $this->pdo ->prepare("DELETE FROM categories_category WHERE id = ?");          
			$stm->execute(array($id));

		} catch (Exception $e) {
			die($e->getMessage());
		}
	}




}