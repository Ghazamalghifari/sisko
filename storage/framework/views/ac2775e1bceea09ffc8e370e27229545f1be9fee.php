		<div class="form-group<?php echo $errors->has('id_karyawan') ? 'has-error' : ''; ?>">
			<?php echo Form::label('id_karyawan', 'Karyawan', ['class'=>'col-md-2 control-label']); ?>

			<div class="col-md-5">
				<?php echo Form::select('id_karyawan', [''=>'']+App\Karyawan::pluck('nama_karyawan','id')->all(), null, ['class'=>'form-control js-selectize', 'placeholder' => 'Pilih Karyawan'
				]); ?>

				<?php echo $errors->first('id_karyawan', '<p class="help-block">:message</p>'); ?>

			</div>
		</div>

		<div class="form-group<?php echo e($errors->has('bayaran_kantin') ? ' has-error' : ''); ?>" >
			<?php echo Form::label('bayaran_kantin', 'Bayaran  Kantin', ['class'=>'col-md-2 control-label']); ?>

			<div class="col-md-5">
				<?php echo Form::text('bayaran_kantin', null, ['class'=>'form-control']); ?>

				<?php echo $errors->first('bayaran_kantin', '<p class="help-block">:message</p>'); ?>

			</div>
		</div>

		<div class="form-group">
				<?php echo Form::submit('Simpan', ['class'=>'btn btn-primary btn-block']); ?>

		</div>