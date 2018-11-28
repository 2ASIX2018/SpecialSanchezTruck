<form action="decdatos.php" method="post" enctype="multipart/form-data">
  <div>
    <div>
      <label for="inputEmail4">Nombre Decorado</label>
      <input type="text" class="form-control" name="nombreproducto" required>
    </div>
    <div>
      <label for="inputEmail4">Descripcion</label>
      <!--input type="text" class="form-control" name="descripcion" placeholder="Descripcion"required-->
      <textarea name="descripcion" rows="10" cols="20" class="form-control">Descripcion</textarea>
    </div>
    <div>
      <label for="inputEmail4">Imagen</label>
      <!--input type="email" class="form-control" name="Imagen" required-->
      <br><input type="file" name="imagensub" id="imagensub">
      <!--input type="submit" value="Penja el fitxer"-->
    </div>
  <div>
    <br><button type="submit" class="btn btn-primary">Introducir Producto</button>
  </div>
  </div>
  
</form>