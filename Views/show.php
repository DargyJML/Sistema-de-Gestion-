<div class="container">
	<h2>CITAS ASIGNADAS</h2>
	<form class="form-inline" action="?controller=cita&action=search" method="post">
		<div class="form-group row">
			<div class="col-xs-4">
				<input class="form-control" id="id" name="id" type="text" placeholder="Busqueda por ID">
			</div>
		</div>
		<div class="form-group row">
			<div class="col-xs-4">
				<button type="submit" class="btn btn-primary" ><span class="glyphicon glyphicon-search"> </span> Buscar</button>
			</div>
		</div>
	</form>
	<div class="table-responsive">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>Solicitante</th>
					<th>Telefono</th>
					<th>Email</th>
					<th>Servicio</th>
                    <th>Profesional</th>
                    <th>Fecha</th>
                    <th>Solicitud</th>
				</tr>
				<tbody>
					<?php foreach ($listCitas as$cita) {?>
					<tr>
						<td> <a href="?controller=cita&&action=updateshow&&idCita=<?php  echo $cita->getId()?>"> <?php echo $cita->getId(); ?></a> </td>
						<td><?php echo $cita->getSolicitante(); ?></td>
						<td><?php echo $cita->getTelefono(); ?></td>
                        <td><?php echo $cita->getEmail(); ?></td>
                        <td><?php echo $cita->getServicio(); ?></td>
                        <td><?php echo $cita->getProfesional(); ?></td>
                        <td><?php echo $cita->getFecha(); ?></td>
                        <td><?php echo $cita->getSolicitud(); ?></td>
						<td><a href="?controller=cita&&action=delete&&id=<?php echo $cita->getId() ?>">Eliminar</a> </td>
					</tr>
					<?php } ?>
				</tbody>

			</thead>
		</table>

	</div>	

</div>