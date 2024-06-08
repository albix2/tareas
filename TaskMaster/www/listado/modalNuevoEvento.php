<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Listar evento:</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form name="formEvento" id="formEvento" enctype="multipart/form-data" action="listado_busqueda.php" class="form-horizontal" method="POST">
		
    <div class="form-group">
        <label for="evento" class="col-sm-12 control-label">Nombre del Evento</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="evento" id="evento" placeholder="Nombre del Evento" />
        </div>
      </div>
  
      <div class="form-group">
        <label for="descripcion" class="col-sm-12 control-label">Descripción</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Descripción" />
        </div>
      </div>
  
      <div class="form-group">
        <label for="fecha_inicio" class="col-sm-12 control-label">Fecha Inicio</label>
        <div class="col-sm-10">
          <input type="date" class="form-control" name="fecha_inicio" id="fecha_inicio" placeholder="Fecha Inicio">
        </div>
      </div>
  
      
      <div class="form-group">
        <label for="fecha_fin" class="col-sm-12 control-label">Fecha Final</label>
        <div class="col-sm-10">
          <input type="date" class="form-control" name="fecha_fin" id="fecha_fin" placeholder="Fecha Final">
        </div>
      </div>
  
      <div class="mb-3">
        <label for="" class="form-label"><b>Nombre de la etiqueta</b></label>
        <div class="col-sm-10">
        <select name="id_etiqueta" class="form-control">
    <option value="">Seleccione la etiqueta</option>
    <?php
    include("config.php");
    mysqli_select_db($con, "practicas");
    $consultarUsuario = "SELECT * FROM etiquetas";

    $sqlUsuario = mysqli_query($con, $consultarUsuario);

    // Verifica si hay resultados antes de recorrerlos
    if ($sqlUsuario) {
        while ($resultadoUsuario = mysqli_fetch_assoc($sqlUsuario)) {
            echo "<option value='" . $resultadoUsuario['id_etiqueta'] . "'>" . $resultadoUsuario['nombre_etiqueta'] . "</option>";
        }
    } else {
        echo "Error en la consulta: " . mysqli_error($conn);
    }
    ?>
</select>

      </div>
      </div>
  
            <div class="mb-3">
              <label for="" class="form-label"><b>Estado</b></label>
              <div class="col-sm-10">
              <select name="id_estado" class="form-control">
                  <option value="" >Seleccione el estado</option>
                  <?php
                  include("config.php");
                  mysqli_select_db($con, "practicas");
                  $consultarUsuario = "SELECT * FROM estado";
  
                  $sqlUsuario = mysqli_query($con, $consultarUsuario);
  
                  // Verifica si hay resultados antes de recorrerlos
                  if ($sqlUsuario) {
                      while ($resultadoUsuario = mysqli_fetch_assoc($sqlUsuario)) {
                          echo "<option value='" . $resultadoUsuario['id_estado'] . "'>" . $resultadoUsuario['nombre_estado'] . "</option>";
                      }
                  } else {
                      echo "Error en la consulta: " . mysqli_error($conn);
                  }
                  ?>
              </select>
            </div>
            </div>
  
    
    <div class="form-group">
        <label for="color" class="col-sm-12 control-label">Color</label>
        <div class="col-sm-10">
          <input type="color" class="form-control" name="color" id="color" placeholder="Color" required/>
        </div>
      </div>

      
  
 
      
       <div class="modal-footer">
          <button type="submit" class="btn btn-success">Guardar Evento</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
    </form>
      </div>
      
    </div>
  </div>
</div>