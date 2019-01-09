<?php
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
        <!-- render template inf_teacher -->
          <section class="hero is-primary m-b-10">
            <div class="hero-body">
                <h1 class="title">
                  Bienvenido docente: <?php echo $_SESSION['nombre_completo']; ?>
                </h1>
                <h2 class="subtitle">
                  Debajo encontrarás informacion correspondinte actual
                </h2>
            </div>
          </section>
          <!-- view for tablet and desktop -->
          <!-- view for mobile -->
          <?php foreach($materias as $matter): ?>
          <div class="tabs is-centered m-b-20 is-hidden-desktop is-hidden-tablet">
            <ul>
                <li><a><?php echo $matter['materia_nombre']; ?></a></li>
            </ul>
          </div>
          <?php $grado = ($teacher->getGrado($matter['materia_id'])); ?>
          <table class="table is-hoverable is-narrow is-fullwidth is-hidden-desktop is-hidden-tablet">
              <thead>
                  <tr>
                      <th>Grado</th>
                      <th>Grupo</th>
                      <th>Accion</th>
                    </tr>
              </thead>
              <tbody>
              <?php foreach($grado as $g): ?>
              <tr>
                  <td><?php echo $g['nombre_grado']?></td>
                  <td><?php echo $g['nombre_grupo']?></td>
                  <td>
                    <button class="button is-info is-medium">
                      <a href="unicStudent&action=view&id_grado=<?php echo $g['id_grado']?>&id_grupo=<?php echo $g['id_grupo'] ?>"><i class="fas fa-user f-3x"></i></a>
                    </button>

                    <button class="button is-info is-medium">
                        <a href="groupStudent&action=view&id_grado=<?php echo $g['id_grado']?>&id_grupo=<?php echo $g['id_grupo'] ?>"><i class="fas fa-users f-3x"></i></a>
                    </button>
                  </td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
          <?php endforeach; ?>
      </div>
    </div>
  </div>
