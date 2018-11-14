<form action="proddatos.php" method="post" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nombre Producto</label>
      <input type="text" class="form-control" name="nombreproducto" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Descripcion</label>
      <input type="text" class="form-control" name="descripcion" placeholder="Descripcion"required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Precio</label>
      <input type="text" class="form-control" name="precio" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Imagen</label>
      <!--input type="email" class="form-control" name="Imagen" required-->
      <input type="file" name="imagensub" id="imagensub">
      <input type="submit" value="Penja el fitxer">
    </div>
    <div class="form-group col-md-6">
      <select name="categoria">
        <option value="categoria1">Categoria1</option>
        <option value="categoria2">Categoria2</option>
        <option value="categoria3">Categoria3</option>
        <option value="categoria4">Categoria4</option>
      </select>
  </div>
  <div>
    <button type="submit" class="btn btn-primary">Introducir Producto</button>
  </div>
  </div>
  
</form>