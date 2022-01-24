

<!-- Modal -->
<div class="modal fade" id="modalActualizarContacto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar contacto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frmAgregarContactoU">
          <div id="categoriasIdU"></div>
          <input type="text" id="idContactoU" name="idContactoU" hidden="">
          <label for="nombreU">Nombre</label>
          <input type="text" class="form-control" id="nombreU" name="nombreU">
          <label for="provinciaU">Provincia</label>
          <input type="text" class="form-control" id="provinciaU" name="provinciaU">
          <label for="departamentoU">Departamento</label>
          <input type="text" class="form-control" id="departamentoU" name="departamentoU">
          <label for="telefonoU">Telefono</label>
          <input type="text" class="form-control" id="telefonoU" name="telefonoU">
          <label for="responsableU">Responsable</label>
          <input type="text" class="form-control" id="responsableU" name="responsableU">
          <label for="descripcion_tcU">Descripción</label>
          <input type="text" class="form-control" id="descripcion_tcU" name="descripcion_tcU">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-warning" id="btnActualizarContacto">Actualizar</button>
      </div>
    </div>
  </div>
</div>