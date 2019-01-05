<?php
// isset verifica si existe una variable o eso creo xd
if (isset($_SESSION['id'])) {
    header('location: redirec');
}

include 'views/overall/header.php';

    ?>
	<body>
    <nav class="navbar">
      <div class="container">
          <div class="navbar-brand is-centered">
              <a class="navbar-item" href="<?php APP_URL ?>">
                  <img src="public/images/title-qymera.png" alt="Logo">
              </a>
           </div>
      </div>
    </nav>
		<div class="container">
			<div class="columns is-2">
				<div class="column">
					<div class="box m-t-20">
						<p class="title is-1 is-spaced fs-15">Escuelas asociadas</p>
						<h5 class="title"><a href="">I.E. Augusto espinoza</a></h5>
					</div>
				</div>
				<div class="column is-hidden-mobile m-t-20">
					<img src="public/images/advisement.png" alt="publish"/>
				</div>
			</div>
		</div>
	</body>
	<?php

include 'views/overall/scripts.php';


?>
