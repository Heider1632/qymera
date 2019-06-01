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
        <?php if(!empty($students)): ?>
        <table class="table is-narrow is-fullwidth">
            <thead>
                <tr>
                    <th>#</th>
                    <th>primer nombre</th>
                    <th>segundo nombre</th>
                    <th>primer apellido</th>
                    <th>segundo apellido</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($students as $s): ?>
                <tr>
                    <td><?php echo $s['n'] ?></td>
                    <td><?php echo $s['first_name'] ?></td>
                    <td><?php echo $s['second_name'] ?></td>
                    <td><?php echo $s['first_lastname'] ?></td>
                    <td><?php echo $s['second_lastname'] ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <?php else: ?>
            <div class="notification is-warning">No hay grupos creados porfavor comuniquese con el administrador de base de datos para que habilite la depuracion de datos</div>
        <?php endif; ?>
      </div>
    </div>
</div>