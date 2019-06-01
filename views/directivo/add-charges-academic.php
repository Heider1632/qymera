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
        <div class="columns is-2">
            <div class="column m-t-50">
                <div class="box is-info">
                    <h1 class="has-text-centered">Primaria</h1>
                </div>
                <form>
                    <div class="field">
                        <label class="label">Docentes</label>
                        <div class="control">
                            <div class="select is-fullwidth">
                                <select id="id_primary_teacher">
                                <?php foreach($Teachers as $t): ?>
                                    <option value="<?php echo $t['id'] ?>">
                                        <?php echo $t['first_name'] . " " . $t['first_lastname'] ?>
                                    </option>
                                <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Materias</label>
                        <div class="control">
                            <div class="select is-fullwidth">
                                <select id="id_primary_matter">
                                    <?php foreach($matters as $m): ?>
                                    <option value="<?php echo $m['id'] ?>">
                                        <?php echo $m['name'] ?>
                                    </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Grupos</label>
                            <div class="control">
                                <div class="select is-fullwidth">
                                    <select id="id_primary_group">
                                    <?php foreach($primaryGroups as $p_g): ?>
                                        <option value="<?php echo $p_g['id_group'] ?>">
                                            <?php echo "grado: " .  $p_g['name_grade'] . " grupo: " .  $p_g['name_group'] . " sede: " . $p_g['name_sede'] ?>
                                        </option>
                                    <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                    </div>

            </form>
            <br />
            <button 
                id="sendPrimaryCharge"
                class="button is-fullwidth is-primary"
            >
                Enviar
            </button>
        </div>

        <div class="column m-t-50">
            <div class="box is-info">
                <h1 class="has-text-centered">Bachillerato</h1>
            </div>
            <!-- table render the charges -->
            <form>
                <div class="field">
                    <label class="label">Docentes</label>
                        <div class="control">
                            <div class="select is-fullwidth">
                                <select id="id_balechor_teacher">
                                <?php foreach($Teachers as $t): ?>
                                    <option value="<?php echo $t['id'] ?>">
                                        <?php echo $t['first_name'] .  " " . $t['first_lastname'] ?>
                                    </option>
                                <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Materia</label>
                            <div class="control">
                                <div class="select is-fullwidth">
                                    <select id="id_balechor_matter">
                                        <?php foreach($matters as $m): ?>
                                            <option value="<?php echo $m['id'] ?>">
                                                <?php echo $m['name'] ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                    </div>

                    <div class="field">
                        <label class="label">Grupos</label>
                            <div class="control">
                                <div class="select is-fullwidth">
                                    <select id="id_balechor_group">
                                    <?php foreach($balechorGroups as $b_g): ?>
                                        <option value="<?php echo $b_g['id_group'] ?>">
                                            <?php echo "grado: " . $b_g['name_grade'] . " grupo: " .  $b_g['id_g'] ?>
                                        </option>
                                    <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                    </div>
                </form>
                <br />
                <button 
                    id="sendBalechorCharge"
                    class="button is-fullwidth is-primary"
                >
                    Enviar
                </button>

            </div>
        </div>

        
      </div>
    </div>
    
</div>
