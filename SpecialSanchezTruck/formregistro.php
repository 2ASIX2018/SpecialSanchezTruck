<form action="datosregistro.php" method="get">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nombre Usuario</label>
      <input type="text" class="form-control" name="nombreusuario" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nombre</label>
      <input type="text" class="form-control" name="nombre" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Apellidos</label>
      <input type="text" class="form-control" name="apellidos" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" name="email" placeholder="Email" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Contraseña</label>
      <input type="password" class="form-control" name="password" placeholder="Password" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Repita Contraseña</label>
      <input type="password" class="form-control" name="password2" placeholder="Password" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Direccion</label>
    <input type="text" class="form-control" name="direccion" placeholder="Direccion">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Direccion 2</label>
    <input type="text" class="form-control" name="direccion2" placeholder="Direccion2">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Ciudad</label>
      <input type="text" class="form-control" name="ciutat" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity">Pais</label>
      <input type="text" class="form-control" name="pais" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputZip">Provincia</label>
      <input type="text" class="form-control" name="provincia">
    </div>
    <div class="form-group col-md-6">
      <label for="inputZip">Codigo Postal</label>
      <input type="number" class="form-control" name="codpostal">
    </div>
  </div>
  <div>
    <button type="submit" class="btn btn-primary">Registrarse</button>
  </div>
  </div>
  
</form>