<?php
/*template home */
  /* navbar interface */
  include 'views/overall/nav-user.php';
  include 'views/overall/nav-tool.php';
?>
    <div class="columns is-2">
      <div class="column is-one-quarter">
        <?php include 'views/overall/nav-aside.php'; ?>
      </div>
      <div class="column">
        <div class="container">
          <!-- bar to actions -->
            <?php if(3 > 5): ?>
              <p class="notification is-warning">El tiempo estimado para ver los indicador se ha acabado, porfavor pongase en contacto con administracion para cambiar la hora </p>
              <?php else: ?>
              <p class="notification is-primary m-t-10">
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
            $indicadores = $teacher->getIndicadores($id_materia);

            if(!empty($indicadores)): ?>
                <table class="table is-hoverable is-narrow is-fullwidth">
                 <thead>
                    <tr>
                     <th>Indicador</th>
                     <th>Grado</th>
                     <th>Grupo</th>
                     <th>Acciones</th>
                    </tr>
                 </thead>
                <tbody>
                 <?php
                 foreach ($indicadores as $ind): ?>
                    <tr>
                     <td><?php echo $ind['nombre']; ?></td>
                     <td><?php echo $ind['grado_nombre']; ?></td>
                     <?php if($ind['grupo_nombre'] != 0): ?>
                       <td><?php echo $ind['grupo_nombre']; ?></td>
                     <?php else:?>
                       <td>Todos</td>
                     <?php endif;?>
                     <td>
                      <!--<a class="button is-small is-link" onclick="redirecEdit(<?php echo $ind['id']; ?>)">
                        <i class="fas fa-edit"></i>
                      </a>-->
                       <a class="button is-small is-danger" onclick="deleteInd(<?php echo $ind['id']; ?>)">
                        <i class="fas fa-trash"></i>
                      </a>
                      <a class="button is-small is-info" href="<?php echo APP_URL ?>teacher/indicador/<?php echo $ind['id'] ?>/">
                        <i class="fas fa-tasks"></i>
                      </a>
                     </td>
                    </tr>
                 <?php endforeach; ?>
                 </tbody>
                </table>
                <?php if(!empty($view[2])):
                  $id_indicador = $view[2];

                  $edit_indicador = find_unic_indicator($id_indicador); ?>
                <!-- form edit -->
                <form id="form-edit" class="form">
                  <div class="box">

                  <input type="hidden" id="edit_id_indicador" value="<?php echo $id_indicador ?>"/>

                  <div class="field">
                    <label class="label is-centered">Materia</label>
                    <div class="control is-fullwidth">
                      <div class="select is-primary">
                        <select id="edit_id_materia">
                          <?php foreach($materias as $mt): ?>
                            <option value="<?php echo $mt['materia_id']; ?>"><?php echo $mt['materia_nombre']; ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="field">
                    <label class="label">Grado</label>
                    <div class="control">
                      <div class="select is-primary">
                        <select id="edit_id_grado">
                          <?php foreach($grados as $g): ?>
                          <option value="<?php echo $g['id_grado']; ?>"><?php echo $g['grado_nombre']; ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="field">
                    <label class="label">Grupo</label>
                    <div class="control">
                      <div class="select is-primary">
                        <select id="edit_id_grupo">
                          <?php foreach($grupos as $grupo): ?>
                          <option value="<?php echo $grupo['id_grupo']; ?>"><?php echo $grupo['grupo_nombre']; ?></option>
                          <?php endforeach; ?>
                          <option value="0">todos</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="field">
                    <label class="label">Descripcion</label>
                    <div class="control">
                      <textarea class="textarea" id="edit_indicador" placeholder="Textarea"><?php echo $edit_indicador['nombre']; ?></textarea>
                    </div>
                  </div>

                  <div class="field is-grouped">
                    <div class="control">
                      <button id="btnModInd" class="button is-success is-normal is-fullwidth"><i class="fab fa-telegram-plane"></i></button>
                    </div>
                    <div class="control">
                      <button class="button is-text is-normal" id="btnCancelEdit">Cancel</button>
                    </div>
                  </div>

                  </div>
                </form>
              <?php endif; else: ?>
                <p class="notification is-warning" >No hay inidicadores de logros disponibles para este grado!</p>
              <?php endif; endforeach; ?>

              <div id="add_ind_modal" class="modal modal-fx-fadeInScale modal-pos-bottom">
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
                            <option value="0">todos</option>
                          </select>
                        </div>
                      </div>
                    </div>

                		<div class="field">
              			<label class="label">Descripción</label>
                      <div class="control">
              			       <textarea class="textarea" id="new_indicador" rows="3" placeholder="Porfavor no usar caracteres especiales, ni acentuaciones" required=""></textarea>
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
