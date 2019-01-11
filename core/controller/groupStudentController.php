<?php
	if(!isset($_SESSION['id'])):
		header('location: index.php');
	else:
	/*  schema that allow callback the functions */
		require 'core/model/teacher.php';
    require 'core/model/coexistence.php';

		$teacher = new Teacher();
    $coexistence = new Coexistence();

		$materias = $teacher->getMateria();

    if($view[1] == 'grado' && $view[3] == 'grupo'){
			/* home view */
        /* header */
        include 'views/overall/header.php';

        include 'views/user/groupStudents.php';
        /* scripts*/
        include 'views/overall/scripts.php';
		}else{
			/* home view */
        /* header */
        include 'views/overall/header.php';

        /*template home */
          /* navbar interface */
          include 'views/overall/nav-user.php';
          ?>
          <div class="container is-fluid">
            <div class="columns is-2">
              <div class="column is-one-quarter">
                <?php include 'views/overall/nav-aside.php'; ?>
              </div>
              <div class="column">
								<!-- view for tablet and desktop -->
								<!-- view for mobile -->
								<?php foreach($materias as $matter): ?>
								<div class="tabs is-centered m-b-20 is-boxed is-large">
									<ul>
											<li><a id="preview"><?php echo $matter['materia_nombre']; ?></a></li>
									</ul>
								</div>
								<?php $id_materia = $matter['materia_id']; $grados = $teacher->getGrado($id_materia); ?>
								<div id="form-preview" class="content">
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
												<td><?php echo $g['nombre_grado']?></td>
												<td><?php echo $g['nombre_grupo']?></td>
												<td>
													<button class="button is-info is-medium">
															<a href="<?php echo APP_URL ?>groupStudent/grado/<?php echo $g['id_grado']?>/grupo/<?php echo $g['id_grupo'] ?>/"><i class="fas fa-users f-3x"></i></a>
													</button>
												</td>
											</tr>
											<?php endforeach; ?>
											</tbody>
									</table>
								</div>
								<?php endforeach; ?>
              </div>
            </div>
          </div>
        <?php
        /* scripts*/
        include 'views/overall/scripts.php';
		}
	endif;
?>
