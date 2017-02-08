
		<div class="md-form<?php echo $errors->has('id_siswa') ? 'has-error' : ''; ?>">
			<div class="col-md-5">
				<?php echo Form::select('id_siswa', []+App\Siswa::pluck('nama_siswa','id')->all(), null, ['class'=>'form-control js-selectize', 'placeholder' => 'Pilih Siswa Sebagai Dokter Kecil'
				]); ?>

				<?php echo $errors->first('id_siswa', '<p class="help-block">:message</p>'); ?>

			</div>
		</div>

		<div class="md-form<?php echo e($errors->has('bertugas') ? ' has-error' : ''); ?>" >
			<div class="col-md-7">
				<?php echo Form::text('bertugas', null, ['class'=>'form-control']); ?>

				<?php echo $errors->first('bertugas', '<p class="help-block">:message</p>'); ?>

				<label id="form1">Siswa Bertugas</label>
			</div>
		</div>


<div class="md">
		<?php echo Form::submit('Simpan', ['class'=>'btn btn-primary btn-block']); ?>

</div>