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
		<div class="container m-t-20">
			<div class="columns is-2">
				<div class="column">
					<div class="box">
						<p class="title is-1 is-spaced fs-15">Escuelas asociadas</p>
						<p class="subtitle">I.E. Augusto espinoza</p>
						<button class="button is-primary is-fullwidth" href="">Ir</button>
					</div>
				</div>
				<div class="column is-hidden-mobile">
					<img src="public/images/school.jpg" alt="publish"/>
				</div>
			</div>
		</div>
	</body>
	<?php

include 'views/overall/scripts.php';


?>
