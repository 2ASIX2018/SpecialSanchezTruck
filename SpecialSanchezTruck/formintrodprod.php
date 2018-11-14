<form action="proddatos.php" method="post" enctype="multipart/form-data">
  <div>
    <div>
      <label for="inputEmail4">Nombre Producto</label>
      <input type="text" class="form-control" name="nombreproducto" required>
    </div>
    <div>
      <label for="inputEmail4">Descripcion</label>
      <!--input type="text" class="form-control" name="descripcion" placeholder="Descripcion"required-->
      <textarea name="descripcion" rows="10" cols="20" class="form-control">Descripcion</textarea>
    </div>
    <div>
      <label for="inputEmail4">Precio</label>
      <input type="number" class="form-control" name="precio">
    </div>
    <div>
      <label for="inputEmail4">Imagen</label>
      <!--input type="email" class="form-control" name="Imagen" required-->
      <br><input type="file" name="imagensub" id="imagensub">
      <!--input type="submit" value="Penja el fitxer"-->
    </div>
    <div>
      <br><select name="categoria">
        <option value="categoria1">Producto</option>
        <option value="categoria2">Decorado</option>
         </select>
  </div>
  <div>
    <br><button type="submit" class="btn btn-primary">Introducir Producto</button>
  </div>
  </div>
  
</form>