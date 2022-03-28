<div class="container">
  <h2>Registro de Cita</h2>
  <form action="?controller=cita&&action=save" method="POST">
    <div class="form-group">
      <label for="text">Solicitante:</label>
      <input type="text" name="solicitante" class="form-control" id="solicitante" placeholder="Ingrese su nombre">
    </div>
    <div class="form-group">
      <label for="text">Telefono:</label>
      <input type="text" name="telefono" class="form-control" id="telefono" placeholder="Ingrese su Telefono">
    </div>
    <div class="form-group">
      <label for="text">Email:</label>
      <input type="text" name="email" class="form-control" id="email" placeholder="Ingrese su Email">
    </div>
    <div class="form-group">
      <label for="text">Servicio:</label>
      <input type="text" name="servicio" class="form-control" id="servicio" placeholder="Servicio a solicitar">
    </div>
    <div class="form-group">
      <label for="text">Profesional:</label>
      <input type="text" name="profesional" class="form-control" id="profesional" placeholder="Profesional que prestara el servicio">
    </div>
    <div class="form-group">
      <label for="text">Fecha y hora:</label>
      <input type="text" name="fecha" class="form-control" id="fecha" placeholder="Fecha en que solicita el servicio">
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>
</div>