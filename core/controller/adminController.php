<?php
	if(!isset($_SESSION['id']) || $_SESSION['cargo'] == 2){
		header('location: http://localhost:8888/qymera/redirec/');
	}else{
		require 'core/model/admin.php';
		$admin = new Admin();

		include 'views/overall/header.php';

		include 'views/admin/home.php';

		include 'views/overall/scrips.php';
	}
?>
