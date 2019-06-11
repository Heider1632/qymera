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
            <h3 class="has-text-centered">Sistema de reportes</h3>
        </div>
        
        <?php echo "Hola 🇦🇴 "; ?>
        <div class="columns is-2">
            <div class="column">
                <a 
                    href="<?php echo APP_URL ?>teacher/reports/simplereport/"
                    class="button is-fullwidth is-primary"
                    >
                    <i class="fas fa-download"></i>
                </a>
            </div>
            <div class="column">
                <a 
                    href="<?php echo APP_URL ?>teacher/reports/simplyreport/"
                    class="button is-fullwidth is-primary"
                    >
                    <i class="fas fa-download"></i>
                </a>
            </div>
        </div>
      </div>
    </div>
    </div>
  </div>
