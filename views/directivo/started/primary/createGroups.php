<?php include 'views/overall/directivo/nav-config.php'; ?>
<div class="container">
  <div class="columns is-2">
    <div class="column m-t-50  animated bounceInLeft">
      <h1 class="title">Primaria</h1>
      <form>
         <div class="field">
           <div class="control">
            <label class="label">Sedes</label>
            <span>Selecione una sede para crear el grupo.</span>
             <div class="select is-fullwidth">
              <select id="TxtSelectSede"> 
              <?php $length = count($sedes); ?>
               <?php for($i = 1; $i < $length; $i++){ ?>
                  <option value="<?php echo $sedes[$i]['id']; ?>">Sede: <?php echo $sedes[$i]['name']; ?></option>
                <?php } ?>
               </select>
             </div>
           </div>
         </div>
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
                          <option value="<?php echo $primary['id']; ?>"><?php echo $primary['name']; ?></option>
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
                       <?php foreach($groups as $g): ?>
                         <option value="<?php echo $g['id']; ?>"><?php echo $g['name']; ?></option>
                        <?php endforeach; ?>
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
    <?php if(!empty($primary_groups)):?>
      <h1 class="title has-text-centered">Grupos de la sedes</h1>
      <table class="table is-hoverable is-fullwidth is-narrow is-scrollable">
        <thead>
          <tr>
            <th>Grado</th>
            <th>Grupo</th>
            <th>Sede</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($primary_groups as $p_group): ?>
            <tr>
              <td><?php echo $p_group['nombre_grado']; ?></td>
              <td><?php echo $p_group['nombre_grupo']; ?></td>
              <td><?php echo $p_group['nombre_sede']; ?></td>
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

<a class="button is-info is-medium button-bottom-right"
href="<?php echo APP_URL ?>directivo/home/config/primary/createMatters/">      
	Siguiente<i class="fas fa-arrow-right"></i>
</a>
<a class="button is-info is-medium button-bottom-left" 
href="<?php echo APP_URL ?>directivo/home/config/primary/createGrades/">
     <i class="fas fa-arrow-left"></i>Atrás
</a>