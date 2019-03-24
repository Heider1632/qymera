<?php
  //navigaton to//
  include 'views/overall/directivo/nav-directivo.php';
?>
<div id="app">
  <!--template home admin-->
  <div class="section">
    <div class="columns is-2">
      <div class="column is-one-quarter">
        <?php include 'views/overall/directivo/nav-aside-directivo.php'; ?>
      </div>
      <div class="column">
        <main class="column">
          <div class="level">
            <div class="level-left">
              <div class="level-item">
                <div class="title">Acciones</div>
              </div>
            </div>
            <div class="level-right">
              <div class="level-item">
                <button type="button" class="button is-small">
                  <?php echo DATE ?>
                </button>
              </div>
            </div>
          </div>

          <div class="columns is-multiline">
            <div class="column">
              <div class="box">
                <div class="heading">Docentes</div>
                <div class="title"><?php echo $num_teachers; ?></div>
                <div class="level">
                  <div class="level-item">
                    <div class="">
                      <div class="heading">Añadir</div>
                      <div class="title is-5">
                      	<a 
                      	href="<?php echo APP_URL ?>directivo/docente/añadir/" class="button is-info">
                      		<i class="fa fa-plus"></i>
                      	</a>
                      </div>
                    </div>
                  </div>
                  <div class="level-item">
                    <div class="">
                      <div class="heading">Editar</div>
                      <div class="title is-5">
                      	<a 
                      	href="<?php echo APP_URL ?>directivo/docente/editar/" 
                      	class="button is-warning">
                      		<i class="fa fa-edit"></i>
                      	</a>
                      </div>
                    </div>
                  </div>
                  <div class="level-item">
                    <div class="">
                      <div class="heading">Eliminar</div>
                      <div class="title is-5">
                      	<a 
                      	href="<?php echo APP_URL ?>directivo/docente/eliminar/" class="button is-danger">
                      		<i class="fa fa-trash"></i>
                      	</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="column">
              <div class="box">
                <div class="heading">Director Grupo</div>
                <div class="title"><?php echo $num_director_groups; ?> &uarr;</div>
                <div class="level">
                  <div class="level-item">
                    <div class="">
                      <div class="heading">Añadir</div>
                      <div class="title is-5">
                      	<a 
                      	href="<?php echo APP_URL ?>directivo/directorgroup/add/" class="button is-info">
                      		<i class="fa fa-plus"></i>
                      	</a>
                      </div>
                    </div>
                  </div>
                  <div class="level-item">
                    <div class="">
                      <div class="heading">Editar</div>
                      <div class="title is-5">
                      	<a 
                      	href="<?php echo APP_URL ?>directivo/directorgroup/edit/" class="button is-warning">
                      		<i class="fa fa-edit"></i>
                      	</a>
                      </div>
                    </div>
                  </div>
                  <div class="level-item">
                    <div class="">
                      <div class="heading">Eliminar</div>
                      <div class="title is-5">
                      	<a 
                      	href="<?php echo APP_URL ?>directivo/directorgroup/delete/" class="button is-danger">
                      		<i class="fa fa-trash"></i>
                      	</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="column">
              <div class="box">
                <div class="heading">Progreso Notas</div>
                <div class="title">75% / 25%</div>
                <div class="level">
                  <div class="level-item">
                    <div class="">
                      <div class="heading">Notas</div>
                      <div class="title is-5">
                      	<a 	href="<?php echo APP_URL ?>directivo/notes/list/"
                      		class="button is-primary">
                      		<i class="fa fa-eye"></i>
                      	</a>
                      </div>
                    </div>
                  </div>
                  <div class="level-item">
                    <div class="">
                      <div class="heading">Lista</div>
                      <div class="title is-5">
                      	<a href="<?php echo APP_URL ?>directivo/notes/list/"
                      	   class="button is-info">
                      		<i class="fa fa-list"></i>
                      	</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end template-->
        </main>
      </div>
    </div>
  </div>
<?php
  include 'html/overall/scripts.php';
?>
