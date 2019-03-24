<?php include 'views/overall/directivo/nav-config.php'; ?>
<div class="void animated fadeIn">
  <div class="columns is-2">
    <div class="column">
       <a class="button is-info is-fullwidth m-b-50" 
       href="<?php echo APP_URL ?>/directivo/home/config/primary/createCharges/">
            <i class="fas fa-arrow-left"></i>Primaria
        </a>
        <a class="button is-info is-fullwidth"
         href="<?php echo APP_URL ?>/directivo/home/config/balechor/createCharges/">
            <i class="fas fa-arrow-left"></i>Bachillerato
        </a>
    </div>
    <div class="column">
      <div class="card" style="max-width: 400px;">
        <div class="card-header">
          <p class="card-header-title">ha terminado de configurar el año <?php echo date('Y') ?></p>
        </div>
        <div class="card-content">
          ya esta todo listo para que comiences a utlizar la plataforma qymera!
        </div>
        <div class="card-footer">
          <a id="BtnFinishConfig" class="button is-success is-fullwidth">
            Finzalizar<i class="fas fa-arrow-right"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>