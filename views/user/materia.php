<div class="row">
<?php
	$materia = ($usuario->getMateria());
	if (!empty($materia)):
		foreach ($materia as $m): ?>
		<div class="col-md-6">
			<p class="alert alert-success"><?php echo $m['nombre']; ?> </h1>
			<?php
			$id_materia = $m['id'];
			$usuario -> getGrado($id_materia);
			include 'grado.php';
			?>
		</div>
	<?php endforeach; 
	else: ?>
	<p class="alert alert-warning">Aún no se le han asignado materias porfavor hable con administración</p>
	<?php endif; ?>
</div>
