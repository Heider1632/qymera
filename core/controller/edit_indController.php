<?php
if (!isset($_SESSION['id'])){
  header('location: index.php');
}
/*template indicador */
  /* header */
  include 'views/overall/header.php';
  $id_indicador = $_GET['id_indicador'];

  $i = find_unic_indicator($id_indicador);
  ?>
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
            <form id="form" class="form">

              <input type="hidden" id="edit_id_indicador" value="<?php echo $_GET['id_indicador']; ?>"/>

              <div class="field">
                <label class="label">Materia</label>
                <div class="control">
                  <input class="input" type="text" placeholder="Text input" value="<?php echo $i['nombre_materia']; ?>" readonly="">
                </div>
              </div>

              <div class="field">
                <label class="label">Grado</label>
                <div class="control">
                  <input class="input is-success" type="text" placeholder="Text input" value="<?php echo $i['nombre_grado']; ?>" readonly="">
              </div>

              <div class="field">
                <label class="label">Numero</label>
                <div class="control">
                    <input class="input is-primary" type="num" min="1" max="5" name="edit_n" value="<?php echo $i['n']; ?>" readonly/>
                </div>
              </div>

              <div class="field">
                <label class="label">Nombre de indicador</label>
                <div class="control">
                  <textarea class="textarea" id="edit_indicador" placeholder="Textarea"><?php echo $i['nombre']; ?></textarea>
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
            </form>
          </div>
          </div>
        </div>
    <?php
  /* scripts*/
  include 'views/overall/scripts.php';
?>
