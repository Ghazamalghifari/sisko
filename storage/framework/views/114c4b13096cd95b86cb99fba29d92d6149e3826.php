<div class="form-group<?php echo e($errors->has('nama_kategori') ? ' has-error' : ''); ?>" >
	<?php echo Form::label('nama_kategori', 'Nama Kategori', ['class'=>'col-md-2 control-label']); ?>

	<div class="col-md-5">
		<?php echo Form::text('nama_kategori', null, ['class'=>'form-control']); ?>

		<?php echo $errors->first('nama_kategori', '<p class="help-block">:message</p>'); ?>

	</div>
</div>

<div class="form-group">
	<div class="col-md-5 col-md-offset-2">
		<?php echo Form::submit('Simpan', ['class'=>'btn btn-primary btn-block']); ?>

	</div>
</div>