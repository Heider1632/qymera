<?php
  //navigaton to//
  include 'views/overall/directivo/nav-directivo.php';
?>
<div class="section">
    <div class="columns is-2">
      <div class="column is-one-quarter">
        <?php include 'views/overall/directivo/nav-aside-directivo.php'; ?>
      </div>
      <div class="column is-expanded">
        <div class="box is-info">
            <a class="button is-primary"
               href="<?php echo APP_URL ?>directivo/chargesAcademic/add/"    
            >
                <i class="fas fa-plus-circle"></i>
            </a>
        </div>
        <div class="columns is-2">
            <div class="column m-t-50">
            <!-- table render the primary charges -->
            <?php if(!empty($primaryCharges)): ?>
                <table class="table is-fullwidth is-narrow is-hoverable">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Materia</th>
                            <th>Grado</th>
                            <th>Grupo</th>
                            <th>Sede</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($primaryCharges as $p_c): ?>
                            <tr>
                                <td><?php echo $p_c['first_name'] ?></td>
                                <td><?php echo $p_c['first_lastname'] ?></td>
                                <td><?php echo $p_c['name_matter'] ?></td>
                                <td><?php echo $p_c['name_grade'] ?></td>
                                <td><?php echo $p_c['name_group'] ?></td>
                                <td><?php echo $p_c['name_sede'] ?></td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <div class="notification is-warning">
                    No hay cargas asignadas actualmente
                </div>
            <?php endif; ?>
            </div>

            <div class="column m-t-50">
            <!-- table render the balechor charges -->
            <?php if(!empty($balechorCharges)): ?>
                <table class="table is-fullwidth is-narrow is-hoverable">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Materia</th>
                            <th>Grado</th>
                            <th>Grupo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($balechorCharges as $b_c): ?>
                            <tr>
                                <td><?php echo $b_c['first_name'] ?></td>
                                <td><?php echo $b_c['first_lastname'] ?></td>
                                <td><?php echo $b_c['name_matter'] ?></td>
                                <td><?php echo $b_c['name_grade'] ?></td>
                                <td><?php echo $b_c['name_group'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <div class="notification is-warning">
                    No hay cargas asignadas actualmente
                </div>
            <?php endif; ?>
            </div>
        </div>
      </div>
    </div>
</div>
