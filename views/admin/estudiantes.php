<?php
	$grupos = ($admin->getGrupos($estudiantes, $id_grado, $id_grupo));

	if(!empty($grupos)):
	?>
	<table class="resposive table">
	<thead>
		<tr>
			<th>Foto</th>
			<th>Primer Nombre</th>
			<th>Segundo Nombre</th>
			<th>Primer Apellido</th>
			<th>Segundo Apellido</th>
			<th>Action</th>
		</tr>
	</thead>
	<?php
		foreach ($grupos as $est):
	?>
	<tbody>
		<tr>
			<?php if(!empty($est['foto'])): ?>
			<td><img src="vistas/media/fotos/<?php echo ['foto']; ?>" width="40" height="40"></td>
			<?php else: ?>
			<td><img src="vistas/media/fotos/user-default.png" width="40" height="40"></td>
			<?php endif; ?>
			<td><?php echo $est['primer_nombre']; ?></td>
			<td><?php echo $est['segundo_nombre']; ?></td>
			<td><?php echo $est['primer_apellido']; ?></td>
			<td><?php echo $est['segundo_apellido']; ?></td>
			<td>
				<a href="<?php echo $_GET['view'] = '?view=editEst' ?>&id_estudiante=<?php echo $est['id']; ?>">Editar</a>
				<a href="<?php echo $_GET['view'] = '?view=deleteEst' ?>&id_estudiante=<?php echo $est['id']; ?>">Eliminar</a>
			</td>
		</tr>
	</tbody>
	<?php endforeach; ?>
	</table>
	<?php else: ?>
	<p class="alert alert-warning">No se ha asignado estudiantes para este grupo.</p> 
	<?php endif;
?>