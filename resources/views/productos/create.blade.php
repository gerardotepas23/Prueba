
  <!-- Modal -->
  <div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Agregar producto</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('home.store')}}" method="post" enctype="multipart/form-data">
          @csrf
            <div class="modal-body">
            <div class="mb-3">
                <label for="" class="form-label">Nombre del productos:</label>
                <input type="text"
                  class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="" required>
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Descripcion del productos:</label>
                <input type="text"
                  class="form-control" name="descripcion" id="descripcion" aria-describedby="helpId" placeholder="" required>
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Precio Unitario:</label>
                <input type="number" step="0.01"
                  class="form-control" name="preciounit" id="preciounit" aria-describedby="helpId" placeholder="" required>
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Cantidad:</label>
                <input type="number"
                  class="form-control" name="cantidad" id="cantidad" aria-describedby="helpId" placeholder="" required>
              </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
        </form>
      </div>
    </div>
  </div>
