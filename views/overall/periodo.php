<?php
  /*template period */
    /* interface navigation*/
    include 'views/overall/nav-user.php';
?>
<div class="container">
    <?php if(!empty($periodos)): ?>
    <div class="tabs is-centered">
      <ul>
        <?php foreach ($periodos as $p): ?>
            <form id="handlePer_<?php echo $p['periodo_id']; ?>" action="#" method="post">
            <input type="hidden" name="periodo_id" value="<?php echo $p['periodo_id']?>"/>
            <li><a href="javascript:{}" onclick="document.getElementById('handlePer_<?php echo $p['periodo_id']; ?>').submit(); return false;"><?php echo $p['periodo_nombre']; ?></a></li>
            </form>
        <?php endforeach; ?>
      </ul>
    </div>
    <?php else: ?>
      <div class="notification is-danger">Hubo un error cargando porfavor consulte con la administración</div>
    <?php endif; ?>
</div>

<div class="container">
  <div class="columns m-t-20">
  <?php if($_POST['periodo_id']): ?>
    <div class="column">
    </div>
  <?php else: ?>
  </div>
    <p class="notification is-link">Presiona cualquiera materia de la cuál desees información</p>
  <?php endif; ?>
</div>
