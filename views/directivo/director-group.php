<?php
  //navigaton to//
  include 'views/overall/directivo/nav-directivo.php';
?>
  <div class="container">
    <div class="columns is-2">
      <div class="column is-one-third">
        <?php include 'views/overall/directivo/nav-aside-director-group.php' ?>
      </div>
      <div class="column">
        <div class="columns is-multiline">
          <!-- validator if exist any director group in the database-->
          <?php if(!empty($director_groups)): ?>
            <!--  bucle card for every director group -->
            <?php foreach ($director_groups as $director_group): ?>
              <div class="column">
                <div class="card">
                 <div class="card-image">
                    <figure class="image is-4by3">
                      <?php if($director_group['photo'] != 'null'): ?>
                        <img 
                          src="<?php echo $director_group['photo']; ?>" 
                          alt="<?php echo $director_group['first_name'] ?>"
                        >
                      <?php else: ?>
                        <img 
                          src="<?php  echo APP_URL ?>public/media/user-default.png" 
                          class="p-l-80 p-r-80 p-b-50 p-t-50"
                          width="300"
                          heigth="300"
                          alt="Placeholder image"
                        >
                      <?php endif; ?>
                    </figure>
                  </div>
                  <div class="card-content">
                    <div class="media">
                      <div class="media-content">
                        <p class="title is-4">
                          <?php echo $director_group['first_name']; ?>
                        </p>
                        <p class="subtitle is-6">
                          <?php echo $director_group['first_lastname']; ?>
                        </p>
                      </div>
                    </div>

                    <div class="content">
                      <a 
                      href="<?php echo APP_URL ?>directivo/directorgroup/edit/<?php echo $director_group['id']; ?>/" 
                         class="button is-info">
                        <i class="fas fa-edit"></i>
                      </a>
                      <a 
                      href="<?php echo APP_URL ?>directivo/directorgroup/delete/<?php echo $director_group['id']; ?>/" 
                      class="button is-danger">
                        <i class="fas fa-trash"></i>
                      </a>
                      
                    </div>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
            <!-- end bucle -->
          <?php else: ?>
            <div class="notification is-warning is-fullwidth m-t-50">
              No hay directores de grupo actualmente.
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
<?php
  include 'html/overall/scripts.php';
?>
