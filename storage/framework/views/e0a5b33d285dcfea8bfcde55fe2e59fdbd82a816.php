
		<div class="form-group<?php echo $errors->has('id_guru') ? 'has-error' : ''; ?>">
			<?php echo Form::label('id_guru', 'Pengajar', ['class'=>'col-md-2 control-label']); ?>

			<div class="col-md-4">
				<?php echo Form::select('id_guru', [''=>'']+App\Guru::pluck('nama_guru','id')->all(), null, ['class'=>'form-control js-selectize', 'placeholder' => 'Pilih Pengajar'
				]); ?>

				<?php echo $errors->first('id_guru', '<p class="help-block">:message</p>'); ?>

			</div>
		</div>

		<div class="form-group<?php echo e($errors->has('mata_pelajaran') ? ' has-error' : ''); ?>" >
			<?php echo Form::label('mata_pelajaran', 'Mata Pelajaran', ['class'=>'col-md-2 control-label']); ?>

			<div class="col-md-5">
				<?php echo Form::text('mata_pelajaran', null, ['class'=>'form-control']); ?>

				<?php echo $errors->first('mata_pelajaran', '<p class="help-block">:message</p>'); ?>

			</div>
		</div>


<?php echo Form::hidden('jumlah_siswa', $value = 0, ['class'=>'form-control']); ?>

<div class="md">
		<?php echo Form::submit('Simpan', ['class'=>'btn btn-primary btn-block']); ?>

</div>