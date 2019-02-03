<div class="void">
  <h1 class="title m-b-50">Configuraciones para los grados</h1>
  <form id="importGrade">
    <table class="table is-hoverable is-fullwidth">
      <thead>
        <tr>
          <th>Grado</th>
          <th>Accion</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($grades as $grade): ?>
        <tr>
          <td><?php echo $grade['nombre']; ?></td>
          <td><a class="button is-info is-medium" onclick="addGrade(event, <?php echo $grade['nombre']; ?>)">Añadir<i class="fas fa-plus"></a></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <div class="box">
      <p class="message">desear crear grados? <a href="#">Crear</a></p>
    </div>
  </form>
  <form id="newGrade">
    <div class="card" style="max-width: 400px;">
      <div class="card-header">
        <p class="card-header-title">Añadir un nuevo grado</p>
        <a href="#" class="card-header-icon" aria-label="more options">
          <span class="icon">
            <i class="fas fa-plus" aria-hidden="true"></i>
          </span>
        </a>
      </div>
      <div class="card-content">
          <div class="field is-expanded">
            <label class="label">Nombre</label>
            <div class="control">
              <input type="text" class="input is-info" id="TxtGrade" required/>
            </div>
          </div>
      </div>
      <div class="card-footer">
        <button class="button is-success is-fullwidth" id="BtnGrade">Enviar</button>
      </div>
    </div>
    <div class="box">
      <p class="message">desear importar grades? <a href="#">Importar</a></p>
    </div>
</form>
</div>
<a class="button is-info button-bottom-right is-medium" href="<?php echo APP_URL ?>coordinator/home/createGroups/">Siguiente<i class="fas fa-arrow-right"></i></a>
