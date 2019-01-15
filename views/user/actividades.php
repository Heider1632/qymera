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
        <!--- start form activity -->
          <form class="m-t-20">
            <div class="field is-horizontal">
              <div class="field-label"></div>
              <div class="field-body">
                <div class="field is-expanded">
                  <div class="field has-addons">
                    <p class="control">
                      <a class="button is-static">
                        Titulo
                      </a>
                    </p>
                    <p class="control is-expanded">
                      <input class="input" type="tel" placeholder="el titulo de la actividad">
                    </p>
                  </div>
                  <p class="help">en minusculas sin caracteres especiales.</p>
                </div>
              </div>
            </div>

            <div class="field is-horizontal">
              <div class="field-label is-normal">
                <label class="label">Fechas</label>
              </div>
              <div class="field-body">
                <div class="field">
                  <div class="field has-addons">
                    <p class="control is-expanded">
                      <input class="input" type="date" placeholder="fecha_inicio" id="start_date">
                    </p>
                  </div>
                  <p class="help">Fecha de inicio</p>
                </div>
                <div class="field">
                  <div class="field has-addons">
                    <p class="control is-expanded">
                      <input class="input" type="date" placeholder="fecha de finalizacion" id="end_date">
                    </p>
                  </div>
                  <p class="help">Fecha de finalizacion</p>
                </div>
              </div>
            </div>

            <div class="field is-horizontal">
              <div class="field-label">
                <!-- Left empty for spacing -->
              </div>
              <div class="field-body">
                <div class="field is-expanded">
                  <div class="control">
                    <button class="button is-primary is-fullwidth" id="btnActivity">
                      Enviar
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <!-- end form actiity -->
          </form>
        </div>
      </div>
    </div>
