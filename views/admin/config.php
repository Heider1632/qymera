<div class="config">
	<div class="config-ciclo">
	<h3>Ciclos</h3>
	<legend>Ciclo Periodo para el año: <?php echo YEAR; ?></legend>
	<hr>
	<!-- FORMULARIO PARA ACTUALIZAR EL CICLO DE PERIODO -->
	<p class="title is-large">PERIODO ACTUAL: <?php ?></p>
	<div class="level">
		<?php foreach($periodos as $p): ?>
			<div class="level-item has-text-centered">
	    <div>
	      <p class="heading is-medium"><?php echo $p['periodo_nombre']; ?></p>
	      <p class="title is-small">Fecha de inicio</p>
				<input type="text" class="input is-medium is-primary" value="<?php echo $p['fecha_inicio_periodo']; ?>" readonly="">
				<br>
				<p class="title is-small">Fecha de cierre</p>
				<input type="text" class="input is-medium is-primary" value="<?php echo $p['fecha_cierre_periodo']; ?>" readonly="">
	    </div>
			</div>
		<?php endforeach; ?>
	</div>

	<hr>
	<div class="row">
		<div class="col-md-12">
		<div align="center">
		<legend>Selecciona un periodo academico</legend>
			<select>
				<?php foreach($periodos as $p): ?>
					<option value="<?php echo $p['id']; ?>" id="periodo"><?php echo $p['nombre']; ?></option>
				<?php endforeach; ?>
			</select>
		<br>
		<br>
		<label>Fecha de inicio</label>
		<input type="date" id="periodo_inicio" value="">
		<br>
		<br>
		<label>Fecha de cierre</label>
		<input type="date" id="periodo_cierre" value="">
		<br>
		<br>
		<button type="button" name="" id="ciclo_periodo" class="btn btn-primary">Actualizar Periodo</button>
		</div>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-6">
		<h3 style="color: blue;">Ciclo Notas</h3>

		<input type="text" name="" value="<?php echo $_SESSION['inicio_notas']; ?>" readonly="">
		<input type="text" name="" value="<?php echo $_SESSION['cierre_notas']; ?>" readonly="">
		<hr>
		<!-- FORMULARIO PARA ACTUALIZAR EL CICLO DE NOTAS -->
		<label>Hora de inicio</label>
		<input type="date" id="inicio_notas" value="">
		<br>
		<label>Hora de cierre</label>
		<input type="date" id="cierre_notas" value="">
		<br>

		<a type="button" name="" id="ciclo_notas" class="btn btn-primary">Actualizar Ciclo Notas</a>
		</div>
		<div class="col-md-6">
		<h3 style="color: blue;">Ciclo de indicadores</h3>

		<input type="text" name="" value="<?php echo $_SESSION['hora_inicio']; ?>" readonly="">
		<input type="text" name="" value="<?php echo $_SESSION['hora_cierre']; ?>" readonly="">
		<hr>
		<!-- FORMULARIO PARA ACTUALIZAR EL CICLO DE INDICADORES -->
		<label>Hora de inicio</label>
		<input type="date" id="hora_inicio" value="">
		<br>
		<label>Hora de cierre</label>
		<input type="date" id="hora_cierre" value="">
		<br>

		<a type="button" name="" id="ciclo_ind" class="btn btn-primary">Actualizar Ciclo Indicadores</a>
		</div>
	</div>
	</div>
</div>
