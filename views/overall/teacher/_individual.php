<div class="columns is-2">
    <div class="column is-one-quarter">
        <?php include 'views/overall/teacher/nav-aside.php'; ?>
    </div>
    <div class="column">
		<div class="box">
			<?php foreach($materias as $matter): ?>
				<div class="wrapper">
				    <div class="notification is-info m-b-20">
						<p 
							class="title preview">
							<?php echo $matter['name_matter']; ?>
						</p>
					</div>
				    <?php $id_matter = $matter['id_matter']; $grados = $teacher->getGrades($id_matter); ?>
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
								<?php foreach($grados as $g): ?>
									<tr>
										<td><?php echo $g['name_grade']?></td>
										<td><?php echo $g['id_group']?></td>
										<td>
											<button class="button is-info is-medium">
												<a href="<?php echo APP_URL ?>teacher/individual/<?php echo $g['id_groups'] ?>/grado/<?php echo $g['name_grade']?>/grupo/<?php echo $g['id_group'] ?>/n/1/">
													<i class="fas fa-users f-3x"></i>
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
</div>