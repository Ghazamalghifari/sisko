<div class="form-group<?php echo e($errors->has('kelas') ? ' has-error' : ''); ?>" >
	<div class="col-md-6">
		<?php echo Form::select('kelas', ['1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6'], null, ['class'=>'form-control js-selectize', 'placeholder' => 'Pilih Kelas'
				]); ?>

		<?php echo $errors->first('kelas', '<p class="help-block">:message</p>'); ?>

	</div>
</div>


<div class="md-form<?php echo e($errors->has('nama_kelas') ? ' has-error' : ''); ?>" >
	<?php echo Form::label('nama_kelas', ' ', ['class'=>'col-md-2 control-label']); ?>

	<div class="col-md-6">
		<?php echo Form::text('nama_kelas', null, ['class'=>'form-control']); ?>

		<?php echo $errors->first('nama_kelas', '<p class="help-block">:message</p>'); ?>

            <label for="form4">Nama Kelas</label>
	</div>
</div>


<?php echo Form::hidden('jumlah_siswa', $value = 0, ['class'=>'form-control']); ?>


<?php echo Form::hidden('status', $value = 1, ['class'=>'form-control']); ?>

<div class="md">
		<?php echo Form::submit('Simpan', ['class'=>'btn btn-primary btn-block']); ?>

</div>