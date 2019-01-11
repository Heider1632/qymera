<?php
  /* template calendar */
    /* interface navigation*/
    if($_SESSION['cargo'] == '2'){
      include 'views/overall/nav-user.php';
    }else{
      include 'views/overall/nav-admin.php';
    }
?>
<div class="container is-fluid">
  <div class="columns is-2">
    <div class="column is-one-quarter">
      <?php include 'views/overall/nav-aside.php'; ?>
    </div>
    <div class="column">
      <div class="m-t-25 m-l-20 m-r-20">
        <!-- render view -->
        <h1>compartir</h1>
      </div>
    </div>
  </div>
</div>
