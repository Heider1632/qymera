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
                <div class="box is-info">
                    <h1 class="has-text-left">Formulario para indicadores</h1>
                </div>

                <form>
                    <div class="field">
                        <label class="label">Indicador</label>
                        <div class="control">
                            <input type="text" class="input is-fullwidth is-info" id="name" />
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Autor</label>
                        <div class="control">
                            <input type="text" class="input is-fullwidth is-info" id="author" />
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Asignatura</label>
                        <div class="control">
                            <div class="select is-fullwidth">
                                <select id="matter">
                                    <?php foreach($matters as $m): ?>
                                    <option value="<?php echo $m['name'] ?>">
                                        <?php echo $m['name'] ?>
                                    </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Periodo</label>
                            <div class="control">
                                <div class="select is-fullwidth">
                                    <select id="period">
                                    <?php foreach($periods as $p): ?>
                                        <option value="<?php echo $p['id'] ?>">
                                            <?php echo $p['periodo_nombre']  ?>
                                        </option>
                                    <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                    </div>

                    <div class="field">
                        <label class="label">Grado</label>
                            <div class="control">
                                <input type="number" class="input is-fullwidth is-info" min="0" max="11" id="grade" />
                            </div>
                    </div>
            </form>
            <br />
            <button 
                id="sendIndicatorToRepository"
                class="button is-fullwidth is-primary"
            >
                Enviar
            </button>
        </div>
</div>
