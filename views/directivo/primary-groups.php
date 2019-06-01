<?php
  //navigaton to//
  include 'views/overall/directivo/nav-directivo.php';
?>
<div class="section">
    <div class="columns is-2">
      <div class="column is-one-quarter">
        <?php include 'views/overall/directivo/nav-aside-directivo.php'; ?>
      </div>
      <div class="column is-expanded">
	  <div class="box">
        <h3 class="has-text-centered">Primaria</h3>
      </div>
        <?php if(!empty($primary_sedes)): ?>
            <div class="box">
            <?php foreach($primary_sedes as $s): ?>
            <div class="wrapper">
				<div class="notification is-info m-b-20">
				    <p class="title preview"><?php echo $s['name'] ?></p>
				</div>
				<?php $idSede = $s['id']; 
				$primary_groups = $directivo->getPrimaryGroupsBySedeId($idSede); ?>
                <div class="contenido">
                    <table class="table is-hoverable is-narrow is-fullwidth">
						<thead>
							<tr>
							    <th>Grado</th>
							    <th>Grupo</th>
								<th>Accion</th>
							</tr>
						</thead>
					    <tbody>
						<?php foreach($primary_groups as $g): ?>
							<tr>
							    <td><?php echo $g['name_grade']?></td>
							    <td><?php echo $g['name_group']?></td>
								<td>
									<button class="button is-info is-medium">
										<a href="<?php echo APP_URL ?>directivo/groups/primary/<?php echo $g['id_group']?>/">
										    <i class="fas fa-arrow-right f-3x"></i>
										</a>
									</button>
								</td>
							</tr>
						<?php endforeach; ?>
						</tbody>
				    </table>                    
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php else: ?>
            <div class="notification is-warning">No hay grupos creados porfavor comuniquese con el administrador de base de datos para que habilite la depuracion de datos</div>
        <?php endif; ?>
      </div>
    </div>
</div>