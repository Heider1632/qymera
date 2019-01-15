<?php
/*template home */
  /* navbar interface */
  include 'views/overall/nav-user.php';
?>
  <div class="container is-fluid">
    <div class="columns is-2">
      <div class="column is-one-quarter">
        <?php include 'views/overall/nav-aside.php'; ?>
      </div>
      <div class="column">
        <div class="box m-t-20">
          <label class="label">Subir plan de area</label>
          <div class="field">
            <label class="label">Materia</label>
            <div class="control">
              <div class="select is-primary is-rounded is-fullwidth">
                <select id="id_matter">
                  <?php $matters = $teacher->getMateria(); foreach($matters as $m): ?>
                  <option value="<?php echo $m['materia_id'] ?>"><?php echo $m['materia_nombre'] ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
          </div>
          <div class="field">
            <label class="label">Grado</label>
            <div class="control">
              <div class="select is-info is-rounded is-fullwidth">
                <select id="id_grade">
                  <option value="1">6</option>
                  <option value="2">7</option>
                  <option value="3">8</option>
                  <option value="4">9</option>
                  <option value="5">10</option>
                  <option value="6">11</option>
                </select>
              </div>
            </div>
          </div>
          <div class="field">
            <div class="control">
              <div class="file has-name is-fullwidth">
                <label class="file-label">
                  <input class="file-input" type="file" id="file">
                  <span class="file-cta">
                    <span class="file-icon">
                      <i class="fas fa-upload"></i>
                    </span>
                    <span class="file-label">
                      Choose a file…
                    </span>
                  </span>
                  <span class="file-name" id="textFile">
                      Esperando
                  </span>
                </label>
              </div>

            </div>
            <p class="help">Solo se aceptan extensiones compatibles con word</p>
          </div>

          <div id="progress-wrp">
            <progress id="progress" class="status progress is-info" value="0" max="100">0%</progress>
          </div>
      </div>
      <?php $planes_area = $coexistence->getAreaPlanes(); if(!empty($planes_area)): ?>

        <?php foreach ($planes_area as $p): ?>
          <div class="notification is-info">
            <p class="title">
              grado: <?php echo $p['nombre_grado']; ?>
              materia: <?php echo $p['nombre_materia']; ?>
              tipo: <?php echo $p['ext']; ?>
              <a target="_blank" href="<?php echo APP_URL; ?>teacher/areaplanes/read/<?php echo $p['id']; ?>/">
                <i class="fas fa-book"></i>
              </a>
            </p>
          </div>
        <?php endforeach; ?>
      <?php else:?>

        <div class="notification is-warning m-t-10">
          <button class="delete"></button>
          Aún no han subido ningun plan de area
        </div>

      <?php endif;?>
      </div>
    </div>
  </div>
