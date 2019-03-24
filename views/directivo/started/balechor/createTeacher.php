<?php include 'views/overall/directivo/nav-config.php'; ?>
<div class="container">
    <div class="columns is-2">
        <div class="column m-t-50">
          <div class="card">
            <div class="card-header p-t-20 p-l-20 p-r-20 p-b-20">
                    <p class="title">
                        Añadir una docente de bachillerato.
                    </p>
                </div>
            <div class="card-content">
                <div class="content p-20">
                <form>
                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label class="label">Nombres</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <p class="control is-expanded">
                                    <input class="input" type="text" id="first_name" placeholder="Primer nombre" required>
                                </p>
                            </div>

                            <div class="field">
                                <p class="control is-expanded">
                                    <input class="input" type="text" id="second_name" placeholder="Segundo nombre">
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label class="label">Apellidos</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <p class="control is-expanded">
                                    <input class="input" id="first_lastname" type="text" placeholder="Primer apellido" required>
                                </p>
                            </div>

                            <div class="field">
                                <p class="control is-expanded">
                                    <input class="input" type="text" id="second_lastname" placeholder="Segundo apellido">
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <div class="control">
                            <input class="input is-fullwidth" type="email" id="UserEmail" placeholder="correo" required />
                        </div>
                    </div>

                    <!-- hidden input with tipe teacher-->
                    <input type="hidden" name="type" id="type" value="bachillerato">

                    <div class="field is-horizontal">
                        <div class="field-label">
                        <!-- Left empty for spacing -->
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <button id="BtnAddTeacher" class="button is-success is-fullwidth is-rounded">
                                    Enviar
                                    </button>  
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
                </div>
            </div>
        </div>
        </div>
        <div class="column m-t-10">
            <?php if(!empty($teachers)): ?>
                <table class="table is-hoverable is-fullwidth is-narrow">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($teachers as $teacher): ?>
                            <tr>
                                <td>
                                    <?php echo $teacher['first_name']." ".$teacher['first_lastname']; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <div class="notification is-warning">No hay docentes creados.</div>
            <?php endif; ?>
            
        </div>
    </div>
</div>
<a class="button is-info is-medium button-bottom-right" 
href="<?php echo APP_URL ?>directivo/home/config/balechor/createCharges/">   
 Siguiente<i class="fas fa-arrow-right"></i>
</a>
<a class="button is-info is-medium button-bottom-left" 
href="<?php echo APP_URL ?>directivo/home/config/balechor/createMatters/">
    <i class="fas fa-arrow-left"></i>Atrás
</a>