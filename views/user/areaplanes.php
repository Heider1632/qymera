<?php
/*template home */
  /* navbar interface */
  include 'views/overall/nav-user.php';
?>
  <div class="container is-fluid">
    <div class="columns is-2">
      <div class="column is-one-third">
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
      <?php ?>

      <div class="notification is-success m-t-10">
        <button class="delete"></button>
        Primar lorem ipsum dolor sit amet, consectetur
        adipiscing elit lorem ipsum dolor. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Sit amet,
        consectetur adipiscing elit
      </div>

      <?php ?>
      </div>
    </div>
  </div>
