<?php
$grados = ($admin->getGrados()); ?>
<div class="columns">
  <?php  if(!empty($grados)):
   foreach ($grados as $g): ?>
			<div class="column">
				<div class="card" style="width: 18rem;">
  					<div class="card-body">
  						<center>
    					<h2 class="card-title">Grado: <?php echo $g['nombre']; ?></h2>
    					<h3 class="card-title">Grupo: <?php echo $g['grupo']; ?></h3>
    					</center>
    					<p class="card-text">Por favor administrador haga las acciones adecuadas en el tiempo establecido.</p>
    					<a href="<?php echo $_GET['view'] = '?view=grupos' ?>&id_grado=<?php echo $g['id_grado']; ?>&id_grupo=<?php echo $g['grupo'];?>" class="card-link">Ver Estudiantes</a>
  					</div>
				</div>
			</div>
  <?php endforeach; ?>
  <?php else: ?>
  <p class="alert alert-warning">Aún no se le han asignado grupos porfavor hable con administración</p>
  <?php endif;
?>
</div>
