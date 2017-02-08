
		<div class="md-form<?php echo e($errors->has('angkatan') ? ' has-error' : ''); ?>" >
			<?php echo Form::label('angkatan', ' ', ['class'=>'col-md-2 control-label']); ?>

			<div class="col-md-6">
				<?php echo Form::number('angkatan', null, ['class'=>'form-control ']); ?>

				<?php echo $errors->first('angkatan', '<p class="help-block">:message</p>'); ?>

      <label for="form2">Angkatan</label> 
			</div>
		</div>

		<div class="md-form<?php echo e($errors->has('tahun_angkatan') ? ' has-error' : ''); ?>" >
			<?php echo Form::label('tahun_angkatan', ' ', ['class'=>'col-md-2 control-label']); ?>

			<div class="col-md-6">
				<?php echo Form::text('tahun_angkatan', null, ['class'=>'form-control datepicker ']); ?>

				<?php echo $errors->first('tahun_angkatan', '<p class="help-block">:message</p>'); ?>

      <label for="form2">Tahun Angkatan</label> 
			</div>
		</div>

<?php echo Form::hidden('jumlah_siswa', $value = 0, ['class'=>'form-control']); ?>

<?php echo Form::hidden('status', $value = 1, ['class'=>'form-control']); ?>

		<div class="form-group">
				<?php echo Form::submit('Simpan', ['class'=>'btn btn-primary btn-block']); ?>

		</div>

