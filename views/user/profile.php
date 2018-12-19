<?php
/*template profile */
  /* navbar interface */
  include 'views/overall/nav-user.php';
  /*bar information */
  include 'views/overall/bar_inf.php';
?>
  <div class="container">
    <div class="colums is-2">
      <div class="column box-profile">
        <img src="public/media/fotos/user-default.png" class="img-profile"  alt="<?php echo $_SESSION['nombre']; ?>"/>
      </div>

      <div class="column form-profile">

      </div>
    </div>
  </div>
