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
          <!-- bar to actions -->
            <?php if(3 > 5): ?>
              <p class="notification is-warning">El tiempo estimado para ver los indicador se ha acabado, porfavor pongase en contacto con administracion para cambiar la hora </p>
              <?php else: ?>
              <p class="notification is-primary">
                Añadir un indicador
                <a class="button is-small is-link" onclick="openModalAdd()">Añadir</a>
              </p>
              <?php endif; ?>

              <div class="tabs is-centered m-b-20">
                <ul>
                  <?php foreach($materias as $m): ?>
                      <form id="handleMater_<?php echo $m['materia_id']; ?>" action="#" method="post">
                      <input type="hidden" name="id_m" value="<?php echo $m['materia_id']; ?>"/>
                      <li><a href="javascript:{}" onclick="document.getElementById('handleMater_<?php echo $m['materia_id']; ?>').submit(); return false;"><?php echo $m['materia_nombre']; ?></a></li>
                      </form>
                  <?php endforeach; ?>
                </ul>
              </div>

          <!-- main indicator -->
          <?php if(isset($_POST['id_m'])):
          $id_materia = $_POST['id_m'];

          $indicadores = ($teacher->getIndicadores($id_docente, $id_materia, $id_periodo));

          if(!empty($indicadores)): ?>
              <table class="table is-hoverable is-narrow is-fullwidth">
               <thead>
                  <tr>
                   <th>#</th>
                   <th>Indicador</th>
                   <th>Grado</th>
                   <th>Acciones</th>
                  </tr>
               </thead>
              <tbody>
               <?php
               foreach ($indicadores as $ind): ?>
                  <tr>
                   <td><?php echo $ind['n']; ?> </td>
                   <td><?php echo $ind['nombre']; ?></td>
                   <td><?php echo $ind['grado_nombre']; ?></td>
                   <td>
                     <a class="button is-small is-link" href="editInd&id_indicador=<?php echo $ind['id']; ?>"><i class="fas fa-edit"></i></a>
                     <a class="button is-small is-danger" href="delInd&id_indicador=<?php echo $ind['id']; ?>"><i class="fas fa-trash"></i></a>
                   </td>
                  </tr>
               <?php endforeach; ?>
               </tbody>
              </table>
              <?php else: ?>
              <p class="notification is-warning" >No hay inidicadores de logros disponibles para este grado!</p>
            <?php endif; ?>
          <?php else: ?>
            <p class="notification is-primary">Esperando...</p>
          <?php endif; ?>

          <div id="add_ind_modal" class="modal modal-fx-fadeInScale modal-pos-bottom">
            <div class="modal-background"></div>
              <div class="modal-content is-tiny">
                <header class="modal-card-head">
                  <p class="modal-card-title">Añadir un Indicador</p>
                </header>
                <section class="modal-card-body">
                    <div class="field">
                      <div class="control">
                        <div class="select is-primary">
                          <select id="id_grado">
                            <?php foreach($grados as $g): ?>
                            <option value="<?php echo $g['id_grado']; ?>"><?php echo $g['grado_nombre']; ?></option>
                            <?php endforeach; ?>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="field">
                      <div class="control">
                        <div class="select is-primary">
                          <select id="id_materia">
                            <?php foreach($materias as $mt): ?>
                            <option value="<?php echo $mt['materia_id']; ?>"><?php echo $mt['materia_nombre']; ?></option>
                            <?php endforeach; ?>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="field">
                      <div class="control">
                        <input type="num" id="n" class="input"/>
                      </div>
                    </div>
                    <!-- token -->
                		<div class="field">
              			<label class="label">Nombre de indicador</label>
                      <div class="control">
              			       <textarea class="form-control" id="new_indicador" rows="3" placeholder="Porfavor no usar caracteres especiales, ni acentuaciones" required=""></textarea>
                      </div>
            			   </div>
                </section>
                <footer class="modal-card-foot">
                  <button class="modal-button-close button is-success" id="btnAddInd">Enviar</button>
                  <button class="modal-button-close button">Cancel</button>
                </footer>
              <!-- Any other Bulma elements you want -->
            </div>
            <button class="modal-close is-large" aria-label="close"></button>
          </div>

      </div>
      <?php include 'views/user/grado.php'; ?>
      </div>
    </div>
