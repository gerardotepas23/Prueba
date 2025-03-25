
  <!-- Modal -->
  <div class="modal fade" id="edit{{$producto->idproducto}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Actualizar Stock</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('home.update',$producto->idproducto)}}" method="post" enctype="multipart/form-data">
          @csrf
          @method('PUT')
            <div class="modal-body">
            <div class="mb-3">
                <label for="" class="form-label">Nombre del producto:</label>
                <input type="text"
                  class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="" value="{{$producto->nombre}}" disabled>
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Descripcion del producto:</label>
                <input type="text"
                  class="form-control" name="descripcion" id="descripcion" aria-describedby="helpId" placeholder="" value="{{$producto->descripcion}}" disabled>
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Precio Unitario:</label>
                <input type="number" step="0.01"
                  class="form-control" name="preciounit" id="preciounit" aria-describedby="helpId" placeholder="" value="{{$producto->preciounit}}" disabled>
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Stock:</label>
                <input type="number"
                  class="form-control" name="cantidad" id="cantidad" aria-describedby="helpId" placeholder="" value="{{$producto->cantidad}}">
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



  <!-- Modal -->
  <div class="modal fade" id="delete{{$producto->idproducto}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar producto</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('home.destroy',$producto->idproducto)}}" method="post" enctype="multipart/form-data">
          @csrf
          @method('DELETE')
            <div class="modal-body">
                Estas seguro de eliminar a {{$producto->nombre}}?
            </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Confirmar</button>
        </div>
        </form>
      </div>
    </div>
  </div>
