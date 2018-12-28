<?php
if (!isset($_SESSION['id'])) {
    header('location: index.php');
}

/*template indicador */
  /* header */
  include 'views/overall/header.php';
  $id_indicador = $_GET['id_indicador'];
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

          </div>
          </div>
        </div>
    <?php
  /* scripts*/
  include 'views/overall/scripts.php';
?>
