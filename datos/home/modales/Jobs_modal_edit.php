<div class="modal fade" id="edit_Jobs_Modal">
<script language="javascript">
	$(document).ready(function(){
		$("#cboRegion2").change(function () {

			$('#cboCiudad2').find('option').remove().end().append('<option value="whatever"></option>').val('whatever');
			
			$("#cboRegion2 option:selected").each(function () {
				id_estado = $(this).val();
				$.post("ubigeo.php", { id_estado: id_estado }, function(data){
					$("#cboProvincia2").html(data);
				});            
			});
		})
	});
	
	$(document).ready(function(){
		$("#cboProvincia2").change(function () {
			$("#cboProvincia2 option:selected").each(function () {
				id_municipio = $(this).val();
				$.post("ubigeo2.php", { id_municipio: id_municipio }, function(data){
					$("#cboCiudad2").html(data);
				});            
			});
		})
	});
</script>
	<div class="modal-dialog">

		<div class="modal-content">
			<form class="edit_Jobs" id="edit_Jobs">
			<!--header de la ventana -->

			<div class="modal-header">
				
				<h4 class="modal-title">Editar Empleo Profesional</h4>
			</div>
			<!-- contenido para header-->
			<div class="modal-body">
            <input type="hidden" id="txtIdJobs" name="txtIdJobs" >
            <div class="row">
                      <div class="col-md-6">
                            <div class="form-group">
                            <label for="exampleInputName1">Titulo</label>
                            <input type="text" class="form-control" name="textTitulo2" id="textTitulo2" placeholder="Introduce titulo aqui" value="">
                            </div>
                      </div>
                      <div class="col-md-6">
                            <div class="form-group">
                            <label for="exampleInputEmail3">Estado</label>
                            <select class="form-control" name="cboEstado2" id="cboEstado2" required>
                                <option value="">Selecciona una opción</option>
                                <option value="1">Publicado</option>
                                <option value="0">Borrador</option>
                                <option value="2">Pendiente</option>
                              </select>
                            </div>
                      </div>
                     <!-- <div class="col-md-6">
                           <div class="form-group">
                            <label for="exampleTextarea1">Ubicacion</label>
                            <select class="form-control" name="cboUbicacion2" id="cboUbicacion2" required>
                                <option value="">Selecciona una opción</option>
                                <?php foreach ($this->model->ListarUbicacion() as $r): ?>                       
                                    <option value="<?php echo $r->id; ?>"><?php echo $r->name; ?></option>
                                <?php endforeach; ?>
                               
                              </select>
                            </div>
                      </div>-->
                      <div class="col-md-4">
                           <div class="form-group">
                            <label for="exampleTextarea1">Departamento</label>
                            <select class="form-control" name="cboRegion2" id="cboRegion2" required>
                            <option value="">-Selecciona-</option>
								<?php foreach($this->model->ListarComboDepartamento() as $r): ?>			    		
									<option value="<?php echo $r->iddepartamento; ?>"><?php echo $r->descdepartamento; ?></option>
								<?php endforeach; ?>
                              </select>
                            </div>
                      </div>
                      <div class="col-md-4">
                           <div class="form-group">
                            <label for="exampleTextarea1">Provincia</label>
                            <select class="form-control" name="cboProvincia2" id="cboProvincia2" required>
                                <option value="">-Selecciona-</option>
                              
                               
                              </select>
                            </div>
                      </div>
                      <div class="col-md-4">
                           <div class="form-group">
                            <label for="exampleTextarea1">Distrito</label>
                            <select class="form-control" name="cboCiudad2" id="cboCiudad2" required>
                                <option value="">-Selecciona-</option>
                              
                             
                              </select>
                            </div>
                      </div>
                      <div class="col-md-6">
                            <div class="form-group">
                            <label for="exampleInputEmail3">Salario</label>
                            <input type="text" class="form-control" name="TextPrecio2" id="TextPrecio2" placeholder="precio" value="">
                            </div>
                      </div>
                     <!-- <div class="col-md-6">
                            <div class="form-group">
                            <label for="exampleInputEmail3">Duracion</label>
                            <input type="text" class="form-control" name="TextDuracion2" id="TextDuracion2" placeholder="Duracion" value="">
                            </div>
                      </div>-->
                      <div class="col-md-6">
                           <div class="form-group">
                            <label for="exampleTextarea1">Tipo Pago</label>
                            <select class="form-control" name="TextDuracion2" id="TextDuracion2">
                                <option value="">Selecciona una opción</option>                      
                                        <option value="por hora">Por Hora</option>
                                        <option value="por dia">Por Dia</option>
                                        <option value="a la semana">A la Semana</option>
                                        <option value="al mes">Al Mes</option>
                                        <option value="al año">Al Año</option>
                                   
                                   
                              </select>
                            </div>
                      </div>
                    
                      <div class="col-md-6">
                           <div class="form-group">
                            <label for="exampleTextarea1">Tipo</label>
                            <select class="form-control" name="cboTipo2" id="cboTipo2">
                                <option value="">Selecciona una opción</option>
                                    <?php foreach ($this->model->ListarCursotipo() as $r): ?>                       
                                        <option value="<?php echo $r->id; ?>"><?php echo $r->name; ?></option>
                                    <?php endforeach; ?>
                                   
                              </select>
                            </div>
                      </div>
                      <div class="col-md-6">
                           <div class="form-group">
                            <label for="exampleTextarea1">Modalidad</label>
                            <select class="form-control" name="cboModalidad2" id="cboModalidad2" >
                                <option value="">Selecciona una opción</option>
                                <?php foreach ($this->model->ListarModalidad() as $r): ?>                       
                                    <option value="<?php echo $r->id; ?>"><?php echo $r->name; ?></option>
                                <?php endforeach; ?>
                               
                              </select>
                            </div>
                      </div>
                      <div class="col-md-6">
                           <div class="form-group">
                            <label for="exampleTextarea1">Empresa</label>
                            <select class="form-control" name="cboAuthor2" id="cboAuthor2">
                                <option value="">Selecciona una opción</option>
                                    <?php foreach ($this->model->ListarAuthor() as $r): ?>                       
                                        <option value="<?php echo $r->idempresa; ?>"><?php echo $r->name; ?></option>
                                    <?php endforeach; ?>
                              </select>
                            </div>
                      </div>
                      <div class="col-md-6">
                           <div class="form-group">
                            <label for="exampleTextarea1">Categoria</label>
                            <select class="form-control" name="cboCategoria2" id="cboCategoria2" required>
                                <option value="">Selecciona una opción</option>
                                <?php foreach ($this->model->ListarCategoria() as $r): ?>                       
                                    <option value="<?php echo $r->id; ?>"><?php echo $r->name; ?></option>
                                <?php endforeach; ?>
                               
                              </select>
                            </div>
                      </div>

                    
                    </div>
          
			    
				

				<div class="col-md-12">
					<div class="form-group">
						<label for="" class="control-label">Descripcion</label>
						<textarea id="txtDescripcion2" name="txtDescripcion2" maxlength="10000" cols="30" rows="10" placeholder="Descripcion del curso" class="form-control"></textarea><small class="text-right">(máximo 1000 caracteres)</small>
					</div>
				</div>
				

                              
            </div>
           	 
            <div class="modal-footer text-center">
				<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar" style="margin-top: 1.5em;">
				<input type="submit" class="btn btn-success" id="guardarJobs" value="Guardar datos" style="margin-top: 1.5em;">
			</div>

            </form>
        </div>
	</div>
</div>