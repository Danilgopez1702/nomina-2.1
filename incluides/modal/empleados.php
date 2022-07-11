<div class="modal" id="myModal1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Nuevo Empleado</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: white;">x</button>
            </div>
            <div class="container"></div>
                <div class="modal-body">
                    <form class="forms-sample" method='post' action='' enctype="multipart/form-data">
                      <div class="form-group row">
                      <div class="col-md-6" style="padding-left: 100px;">
                       <div class="col-md-6">
                        <div class="form-group row">
                        <input type="file" id="files" name="files[]">
                        <output id="list"></output>
                      </div>
                      </div> 
                      </div>
                      <div class="col-md-6">
                        <p class="card-description" align="center"> Informacion Personal </p>
                        <div class="row-md-6">
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">ID de empleado</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="id_empleado" name="id_empleado"  />
                            </div>
                          </div>
                        </div>
                        <div class="row-md-6">
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nombre(s)</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="nombre" name="nombre" />
                            </div>
                          </div>
                        </div>
                        <div class="row-md-6">
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Apellido Paterno</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="ap" name="ap" />
                            </div>
                          </div>
                        </div>
                        <div class="row-md-6">
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Apellido Materno</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="am" name="am" />
                            </div>
                          </div>
                        </div>
                        <div class="row-md-6">
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">No. de cuenta</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="num_cuenta" name="num_cuenta" />
                            </div>
                          </div>
                        </div>
                        <div class="row-md-6">
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Departamento</label>
                            <div class="col-sm-9">
                              <select class="form-control" id="dep" name="dep">
                                <?php
                                    $query = mysqli_query($conexion, "SELECT * FROM departamento");
                                    $result = mysqli_num_rows($query);
                                    if ($result > 0) {
                                        while ($data = mysqli_fetch_assoc($query)) { 
                                        ?>
                                            <option><?php echo $data['nombre_departamento']; ?></option>
                                        <?php 
                                        }
                                    }
                                ?>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="row-md-6">
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Turno</label>
                            <div class="col-sm-9">
                            <select class="form-control" id="turno" name="turno">
                                <?php
                                    $query = mysqli_query($conexion, "SELECT * FROM departamento");
                                    $result = mysqli_num_rows($query);
                                    if ($result > 0) {
                                        while ($data = mysqli_fetch_assoc($query)) { 
                                        ?>
                                            <option><?php echo $data['nombre_departamento']; ?></option>
                                        <?php 
                                        }
                                    }
                                ?>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="row-md-6">
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Sueldo Mensual</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="sm" name="sm" />
                            </div>
                          </div>
                        </div>
                        <div class="row-md-6">
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Sueldo Diario</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="sd" name="sd" />
                            </div>
                          </div>
                        </div>
                        <div class="row-md-6">
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Fecha de ingreso</label>
                            <div class="col-sm-9">
                              <input type="date" class="form-control" placeholder="dd/mm/aaaa" id="fecha" name="fecha" />
                            </div>
                          </div>
                        </div>
                        <div class="row-md-6">
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Frecuencia de pago</label>
                            <div class="col-sm-9">
                             <select class="form-control" id="fp" name="fp">
                                <option value="7">Semanal</option>
                                <option value="14">Catorcenal</option>
                              </select> 
                            </div>
                          </div>
                        </div>
                      </div>
                      </div>
                    </form>
                </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal" id="close_button">Cerrar</button>
              <button type="submit" class="btn btn-primary submitBtn" id="save_button">Guardar</button>
            </div>
        </div>
    </div>

    <div class="modal" id="myModal2">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">2nd Modal title</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="container"></div>
                <div class="modal-body">
                    <p>
                        Content for the dialog / modal goes here. Content for the dialog / modal goes here. Content for the dialog / modal goes here. Content for the dialog / modal goes here. Content for the dialog / modal goes here.
                    </p>
                </div>
                <div class="modal-footer">
                    <a href="#" data-dismiss="modal" class="btn">Close</a>
                    <a href="#" class="btn btn-primary">Save changes</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script>

function archivo(evt) {
var files = evt.target.files; // FileList object
       
//Obtenemos la imagen del campo "file". 
  for (var i = 0, f; f = files[i]; i++) {         
//Solo admitimos imágenes.
    if (!f.type.match('image.*')) {
        continue;
    }
       
var reader = new FileReader();
           
reader.onload = (function(theFile) {
return function(e) {
//Creamos la imagen.
document.getElementById("list").innerHTML = ['<img id="foto" class="img-fluid" style="height:500px;width:500px;padding-top:60px;" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
               };
           })(f);
 reader.readAsDataURL(f);
       }
}
           
document.getElementById('files').addEventListener('change', archivo, false);

</script>


