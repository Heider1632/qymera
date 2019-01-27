<div class="void">
  <form id="importGroup">
    <table class="table is-hoverable is-fullwidth">
      <thead>
        <tr>
          <th>Grado</th>
          <th>Grupo</th>
          <th>Accion</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($groups as $group): ?>
        <tr>
          <td><?php echo $group['nombre_grado']; ?></td>
          <td><?php echo $group['nombre_grupo']; ?></td>
          <td><button class="button is-info is-small">Añadir<i clas="fas fa-plus"></button></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <div class="box">
      <p class="message">desear crear grupos? <a href="#">Crear</a></p>
    </div>
  </form>
  <form id="newGroup">
    <div class="card" style="max-width: 400px;">
      <div class="card-header">
        <p class="card-title-header"></p>
      </div>
      <div class="card-content">

      </div>
      <div class="card-footer">
        <button class="button is-success is-fullwidth" id="BtnGroups">Enviar</button>
      </div>
    </div>
    <div class="box">
      <p class="message">desear importar grupos? <a href="#">Importar</a></p>
    </div>
</form>

</div>
<a class="button is-info is-medium button-bottom-right" href="<?php echo APP_URL ?>coordinator/home/importStudents/">Siguiente<i class="fas fa-arrow-right"></i></button>
<a class="button is-info is-medium button-bottom-left" href="<?php echo APP_URL ?>coordinator/home/createGrades/"><i class="fas fa-arrow-left"></i>Atrás</a>
