<?php include 'views/overall/directivo/nav-config.php'; ?>
<div class="container">
    <div class="columns is-2">
        <div class="column m-t-20">
            <div class="card">
                <div class="card-header p-t-20 p-l-20 p-r-20 p-b-20">
                    <p class="subtitle">
                        Añadir una sede de primaria.
                    </p>
                </div>
                <div class="card-content">
                    <form>
                        <div class="field">
                            <label class="label">Nombre</label>
                            <div class="control">
                                <input class="input is-info is-fullwidth" id="NameSede" required/>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Población</label>
                            <div class="control">
                                    <input class="input is-info is-fullwidth" type="num" id="population" value="0" />
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Localidad</label>
                            <div class="control">
                                <input class="input is-info is-fullwidth" id="location" required />
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Representante</label>
                            <div class="control">
                                <input class="input is-info is-fullwidth" id="agent" />
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Contacto</label>
                            <div class="control">
                                <input class="input is-info is-fullwidth" id="contact" />
                            </div>
                        </div>
                        <div class="field">
                            <button class="button is-success is-fullwidth" id="BtnAddSede">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="column m-t-20">
            <?php if(!empty($sedes)): ?>
                <table class="table is-fullwidth is-hoverable is-narrow">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Poblacion</th>
                            <th>Localidad</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($sedes as $s): ?>
                            <tr>
                                <td><?php echo $s['name']; ?></td>
                                <td><?php echo $s['population']; ?></td>
                                <td><?php echo $s['location']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <div class="notification is-warning">No hay sedes aún.</div>
            <?php endif; ?>
        </div>
    </div>
</div>
<a class="button is-info is-medium button-bottom-left" 
href="<?php echo APP_URL ?>directivo/home/config/">
    <i class="fas fa-arrow-left"></i>Atrás
</a>
<a class="button is-info is-medium button-bottom-right" 
href="<?php echo APP_URL ?>directivo/home/config/primary/createGrades/">
    Siguiente<i class="fas fa-arrow-right"></i>
</a>
