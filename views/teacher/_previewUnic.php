<?php
/*template home */
  /* navbar interface */
  include 'views/overall/teacher/nav-user.php';
  include 'views/overall/teacher/nav-tool.php';
?>
  <div class="container is-fluid">
    <div class="columns is-2">
      <div class="column is-one-quarter">
        <?php include 'views/overall/teacher/nav-aside.php'; ?>
      </div>
      <div class="column">
        <div class="box">
          <h3 class="has-text-centered">Grupos por materias </h3>
        </div>
        <div class="box">
        <?php foreach($matters as $matter): ?>
        <div class="wrapper">
        <div class="notification is-info m-b-20">
          <p 
          class="title preview">
            <?php echo $matter['name_matter']; ?>
          </p>
        </div>
        <?php $id_matter = $matter['id_matter']; 
        $groups = $teacher->getGroups($id_matter);
        ?>
          <div class="contenido">
            <?php if(!empty($groups)): ?>
            <table class="table is-hoverable is-narrow is-fullwidth">
              <thead>
                <tr>
                  <th>Grado</th>
                  <th>Grupo</th>
                  <th>Sede</th>
                  <th>Accion</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach($groups as $group): ?>
                <tr>
                  <td><?php echo $group['name_grade']?></td>
                  <td><?php echo $group['id_group']?></td>
                  <td><?php echo $group['name_sede']?></td>
                  <td>
                    <button class="button is-info is-medium">
                    <a 
                    href="<?php echo APP_URL ?>teacher/notes/type/unic/preview/selectindicator/grade/<?php echo $group['id_grade'] ?>/matter/<?php echo $id_matter ?>/group/<?php echo $group['id_group'] ?>/">
                      <i class="fas fa-angle-right"></i>
                    </a>
                    </button>
                  </td>
                </tr>
              <?php endforeach; ?>
              </tbody>
              </table>
              <?php else: ?>
                <div class="notification is-danger">Error al solicitar los datos</div>
              <?php endif; ?>
            </div>
          </div>
          <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
