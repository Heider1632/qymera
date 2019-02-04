<div class="container">
  <div class="columns is-2">
    <div class="column m-t-50  animated bounceInLeft">
      <h1 class="title">Primaria</h1>
      <form>
        <table class="table is-hoverable is-fullwidth m-t-100">
          <thead>
            <tr>
              <th>Grado</th>
              <th>Grupo</th>
              <th>Accion</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <div class="field">
                  <div class="control">
                    <div class="select is-fullwidth">
                      <select id="TxtSelectPrimaryName">
                        <?php foreach ($primary_grades as $primary): ?>
                          <option value="<?php echo $primary['id']; ?>"><?php echo $primary['nombre']; ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  </div>
                </div>
              </td>
              <td>
                <div class="field">
                  <div class="control">
                    <div class="select is-fullwidth">
                      <select id="TxtSelectPrimaryGroup">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                      </select>
                    </div>
                  </div>
                </div>
              </td>
              <td><a class="button is-info is-medium" id="BtnAddPrimaryGroup">Añadir<i clas="fas fa-plus"></a></td>
            </tr>
          </tbody>
        </table>
      </form>
    </div>
    <div class="column m-t-50">
    <?php if(!empty($groups)): ?>
      <table class="table is-hoverable is-narrow">
        <thead>
          <tr>
            <th>Grado</th>
            <th>Grupo</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($groups as $group): ?>
            <tr>
              <td><?php echo $group['nombre_grado']; ?></td>
              <td><?php echo $group['nombre_grupo']; ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <?php else: ?>
        <div class="notification is-warning">No hay grupos creados</div>
      <?php endif;?>
    </div>
  </div>
</div>
<a class="button is-info is-medium button-bottom-right" href="<?php echo APP_URL ?>coordinator/home/createGroups/balechor/">Siguiente<i class="fas fa-arrow-right"></i></button>
<a class="button is-info is-medium button-bottom-left" href="<?php echo APP_URL ?>coordinator/home/createGrades/"><i class="fas fa-arrow-left"></i>Atrás</a>
