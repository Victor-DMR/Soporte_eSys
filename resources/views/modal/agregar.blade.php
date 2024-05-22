<!-- Modal agregar-->
<div class="modal fade" id="Agregarmodal" tabindex="-1" aria-labelledby="AgregarmodalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="AgregarmodalLabel">Agregar</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
          <div class="mb-3">
            <input type="number" class="form-control" id="Nit1" placeholder="Nit">
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" id="Cliente1" placeholder="Cliente">
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" id="AnyDesk1" placeholder="AnyDesk">
          </div>
          <div class="mb-3">
            <input type="number" class="form-control" id="Telefono" placeholder="Telefono">
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" id="Tecnico" placeholder="Tecnico">
          </div>
          <div class="mb-3">
            <input class="form-control"  type="file" id="archivo" name="archivo">
          </div>
          <div class="mb-3">
            <textarea class="form-control" id="Descripcion1" placeholder="Descripción" rows="3"></textarea>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="button" id="btn_save_agregar" class="btn btn-primary">Guardar</button>
        </div>
      </div>
    </div>
  </div>

  @vite(['resources/js/modal/agregar.js'])