<?php
	if(!isset($_SESSION['id'])):
		header('location:' .APP_URL.  'default/redirec/');
	else:
	/*  schema that allow callback the functions */
		require 'core/model/teacher.php';
    	require 'core/model/coexistence.php';

		$teacher = new Teacher();
    	$coexistence = new Coexistence();

		$matters = $teacher->getMatters();

		/* header */
        include 'views/overall/header.php';

    	if($view[2] == 'grado' && $view[4] == 'grupo'){
			/* home view */

        include 'views/user/groupStudents.php';
		}else{

        /*template home */
          /* navbar interface */
          	include 'views/overall/teacher/nav-user.php';
			include 'views/overall/teacher/nav-tool.php';
          ?>
            <div class="columns is-2">
              <div class="column is-one-quarter">
                <?php include 'views/overall/teacher/nav-aside.php'; ?>
              </div>
              <div class="column">
				<div class="box">
				<?php foreach($matters as $matter): ?>
				<div class="wrapper">
				<div class="notification is-info m-b-20">
					<p 
					class="title preview">
						<?php echo $matter['name_matter']; ?>
					</p>
				</div>
				<?php $id_matter = $matter['id_matter']; $grades = $teacher->getGrades($id_matter); ?>
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
							<?php foreach($grades as $g): ?>
								<tr>
									<td><?php echo $g['name_grade']?></td>
									<td><?php echo $g['name_group']?></td>
									<td>
										<button class="button is-info is-medium">
										<a 
										href="<?php echo APP_URL ?>teacher/grupos/grado/<?php echo $g['id_grade']?>/grupo/<?php echo $g['id_group'] ?>/">
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
