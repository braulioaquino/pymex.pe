<div class="modal fade" id="add_Jobs_Modal">

	<div class="modal-dialog">

		<div class="modal-content">
			<form class="add_Jobs" id="add_Jobs">
			<!--header de la ventana -->

			<div class="modal-header">
				
				<h4 class="modal-title">Nuevo Empleo Profesional</h4>
			</div>
			<!-- contenido para header-->
			<div class="modal-body">
				
            <div class="row">
            <?php 
                   $caracteres = "abcdefghijklmnopqrstuvwxyz";
                   $caracteres .= "1234567890";
                   $final = array();
                   $longitud = 4;
                   $carac_desordenada = str_shuffle($caracteres);
                   for($i=0;$i<=$longitud;$i++) {
                    $final[$i] = $carac_desordenada[$i]; 
                  }
                   //recorremos la array e imprimimos
                   ?>
                   <input type="hidden" name="txtRandon" id="txtRandon" value="<?php echo $final[0];?><?php echo $final[1]; ?><?php echo $final[2]; ?><?php echo $final[3]; ?>" />
                      <div class="col-md-6">
                            <div class="form-group">
                            <label for="exampleInputName1">Titulo del empleo</label>
                            <input type="text" class="form-control" name="textTitulo" id="textTitulo" placeholder="Introduce titulo aqui" value="" required>
                            </div>
                      </div>
                      <div class="col-md-6">
                            <div class="form-group">
                            <label for="exampleInputEmail3">Estado</label>
                            <select class="form-control" name="cboEstado" id="cboEstado" required>
                                <option value="">Selecciona una opción</option>
                                <option value="1">Publicado</option>
                                <option value="0">Borrador</option>
                                <option value="2">Pendiente</option>
                              </select>
                            </div>
                      </div>
                     <!-- <div class="col-md-4">
                           <div class="form-group">
                            <label for="exampleTextarea1">Ubicacion</label>
                            <select class="form-control" name="cboUbicacion" id="cboUbicacion" required>
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
                            <select class="form-control" name="cboRegion" id="cboRegion" required>
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
                            <select class="form-control" name="cboProvincia" id="cboProvincia" required>
                                <option value="">-Selecciona-</option>
                                <?php echo $empresa->idempresa != null ? '  
								    <option value="'. $empresa->idprovincia . '" selected="" >'. $empresa->descprovincia . '</option>
								    ' : '
								           
							    '; ?>
                               
                              </select>
                            </div>
                      </div>
                      <div class="col-md-4">
                           <div class="form-group">
                            <label for="exampleTextarea1">Distrito</label>
                            <select class="form-control" name="cboCiudad" id="cboCiudad" required>
                                <option value="">-Selecciona-</option>
                              
                                <?php echo $empresa->idempresa != null ? '  
								       <option value="'. $empresa->idciudad . '" selected="" >'. $empresa->descciudad . '</option>
								        ' : '
								'	 ; ?>
                              </select>
                            </div>
                      </div>
                    
                      <div class="col-md-6">
                            <div class="form-group">
                            <label for="exampleInputEmail3">Salario</label>
                            <input type="text" class="form-control" name="TextPrecio" id="TextPrecio" placeholder="precio" value="">
                            </div>
                      </div>
                      <!--<div class="col-md-6">
                            <div class="form-group">
                            <label for="exampleInputEmail3">Duracion</label>
                            <input type="text" class="form-control" name="TextDuracion" id="TextDuracion" placeholder="Duracion" value="" required>
                            </div>
                      </div>-->
                      <div class="col-md-6">
                           <div class="form-group">
                            <label for="exampleTextarea1">Tipo Pago</label>
                            <select class="form-control" name="TextDuracion" id="TextDuracion" >
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
                            <label for="exampleTextarea1">Tipo Trabajo</label>
                            <select class="form-control" name="cboTipo" id="cboTipo" required>
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
                            <select class="form-control" name="cboModalidad" id="cboModalidad" required>
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
                            <select class="form-control" name="cboAuthor" id="cboAuthor" onchange="myFunction1()" required>
                                <option value="">Selecciona una opción</option>
                                    <?php foreach ($this->model->ListarAuthor() as $r): ?>                       
                                        <option value="<?php echo $r->idempresa; ?>"><?php echo $r->name; ?></option>
                                    <?php endforeach; ?>
                                   
                              </select>
                            </div>
                      </div>
                   <script>
                    function myFunction1() {
                      var x = document.getElementById('cboAuthor').options[document.getElementById('cboAuthor').selectedIndex].text;
                      document.getElementById("textNombreInstitucion").value = x;
                    }
                   </script>
                   
                   <input type="hidden" name="textNombreInstitucion" id="textNombreInstitucion" value="" />

                      <div class="col-md-6">
                           <div class="form-group">
                            <label for="exampleTextarea1">Categoria</label>
                            <select class="form-control" name="cboCategoria" id="cboCategoria" required>
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
						<textarea id="txtDescripcion" name="txtDescripcion" maxlength="10000" cols="30" rows="10" placeholder="Descripcion del curso" class="form-control" required></textarea><small class="text-right">(máximo 10000 caracteres)</small>
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