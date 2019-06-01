<?php
  //navigaton to//
  include 'views/overall/directivo/nav-directivo.php';
?>
<div class="section">
    <div class="columns is-2">
      <div class="column is-one-quarter">
        <?php include 'views/overall/directivo/nav-aside-directivo.php'; ?>
      </div>
      <div class="column is-expanded">
        <div class="field">
            <label class="label">Primer Nombre</label>
            <div class="control">
                <input class="input" type="text" id="First_name">
            </div>
        </div>

        <div class="field">
            <label class="label">Segundo Nombre</label>
            <div class="control">
                <input class="input is-success" type="text" id="Second_name">
            </div>
        </div>

        <div class="field">
            <label class="label">Primer Apellido</label>
            <div class="control">
                <input class="input is-danger" type="text" id="First_lastname">
            </div>
        </div>

        <div class="field">
            <label class="label">Segundo Apellido</label>
            <div class="control">
                <input class="input is-danger" type="text" id="Second_lastname">
            </div>
        </div>

        <div class="field">
            <label class="label">Subject</label>
            <div class="control">
                <div class="select">
                    <select id="id_group">
                        <?php foreach($primary_groups as $p_g): ?>
                        <option value="<?php echo $p_g['id_group'] ?>"> <?php echo $p_g['name_grade'] . " - " . $p_g['name_group'] . " - " . $p_g['name_sede'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
        </div>

        <div class="field is-grouped">
            <div class="control">
                <button class="button is-link" id="BtnAddPrimaryStudent">Enviar</button>
            </div>
            <div class="control">
                <button class="button is-text" onclick="reload()">Cancel</button>
            </div>
        </div>
      </div>
    </div>

</div>
