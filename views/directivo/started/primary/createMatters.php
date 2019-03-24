<?php include 'views/overall/directivo/nav-config.php'; ?>
<div class="container">
    <div class="columns is-2">
        <div class="column m-t-50">
            <div class="card" style="max-width: 600px;">
                <div class="card-header p-t-20 p-l-20 p-r-20 p-b-20">
                    <p class="title">
                        Añadir una asignatura.
                    </p>
                </div>
                <div class="card-content">
                    <form>
                        <div class="field">
                            <div class="control">
                                <input class="input is-info is-fullwidth" id="NameMatter" />
                            </div>
                        </div>
                        <div class="field">
                            <button class="button is-success is-fullwidth" id="BtnAddMatter">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="column">
            <?php if(!empty($matters)): ?>
                <table class="table is-hoverable is-fullwidth is-narrow">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($matters as $m): ?>
                            <tr>
                                <td><?php echo $m['name']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <div class="notification is-warning">No hay asignatura aún creadas.</div>
            <?php endif; ?>
            
        </div>
    </div>
</div>
<a class="button is-info is-medium button-bottom-right" 
href="<?php echo APP_URL ?>directivo/home/config/primary/createTeacher/">   
 Siguiente<i class="fas fa-arrow-right"></i>
</a>
<a class="button is-info is-medium button-bottom-left" 
href="<?php echo APP_URL ?>directivo/home/config/primary/createGroups/">
    <i class="fas fa-arrow-left"></i>Atrás
</a>