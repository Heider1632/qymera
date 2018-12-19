<?php
require 'core/model/admin.php';
require 'core/model/coexistence.php';
$admin = new Admin();
$coexistence = new Coexistence();
$periodos = ($coexistence->getPeriodos());
	include 'views/overall/header.php';
?>
<body>
	<?php
	include 'views/overall/nav-admin.php';
	?>
	<div class="container">
			<?php
			include 'views/admin/config.php';
			?>
	</div>
</body>
	<?php
	include 'views/overall/scripts.php';
	?>
</html>
