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
          <div class="box m-t-10">

          </div>
          <!-- bar to actions -->
            <?php if(3 > 5): ?>
              <p class="notification is-warning">El tiempo estimado para ver los indicador se ha acabado, porfavor pongase en contacto con administracion para cambiar la hora </p>
              <?php else: ?>
              <p class="notification is-primary">
                Añadir un indicador
                <a class="button is-small is-link" onclick="openModalAdd()">Añadir</a>
              </p>
              <?php endif; ?>

            <?php foreach($materias as $m): ?>

            <div class="tabs is-centered m-b-20 is-large">
              <ul>
                <li><a href="#"><?php echo $m['materia_nombre']; ?></a></li>
              </ul>
            </div>

            <!-- main indicator -->
            <?php
            $id_materia = $m['materia_id'];
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
                       <a class="button is-small is-link" id="btnEditToggle"><i class="fas fa-edit"></i></a>
                       <a class="button is-small is-danger" id="btnDelToggle"><i class="fas fa-trash"></i></a>
                     </td>
                    </tr>
                 <?php endforeach; ?>
                 </tbody>
                </table>

                <!-- form edit -->

                <!-- form del -->
                <form id="form-del">
                  <?php $id_indicador = $_GET['id_indicador']; ?>
                  <article class="message is-warning m-t-50">
                    <div class="message-header">
                      <p>Deseas Eliminar este indicador?</p>
                      <button class="delete" aria-label="delete"></button>
                    </div>
                    <div class="message-body">
                      <input type="hidden" id="id_indicador_to_del" value="<?php echo $_GET['id_indicador']?>"/>
                      <button class="button is-danger is-fullwidth" id="btnDelInd"><i class="fas fa-trash"></i></button>
                    </div>
                  </article>
                </form>
                <?php else: ?>
                <p class="notification is-warning" >No hay inidicadores de logros disponibles para este grado!</p>
              <?php endif; endforeach; ?>

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
                          <select id="id_grupo">
                            <?php foreach($grupos as $grupo): ?>
                            <option value="<?php echo $grupo['id_grupo']; ?>"><?php echo $grupo['grupo_nombre']; ?></option>
                            <?php endforeach; ?>
                          </select>
                        </div>
                      </div>
                    </div>

                		<div class="field">
              			<label class="label">Descripción</label>
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
  </div>
</div>
