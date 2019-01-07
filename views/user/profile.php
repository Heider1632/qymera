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
        <!-- form pick user -->
        <!-- img profile -->
        <?php if(!empty($_SESSION['foto'])): ?>
          <img src="<?php echo APP_URL . $_SESSION['foto'] ?>" class="img-profile"  alt="<?php echo $_SESSION['nombre']; ?>"/>
        <?php else: ?>
        <img src="<?php echo APP_URL; ?>/media/user-default.png" class="img-profile"  alt="<?php echo $_SESSION['nombre']; ?>"/>
        <?php endif; ?>
        <div class="file has-name is-info is-right">
          <label class="file-label">
            <input class="file-input" type="file" id="image-profile">
            <span class="file-cta">
              <span class="file-icon">
                <i class="fas fa-upload"></i>
              </span>
              <span class="file-label">
                Choose a file…
              </span>
            </span>
            <span class="file-name">
              user-default.png
            </span>
          </label>
        </div>
        <div id="progress-wrapper">
          <progress id="progress" class="status progress is-info" value="0" max="100">0%</progress>
        </div>

        <div class="box m-t-10">
        <!-- form user -->
        <div class="field">
          <label class="label">Nombre</label>
          <div class="control has-icons-left has-icons-right">
            <input class="input is-success" type="text" placeholder="Text input" value="">
            <span class="icon is-small is-left">
              <i class="fas fa-user"></i>
            </span>
            <span class="icon is-small is-right">
              <i class="fas fa-check"></i>
            </span>
          </div>
          <p class="help is-success">This username is available</p>
        </div>

        <div class="field">
          <label class="label">Apellido</label>
          <div class="control has-icons-left has-icons-right">
            <input class="input is-success" type="text" placeholder="Text input" value="">
            <span class="icon is-small is-left">
              <i class="fas fa-user"></i>
            </span>
            <span class="icon is-small is-right">
              <i class="fas fa-check"></i>
            </span>
          </div>
          <p class="help is-success">This username is available</p>
        </div>

        <button class="button is-success is-fullwidth" id="btnSendTeacher">Enviar</button>
        </div>

        <div class="box m-t-10">

        <div class="field">
          <label class="label">Email</label>
          <div class="control has-icons-left">
            <input class="input is-info" type="email" placeholder="Email input" value="">
            <span class="icon is-small is-left">
              <i class="fas fa-envelope"></i>
            </span>
          </div>
        </div>

        <div class="field">
          <label class="label">Contraseña</label>
          <div class="control">
            <input class="input" type="password" id="password" placeholder="your password" value="">
        </div>

        <div class="field">
          <label class="label">Repite la contraseña</label>
          <div class="control">
            <input class="input" type="password" id="password_2" placeholder="repeat your password" value="">
        </div>

        <div class="field">
          <div class="control">
            <label class="checkbox">
              <input type="checkbox">
              I agree to the <a href="#">terms and conditions</a>
            </label>
          </div>
        </div>

        <div class="field is-grouped">
          <div class="control">
            <button class="button is-link" id="btnSendUser">Actualizar</button>
          </div>
          <div class="control">
            <button class="button is-text" onclick="refresh()">Cancelar</button>
          </div>
        </div>

      </div>
    </div>
    </div>
  </div>
