<!-- Modal asignar estado tecnico-->
<div class="modal fade" id="Estadomodal" tabindex="-1" aria-labelledby="EstadomodalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="EstadomodalLabel">Estado</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
              <select class="form-select" aria-label="Default select example">
                  <option selected>Sin asignar</option>
                  <option value="1">Iniciado</option>
                  <option value="2">Pausado</option>
                  <option value="3">Finalizado</option>
              </select>
          </div>
          <div class="mb-3">
            <textarea class="form-control" id="Observación" placeholder="Observación" rows="3"></textarea>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary">Guardar</button>
        </div>
      </div>
    </div>
  </div>