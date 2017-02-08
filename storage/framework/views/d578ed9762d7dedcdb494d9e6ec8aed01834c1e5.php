		<div class="md-form<?php echo e($errors->has('nik') ? ' has-error' : ''); ?>" >
			<?php echo Form::label('nik', ' ', ['class'=>'col-md-2 control-label']); ?>

			<div class="col-md-6">
				<?php echo Form::number('nik', null, ['class'=>'form-control']); ?>

				<?php echo $errors->first('nik', '<p class="help-block">:message</p>'); ?>

            <label for="form1">NIK</label>
			</div>
		</div>

		<div class="md-form<?php echo e($errors->has('nama_karyawan') ? ' has-error' : ''); ?>" >
			<?php echo Form::label('nama_karyawan', ' ', ['class'=>'col-md-2 control-label']); ?>

			<div class="col-md-6">
				<?php echo Form::text('nama_karyawan', null, ['class'=>'form-control']); ?>

				<?php echo $errors->first('nama_karyawan', '<p class="help-block">:message</p>'); ?>

            <label for="form2">Nama Karyawan</label>
			</div>
		</div>

		<div class="md-form<?php echo $errors->has('id_pekerjaan') ? 'has-error' : ''; ?>">
			<div class="col-md-6">
				<?php echo Form::select('id_pekerjaan', []+App\Pekerjaan::pluck('nama_pekerjaan','id')->all(), null, ['class'=>'mdb-select', 'placeholder' => 'Pilih Pekerjaan'
				]); ?>

				<?php echo $errors->first('id_pekerjaan', '<p class="help-block">:message</p>'); ?>

            <label>Pekerjaan</label>
			</div>
		</div>


		<div class="md-form<?php echo e($errors->has('no_telp') ? ' has-error' : ''); ?>" >
			<?php echo Form::label('no_telp', ' ', ['class'=>'col-md-2 control-label']); ?>

			<div class="col-md-6">
				<?php echo Form::number('no_telp', null, ['class'=>'form-control']); ?>

				<?php echo $errors->first('no_telp', '<p class="help-block">:message</p>'); ?>

            <label for="form3">Nomor Telepone</label>
			</div>
		</div>

		<div class="md-form<?php echo e($errors->has('tugas') ? ' has-error' : ''); ?>" >
			<?php echo Form::label('tugas', ' ', ['class'=>'col-md-2 control-label']); ?>

			<div class="col-md-6">
				<?php echo Form::textarea('tugas', null, ['class'=>'md-textarea']); ?>

				<?php echo $errors->first('tugas', '<p class="help-block">:message</p>'); ?>

            <label for="form3">Tugas Karyawan</label>
			</div>
		</div>

		<div class="md-form<?php echo e($errors->has('alamat') ? ' has-error' : ''); ?>" >
			<?php echo Form::label('alamat', ' ', ['class'=>'col-md-2 control-label']); ?>

			<div class="col-md-6">
				<?php echo Form::textarea('alamat', null, ['class'=>'md-textarea']); ?>

				<?php echo $errors->first('alamat', '<p class="help-block">:message</p>'); ?>

            <label for="form4">Alamat</label>
			</div>
		</div>

		<div class="form-group">
				<?php echo Form::submit('Simpan', ['class'=>'btn btn-primary btn-block']); ?>

		</div>

