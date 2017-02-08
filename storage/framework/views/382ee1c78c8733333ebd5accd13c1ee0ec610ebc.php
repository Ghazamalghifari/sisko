<div class="row">
		<div class="md-form<?php echo e($errors->has('nama_jadwal') ? ' has-error' : ''); ?>" >
			<?php echo Form::label('nama_jadwal', ' ', ['class'=>'control-label']); ?>

			<div class="col-md-3">
				<?php echo Form::text('nama_jadwal', null, ['class'=>'form-control']); ?>

				<?php echo $errors->first('nama_jadwal', '<p class="help-block">:message</p>'); ?>

				<label id="form1">Nama Jadwal</label>
			</div>
		</div>

		<div class="md-form<?php echo e($errors->has('mulai') ? ' has-error' : ''); ?>" >
			<?php echo Form::label('mulai', ' ', ['class'=>'control-label']); ?>

			<div class="col-md-3">
				<?php echo Form::text('mulai', null, ['id'=>'mulai','class'=>'form-control timepicker']); ?>

				<?php echo $errors->first('mulai', '<p class="help-block">:message</p>'); ?>

				<label id="form1" for="mulai">Mulai</label>
			</div>
		</div>

		<div class="md-form<?php echo e($errors->has('selesai') ? ' has-error' : ''); ?>" >
			<?php echo Form::label('selesai', ' ', ['class'=>'control-label']); ?>

			<div class="col-md-3">
				<?php echo Form::text('selesai', null, ['id'=>'selesai','class'=>'form-control timepicker']); ?>

				<?php echo $errors->first('selesai', '<p class="help-block">:message</p>'); ?>

				<label id="form2" for="selesai">Selesai</label>
			</div>
		</div>


		<div class="md-form<?php echo e($errors->has('hari') ? ' has-error' : ''); ?>" >
			<div class="col-md-3">
              <?php echo Form::select('hari', ['Minggu'=>'Minggu','Sabtu'=>'Sabtu','Jumat'=>'Jumat','Kamis'=>'Kamis','Rabu'=>'Rabu','Selasa'=>'Selasa','Senin'=>'Senin'], null, ['class'=>'mdb-select','placeholder' => 'Pilih Hari']); ?>

				<?php echo $errors->first('hari', '<p class="help-block">:message</p>'); ?>

			</div>
		</div>
</div>

<div class="row">
		<div class="md-form<?php echo e($errors->has('keterangan') ? ' has-error' : ''); ?>" >
			<?php echo Form::label('keterangan', ' ', ['class'=>'control-label']); ?>

			<div class="col-md-12">
				<?php echo Form::textarea('keterangan', null, ['class'=>'md-textarea']); ?>

				<?php echo $errors->first('keterangan', '<p class="help-block">:message</p>'); ?>

				<label id="form4">Keterangan</label>
			</div>
		</div>
</div>

		<div class="form-group">
				<?php echo Form::submit('Simpan', ['class'=>'btn btn-primary btn-block']); ?>

		</div>