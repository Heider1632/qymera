<?php
/*template home */
  /* navbar interface */
  include 'views/overall/teacher/nav-user.php';
  include 'views/overall/teacher/nav-tool.php';
?>
    <div class="columns is-2">
      <div class="column is-one-quarter">
        <?php include 'views/overall/teacher/nav-aside.php'; ?>
      </div>
      <div class="column">
          <!-- bar to actions -->
            <?php if(3 > 5): ?>
              <p class="notification is-warning">El tiempo estimado para ver los indicador se ha acabado, porfavor pongase en contacto con administracion para cambiar la hora </p>
              <?php else: ?>
              <p class="notification is-primary m-t-10">
                Añadir un indicador
                <a class="button is-small is-link" onclick="openModalAdd()">Añadir</a>
              </p>
              <?php endif; ?>

            <?php foreach($matters as $m): ?>

            <div class="tabs is-centered m-b-20 is-large">
              <ul>
                <li><a href="#"><?php echo $m['name_matter']; ?></a></li>
              </ul>
            </div>

            <!-- main indicator -->
            <?php
            $id_matter = $m['id_matter'];
            $indicadores = $teacher->getIndicadores($id_matter);

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
                      <!--<a class="button is-small is-link" onclick="redirecEdit(<?php //echo $ind['id']; ?>)">
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
              <?php else: ?>
                <p class="notification is-warning" >No hay inidicadores de logros disponibles para este grado!</p>
              <?php endif; endforeach; ?>
              <!-- FROM ADD INDICATOR -->
              <div id="add_ind_modal" class="modal modal-fx-fadeInScale modal-pos-bottom">
                <div class="modal-content is-tiny">
                  <header class="modal-card-head">
                    <p class="modal-card-title">Añadir un Indicador</p>
                  </header>
                  <section class="modal-card-body">
                    <div class="field">
                      <div class="control">
                        <div class="select is-primary">
                          <select id="id_matter">
                            <?php foreach($matters as $mt): ?>
                              <option value="<?php echo $mt['id_matter']; ?>"><?php echo $mt['name_matter']; ?></option>
                            <?php endforeach; ?>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="field">
                      <div class="control">
                        <div class="select is-primary">
                          <select id="id_grade">
                            <?php foreach($grados as $g): ?>
                            <option value="<?php echo $g['id_grade']; ?>"><?php echo $g['name_grade']; ?></option>
                            <?php endforeach; ?>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="field">
                      <div class="control">
                        <div class="select is-primary">
                          <select id="id_group">
                            <?php foreach($grupos as $grupo): ?>
                            <option value="<?php echo $grupo['id_group']; ?>"><?php echo $grupo['id_group']; ?></option>
                            <?php endforeach; ?>
                            <option value="0">todos</option>
                          </select>
                        </div>
                      </div>
                    </div>

                		<div class="field">
              			<label class="label">Descripción</label>
                      <div class="control">
              			       <textarea class="textarea" id="new_indicator" rows="3" placeholder="Porfavor no usar caracteres especiales, ni acentuaciones" required=""></textarea>
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
