<div class="modal fade" id="add_Cursos_Modal">
	<div class="modal-dialog">

		<div class="modal-content">
			<form class="add_Cursos" id="add_Cursos">
			<!--header de la ventana -->

			<div class="modal-header">
				
				<h4 class="modal-title">Nuevo Curso</h4>
			</div>
			<!-- contenido para header-->
			<div class="modal-body">
				
            <div class="row">
			
                      <div class="col-md-6">
                            <div class="form-group">
                            <label for="exampleInputName1">Titulo</label>
                            <input type="text" class="form-control" name="textTitulo" id="textTitulo" placeholder="Introduce titulo aqui" value="" required>
                            </div>
                      </div>
                      <div class="col-md-6">
                            <div class="form-group">
                            <label for="exampleInputEmail3">Slug</label>
                            <input type="text" class="form-control" name="TextSlug" id="TextSlug" placeholder="Slug" value="" required>
                            </div>
                      </div>
                     
                   
                      <script>
                      var cursorPosition = $('#txtInformacion').prop("selectionStart");
                      </script>
                    
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
                            <label for="exampleTextarea1">Categorias</label>
                            <select class="form-control" name="cboCategoria" id="cboCategoria" required>
                                <option value="">Selecciona una opción</option>
                                <?php foreach ($this->model->ListarCategorias() as $r): ?>                       
                                    <option value="<?php echo $r->id; ?>"><?php echo $r->name; ?></option>
                                <?php endforeach; ?>
                               
                              </select>
                            </div>
                      </div>
                      <div class="col-md-6">
                           <div class="form-group">
                            <label for="exampleTextarea1">Sub Categoria</label>
                            <select class="form-control" name="cboSubCategoria" id="cboSubCategoria" required>
                                <option value="">Selecciona una opción</option>
                                <?php foreach ($this->model->ListarSubcategorias() as $r): ?>                       
                                    <option value="<?php echo $r->id; ?>"><?php echo $r->name; ?></option>
                                <?php endforeach; ?>
                               
                              </select>
                            </div>
                      </div>
                      <div class="col-md-6">
                           <div class="form-group">
                            <label for="exampleTextarea1">Tipo</label>
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
                            <label for="exampleInputEmail3">Precio del curso</label>
                            <input type="text" class="form-control" name="TextPrecio" id="TextPrecio" placeholder="Precio" value="" required>
                            </div>
                      </div>
                   
                     
                      <div class="col-md-6">
                           <div class="form-group">
                            <label for="exampleTextarea1">Institucion</label>
                            <select class="form-control" name="cboAuthor" id="cboAuthor" required>
                                <option value="">Selecciona una opción</option>
                                    <?php foreach ($this->model->ListarAuthor() as $r): ?>                       
                                        <option value="<?php echo $r->id; ?>"><?php echo $r->name; ?></option>
                                    <?php endforeach; ?>
                              </select>
                            </div>
                      </div>
                      <div class="col-md-6">
                            <div class="form-group">
                            <label for="exampleInputEmail3">Estado</label>
                            <select class="form-control" name="cboEstado" id="cboEstado" >
                                <option value="">Selecciona una opción</option>
                                <option value="1">Publicado</option>
                                <option value="0">Borrador</option>
                                <option value="2">Pendiente</option>
                              </select>
                            </div>
                      </div>
                      <div class="col-md-6">
                            <div class="form-group">
                            <label for="exampleInputEmail3">Duracion</label>
                            <input type="text" class="form-control" name="TextDuracion" id="TextDuracion" placeholder="1 mes" value="" required>
                            </div>
                      </div>
                      <div class="col-md-6">
                            <div class="form-group">
                            <label for="exampleInputEmail3">Fecha Inicio</label>
                            <input type="date" class="form-control" name="TextFechaInicio" id="TextFechaInicio" placeholder="Fecha inicio" value="" required>
                            </div>
                      </div>
                      
                      <div class="col-md-6">
                            <div class="form-group">
                            <label for="exampleInputEmail3">Fecha Fin</label>
                            <input type="date" class="form-control" name="TextFechaFin" id="TextFechaFin" placeholder="Fecha fin" value="" required>
                            </div>
                      </div>
					  <div class="col-md-12">
						<div class="form-group">
						<label for="exampleTextarea1">Descripcion</label>
						<textarea id="editor" class="form-control"  name="txtInformacion"  id="txtInformacion" placeholder="descripcion del curso" required></textarea>
						</div>
					</div>
					
					             
            </div>
           	 
            <div class="modal-footer text-center">
				<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar" style="margin-top: 1.5em;">
				<input type="submit" class="btn btn-success" id="guardarCursos" value="Guardar datos" style="margin-top: 1.5em;">
			</div>

            </form>
        </div>
	</div>
</div>
<!-- Include the Quill library -->
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

<script>
  var quill = new Quill('#editor', {
    theme: 'snow'
  });
</script>

