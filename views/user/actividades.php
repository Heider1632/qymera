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
              <div class="field-label"></div>
              <div class="field-body">
                <div class="field is-expanded">
                  <div class="field has-addons">
                    <p class="control">
                      <a class="button is-static">
                        Tipo
                      </a>
                    </p>
                    <p class="control is-expanded">
                      <input class="input" type="tel" placeholder="el titulo de la actividad" id="tipo">
                    </p>
                  </div>
                  <p class="help">ejemplo: taller, examen, ensayo, etc.</p>
                </div>
              </div>
            </div>

            <div class="field is-horizontal">
              <div class="field-label is-normal">
                <label class="label">Descripcion</label>
              </div>
              <div class="field-body">
                <div class="field">
                  <div class="field has-addons">
                    <p class="control is-expanded">
                      <textarea class="textarea is-primary is-fullwidth" rows="3" autofocus id="description"></textarea>
                    </p>
                  </div>
                  <p class="help">Descripcion de la actividad</p>
                </div>
              </div>
            </div>

            <div class="field is-horizontal">
              <div class="field-label is-normal">
                <label class="label">Indicador</label>
              </div>
              <div class="field-body">
                <div class="field">
                  <div class="field has-addons">
                    <p class="control is-expanded">
                      <div class="select is-fullwidth">
                        <select class="is-hovered" id="id_indicator">
                          <option value="0">Seleccione un indicador</option>
                          <?php foreach($indicadores as $indicador): ?>
                          <option value="id_indicador"><?php echo $indicador['nombre'] . "-" . $indicador['grado_nombre'] . "-" . $indicador['grupo_nombre'] ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                    </p>
                  </div>
                  <p class="help">Seleccion un indicador correspondiente a la actividad</p>
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
