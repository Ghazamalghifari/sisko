<div class="form-group<?php echo e($errors->has('nama_satuan') ? ' has-error' : ''); ?>" >
	<?php echo Form::label('nama_satuan', 'Nama Satuan', ['class'=>'col-md-2 control-label']); ?>

	<div class="col-md-5">
		<?php echo Form::text('nama_satuan', null, ['class'=>'form-control']); ?>

		<?php echo $errors->first('nama_satuan', '<p class="help-block">:message</p>'); ?>

	</div>
</div>

<div class="form-group">
	<div class="col-md-5 col-md-offset-2">
		<?php echo Form::submit('Simpan', ['class'=>'btn btn-primary btn-block']); ?>

	</div>
</div>