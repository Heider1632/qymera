<?php
	if(!isset($_SESSION['id'])):
		header('location:' .APP_URL.  'default/redirec/');
	else:
	/*  schema that allow callback the functions */
		require 'core/model/teacher.php';
    	require 'core/model/coexistence.php';

		$teacher = new Teacher();
    	$coexistence = new Coexistence();

		$materias = $teacher->getMateria();

		/* header */
        include 'views/overall/header.php';

    	if($view[2] == 'grado' && $view[4] == 'grupo'){
			/* home view */

        include 'views/user/groupStudents.php';
		}else{

        /*template home */
          /* navbar interface */
          	include 'views/overall/nav-user.php';
			include 'views/overall/nav-tool.php';
          ?>
            <div class="columns is-2">
              <div class="column is-one-quarter">
                <?php include 'views/overall/nav-aside.php'; ?>
              </div>
              <div class="column">
								<div class="box">
								<?php foreach($materias as $matter): ?>
								<div class="wrapper">
									<div class="notification is-info m-b-20">
										<p class="title preview"><?php echo $matter['materia_nombre']; ?></p>
									</div>
									<?php $id_materia = $matter['materia_id']; $grados = $teacher->getGrado($id_materia); ?>
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
												<td><?php echo $g['nombre_grado']?></td>
												<td><?php echo $g['nombre_grupo']?></td>
												<td>
												<button class="button is-info is-medium">
													<a href="<?php echo APP_URL ?>teacher/grupos/grado/<?php echo $g['id_grado']?>/grupo/<?php echo $g['id_grupo'] ?>/">
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
           	</div>
        <?php
		}
		/* scripts*/
        include 'views/overall/scripts.php';
	endif;
?>
