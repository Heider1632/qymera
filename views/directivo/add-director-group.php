<?php
  //navigaton to//
  include 'views/overall/directivo/nav-directivo.php';
?>
  <div class="container">
    <div class="columns is-2">
      <div class="column is-one-third">
        <?php include 'views/overall/directivo/nav-aside-director-group.php'; ?>
      </div>
      <div class="column">
        <div class="colums">
          <div class="column m-t-50">
          <h1 class="title has-text-centered">Director de grupo para bachillerato</h1>
          <!-- first option -->
          <div class="field has-addons p-l-20 p-r-20">
            <label class="label is-normal m-r-20 is-info">Docentes</label>
            <div class="control is-expanded">
              <div class="select is-fullwidth">
                <select name="country">
                  <option value="Argentina">Argentina</option>
                  <option value="Bolivia">Bolivia</option>
                  <option value="Brazil">Brazil</option>
                  <option value="Chile">Chile</option>
                  <option value="Colombia">Colombia</option>
                  <option value="Ecuador">Ecuador</option>
                  <option value="Guyana">Guyana</option>
                  <option value="Paraguay">Paraguay</option>
                  <option value="Peru">Peru</option>
                  <option value="Suriname">Suriname</option>
                  <option value="Uruguay">Uruguay</option>
                  <option value="Venezuela">Venezuela</option>
                </select>
              </div>
            </div>
          </div>
          <!-- second option -->
          <div class="field has-addons p-l-20 p-r-20">
            <label class="label is-normal m-r-20">Grupos</label>
            <div class="control is-expanded">
              <div class="select is-fullwidth">
                <select name="country">
                  <option value="Argentina">Argentina</option>
                  <option value="Bolivia">Bolivia</option>
                  <option value="Brazil">Brazil</option>
                  <option value="Chile">Chile</option>
                  <option value="Colombia">Colombia</option>
                  <option value="Ecuador">Ecuador</option>
                  <option value="Guyana">Guyana</option>
                  <option value="Paraguay">Paraguay</option>
                  <option value="Peru">Peru</option>
                  <option value="Suriname">Suriname</option>
                  <option value="Uruguay">Uruguay</option>
                  <option value="Venezuela">Venezuela</option>
                </select>
              </div>
            </div>
            <div class="control">
              <button id="BtnAddDirectorGroup" class="button is-primary">
                <i class="fas fa-paper-plane"></i>
              </button>
            </div>
          </div>
          </div>
        </div>
        <hr class="divider">
        <div class="colums">
          <div class="column m-t-50">
          <h1 class="title has-text-centered">Director de grupo para primaria</h1>
          <!-- first option -->
          <div class="field has-addons p-l-20 p-r-20">
            <label class="label is-normal m-r-20 is-info">Docentes</label>
            <div class="control is-expanded">
              <div class="select is-fullwidth">
                <select name="country">
                 <?php foreach($teachers as $teacher): ?>
                  <option value="<?php echo $teacher['id'] ?>">
                    <?php echo $teacher['first_name']. " " .$teacher['first_lastname']; ?>
                  </option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
          </div>
          <!-- second option -->
          <div class="field has-addons p-l-20 p-r-20">
            <label class="label is-normal m-r-20">Grupos</label>
            <div class="control is-expanded">
              <div class="select is-fullwidth">
                <select name="country">
                 <?php foreach($groups as $group): ?>
                  <option value="<?php echo $teacher['id'] ?>">
                    <?php echo $group['name_grade']. " " .$group['name_group']." ".$group['name_sede']; ?>
                  </option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
            <div class="control">
              <button id="BtnAddDirectorGroup" class="button is-primary">
                <i class="fas fa-paper-plane"></i>
              </button>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php
  include 'html/overall/scripts.php';
?>
