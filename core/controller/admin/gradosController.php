<?php
	include 'views/overall/header.php';
?>
<body>
	<?php
	include 'views/overall/nav-admin.php';
	require 'core/model/admin.php';
	$admin = new Admin();
	?>
	<div class="container-fluid">
		<div class="row">
			<?php
				include 'views/admin/grados.php';
			?>
		</div>
	</div>
	</section>
</body>
	<?php
	include 'views/overall/scripts.php';
	?>
</html>
