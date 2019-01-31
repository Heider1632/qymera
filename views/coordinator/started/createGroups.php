<div class="container">
  <div class="columns is-3">
    <div class="column m-t-50">
      <h1 class="title">Primaria</h1>
      <form>
        <table class="table is-hoverable is-fullwidth">
          <thead>
            <tr>
              <th>Grado</th>
              <th>Grupo</th>
              <th>Accion</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($primary_grades as $primary): ?>
            <tr>
              <td class="TxtSelectGrade"><?php echo $primary['nombre']; ?></td>
              <td>
                <div class="field">
                  <div class="control">
                    <div class="select is-fullwidth">
                      <select id="TxtSelectGroup">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                      </select>
                    </div>
                  </div>
                </div>
              </td>
              <td><a class="button is-info is-small" id="BtnAddGroup">Añadir<i clas="fas fa-plus"></a></td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </form>
    </div>
    <div class="column m-t-50">
      <h1 class="title">Bachillerato</h1>
      <form>
        <table class="table is-hoverable is-fullwidth">
          <thead>
            <tr>
              <th>Grado</th>
              <th>Grupo</th>
              <th>Accion</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($balechor_grades as $balechor): ?>
            <tr>
              <td><?php echo $balechor['nombre']; ?></td>
              <td>
                <div class="field">
                  <div class="control">
                    <div class="select is-fullwidth">
                      <select id="TxtSelectGroup">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                      </select>
                    </div>
                  </div>
                </div>
              </td>
              <td><button class="button is-info is-small">Añadir<i clas="fas fa-plus"></button></td>
            </tr>
            <?php endforeach; ?>
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
<a class="button is-info is-medium button-bottom-right" href="<?php echo APP_URL ?>coordinator/home/importStudents/">Siguiente<i class="fas fa-arrow-right"></i></button>
<a class="button is-info is-medium button-bottom-left" href="<?php echo APP_URL ?>coordinator/home/createGrades/"><i class="fas fa-arrow-left"></i>Atrás</a>
