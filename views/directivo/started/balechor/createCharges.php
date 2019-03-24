<?php include 'views/overall/directivo/nav-config.php'; ?>
<div class="container">
    <div class="columns is-2">
        <div class="column m-t-50">
            <form>
            <p class="subtitle">Docentes de bachillerato</p>
            <?php if(!empty($teacher)): ?>
                <div class="field">
                    <div class="control">
                        <div class="select is-fullwidth">
                        <select id="id_teacher">
                            <?php foreach($teacher as $t): ?>
                            <option value="<?php echo $t['id']; ?>">
                                <?php echo $t['first_name'] ."-". $t['first_lastname']; ?>        
                            </option>
                            <?php endforeach; ?>
                        </select> 
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if(!empty($grades)): ?>
                <div class="field">
                    <div class="control">
                        <div class="select is-fullwidth">
                        <select id="id_grade">
                            <?php foreach($grades as $gs): ?>
                            <option value="<?php echo $gs['id']; ?>">
                                <?php echo $gs['name']; ?> 
                            </option>
                            <?php endforeach; ?>
                        </select> 
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if(!empty($groups)): ?>
                <div class="field">
                    <div class="control">
                        <div class="select is-fullwidth">
                        <select id="id_group">
                            <?php foreach($groups as $gp): ?>
                            <option value="<?php echo $gp['id']; ?>">
                                <?php echo $gp['name']; ?> 
                            </option>
                            <?php endforeach; ?>
                        </select> 
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if(!empty($sedes)): ?>
                <div class="field">
                    <div class="control">
                        <div class="select is-fullwidth">
                        <select id="id_sede">
                            <?php foreach($sedes as $s): ?>
                            <option value="<?php echo $s['id']; ?>">
                                <?php echo $s['name']; ?> 
                            </option>
                            <?php endforeach; ?>
                        </select> 
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if(!empty($matters)): ?>
                <div class="field">
                    <div class="control">
                        <div class="select is-fullwidth">
                        <select id="id_matter">
                            <?php foreach($matters as $m): ?>
                            <option value="<?php echo $m['id']; ?>"><?php echo $m['name']; ?></option>
                            <?php endforeach; ?>
                        </select> 
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <button class="button is-fullwidth is-success" id="BtnAddAssign">Enviar</button>

            </form>
        </div>
        <div class="column m-t-50">
            <?php if(!empty($information)): ?>
                <table class="table is-hoverable is-fullwidth is-narrow">
                    <thead>
                        <tr>
                            <th>Docente</th>
                            <th>Grado</th>
                            <th>Grupo</th>
                            <th>Materia</th>
                            <th>Sede</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($information as $inf): ?>
                        <tr>
                            <td><?php echo $inf['first_name'] . " " . $inf['first_lastname']; ?></td>
                            <td><?php echo $inf['name_grade']; ?></td>
                            <td><?php echo $inf['name_group']; ?></td>
                            <td><?php echo $inf['name_matter']; ?></td>
                            <td><?php echo $inf['name_sede']; ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <div class="notification is-warning">No hay información para mostrar</div>
            <?php endif; ?>
        </div>
    </div>
</div>
<a class="button is-info is-medium button-bottom-right" 
href="<?php echo APP_URL ?>directivo/home/finish/">
    Siguiente<i class="fas fa-arrow-right"></i>
</a>

<a class="button is-info is-medium button-bottom-left" 
href="<?php echo APP_URL ?>directivo/home/config/balechor/createTeacher/">
    <i class="fas fa-arrow-left"></i>Atrás
</a>

