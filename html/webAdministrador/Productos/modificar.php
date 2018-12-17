  <div class="container">
			<div class="row">
				<h3 style="text-align:center">ACTUALZAR REGISTRO</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="" autocomplete="off" enctype="multipart/form-data">
				<div class="form-group">
					<label for="producto" class="col-sm-2 control-label">NOMBRE PRODUCTO</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="producto" name="producto" placeholder="producto" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="precio" class="col-sm-2 control-label">PRECIO</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="precio" name="precio" placeholder="Precio" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="cantidad" class="col-sm-2 control-label">Cantidad</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="cantidad" name="cantidad" placeholder="cantidad">
					</div>
				</div>
				
				<div class="form-group">
					<label for="SECCION" class="col-sm-2 control-label">SECCION</label>
					<div class="col-sm-10">
						<select class="form-control" id="SECCION" name="SECCION">
							<option value="PERROS">PERROS</option>
							<option value="GATOS">GATOS</option>
							<option value="ROEDORES">ROEDORES</option>
							<option value="AVES">AVES</option>
							<option value="EXOTICOS">EXOTICOS</option>
						</select>
					</div>
				</div>
				
				<div class="form-group">
				    <label for="DESCRIPCION" class="col-sm-2 control-label" >DESCRIPCION</label><br>
                    <TEXTAREA id="DESCRIPCION" class="form-control" name ="descripcion" placeholder="DESCRIPCION DEL PRODUCTO"></TEXTAREA>
				</div>
				
		       <div class="form-group">
		           <input type="file" name="imagen"> 
		       </div>
		       
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="#" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>