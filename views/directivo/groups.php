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
                        href="<?php echo APP_URL ?>directivo/groups/primary/">
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
                        href="<?php echo APP_URL ?>directivo/groups/balechor/">
                        Secundaria<i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            </div>
        </div>
        </div>
      </div>
    </div>
</div>
