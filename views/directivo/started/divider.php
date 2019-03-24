<?php include 'views/overall/directivo/nav-config.php'; ?>
<div class="container">
  <div class="columns is-2">
    <div class="column m-t-50">
      <div class="card animated bounceInDown">
        <div class="card-image">
          <figure class="image is-4by3">
            <img src="<?php echo APP_URL ?>/public/images/kids.jpg" alt="Placeholder image">
          </figure>
        </div>
        <div class="card-content">

          <div class="content">
            <a class="button is-fullwidth is-primary" 
            href="<?php echo APP_URL ?>directivo/home/config/primary/createsedes/">
              Primaria<i class="fas fa-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="column m-t-50">
      <div class="card animated bounceInUp">
        <div class="card-image">
          <figure class="image is-4by3">
            <img src="<?php echo APP_URL ?>/public/images/youngs.jpg" alt="Placeholder image">
          </figure>
        </div>
        <div class="card-content">
          <div class="content">
            <a class="button is-fullwidth is-primary" 
            href="<?php echo APP_URL ?>directivo/home/config/balechor/createsedes/">
              Secundaria<i class="fas fa-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<a class="button is-info is-medium button-bottom-left" 
href="<?php echo APP_URL ?>directivo/home/createinstitute/">
      <i class="fas fa-arrow-left"></i>Atrás
</a>
