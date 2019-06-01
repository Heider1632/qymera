<div class="field is-horizontal m-r-20">
    <div class="field-body">
        <div class="field">
            <?php foreach($students as $f): if(!empty($f['foto'])): ?>
                <td><img src="public/media/fotos/<?php echo $f['foto']; ?>" class="student-img" width="100" height="100"></td>
            <?php else: ?>
                <td><img src="public/media/fotos/user-default.png" class="student-img" width="100" height="100"></td>
            <?php endif; endforeach; ?>
        </div>

        <div class="form-student">
            <div class="field">
                <p class="control is-expanded has-icons-left">
                  <label class="label is-samll">Primer nombre</label>
                  <input class="input" type="text" value="<?php echo $e['primer_nombre']; ?>" placeholder="primer_nombre" readonly>
                </p>
            </div>

            <div class="field">
              <p class="control is-expanded has-icons-left has-icons-right">
                <label class="label is-samll">Segundo nombre</label>
                <input class="input" type="text" value="<?php echo $e['segundo_nombre']; ?>" placeholder="segundo_nombre" readonly>
              </p>
            </div>

            <div class="field">
              <p class="control is-expanded has-icons-left has-icons-right">
                <label class="label is-samll">Primer apellido</label>
                <input class="input" type="text" value="<?php echo $e['primer_apellido']; ?>" placeholder="primer_apellido" readonly>
              </p>
            </div>

            <div class="field">
              <p class="control is-expanded has-icons-left has-icons-right">
                <label class="label is-samll">Segundo apellido</label>
                <input class="input" type="text" value="<?php echo $e['segundo_apellido']; ?>" placeholder="segundo_apellido" readonly>
              </p>
            </div>
        </div>
    </div>
</div>