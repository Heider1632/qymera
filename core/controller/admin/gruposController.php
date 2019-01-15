<?php

	require 'core/model/admin.php';
	$id_grupo = $_GET['id_grupo'];
	$id_grado = $_GET['id_grado'];
	$estudiantes = null;


	if (empty($id_grupo)) {

		echo $_GET['view'] = '?view=error';

	}else{

		$admin = New Admin();

		$grupos = $admin->getGrupos($estudiantes, $id_grado, $id_grupo);
	}

	include 'views/overall/header.php';
?>
<body>
	<?php
	include 'views/overall/nav-admin.php';
	?>
	<div class="container-fluid">
		<div class="row">
			<?php
				include 'views/admin/estudiantes.php';
			?>
		</div>
	</div>
	</section>
</body>
	<?php
	include 'views/overall/scripts.php';
	?>
</html>
