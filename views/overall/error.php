<div id="notfound">
  <div class="notfound">
    <div class="notfound-404">
      <h1>404</h1>
    </div>
    <h2>Oops! Page Not Be Found</h2>
    <p>Sorry but the page you are looking for does not exist, have been removed. name changed or is temporarily unavailable</p>
    <?php if($_SESSION['cargo'] == 2): ?>
    <a href="<?php echo APP_URL; ?>teacher/home/">Back to homepage</a>
  <?php else: ?>
    <a href="<?php echo APP_URL; ?>coordinator/home/">Back to homepage</a>
    <?php endif; ?>
  </div>
</div>
