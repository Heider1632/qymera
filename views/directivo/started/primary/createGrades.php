<?php include 'views/overall/directivo/nav-config.php'; ?>
<div class="container">
  <div class="columns is-2">
    <div class="column m-t-20">
  <h1 class="title m-b-50">Configuraciones para los grados de primaria</h1>
  <form id="importGrade">
  <?php if(!empty($grade)): ?>
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
          <td><a class="button is-info is-medium" onclick="addGrade(event, <?php echo $grade['nombre']; ?>)">Añadir
            <i class="fas fa-plus"></i></a></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  <?php else: ?>
  <div class="notification is-warning">No hay grados que importar vaya a la seccion de crear grados</div>
  <?php endif; ?>
    <div class="box">
      <p class="message">desear crear grados? <a href="#">Crear</a></p>
    </div>
  </form>
  <form id="newGrade">
    <div class="card">
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
    <br />
    <div class="box">
      <p class="message">desear importar grades? <a href="#">Importar</a></p>
    </div>
</form>
</div>
<div class="column m-t-20">
   <?php if(!empty($primary_grades)): ?>
                <table class="table is-hoverable is-fullwidth is-narrow">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($primary_grades as $g): ?>
                            <tr>
                                <td><?php echo $g['name']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <div class="notification is-warning">No hay asignatura aún creadas.</div>
            <?php endif; ?>
</div>
</div>
</div>
<a class="button is-info is-medium button-bottom-left" 
href="<?php echo APP_URL ?>directivo/home/config/primary/createSedes/">
    <i class="fas fa-arrow-left"></i>Atrás
</a>
<a class="button is-info button-bottom-right is-medium" 
href="<?php echo APP_URL ?>directivo/home/config/primary/createGroups/">
  Siguiente<i class="fas fa-arrow-right"></i>
</a>
