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
               href="<?php echo APP_URL ?>directivo/indicators/add/"    
            >
                <i class="fas fa-plus-circle"></i>
            </a>
        </div>
        <?php if(!empty($allIndicators)): ?>
        <table class="table is-fullwidth is-narrow is-hoverable">
            <thead>
                <tr>
                    <th>Autor</th>
                    <th>Nombre</th>
                    <th>Asignatura</th>
                    <th>Periodo</th>
                    <th>Grado</th>
                </tr>
            </thead>
            <tbody>
                <?php  foreach($allIndicators as $i): ?>
                <tr>
                    <td><?php echo $i['author'] ?></td>
                    <td><?php echo $i['name'] ?></td>
                    <td><?php echo $i['matter'] ?></td>
                    <td><?php echo $i['period'] ?></td>
                    <td><?php echo $i['grade'] ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php else: ?>
            <div class="notification is-warning">
                No hay indicares disponibles.
            </div>
        <?php endif; ?>
      </div>
    </div>
</div>
