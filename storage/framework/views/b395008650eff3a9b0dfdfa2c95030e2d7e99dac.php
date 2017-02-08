<div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>" >
	<?php echo Form::label('email', 'E-mail', ['class'=>'col-md-1 control-label']); ?>

	<div class="col-md-5">
		<?php echo Form::email('email', null, ['class'=>'form-control']); ?>

		<?php echo $errors->first('email', '<p class="help-block">:message</p>'); ?>

	</div>
</div>

<div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>" >
	<?php echo Form::label('name', 'Nama', ['class'=>'col-md-1 control-label']); ?>

	<div class="col-md-5">
		<?php echo Form::text('name', null, ['class'=>'form-control']); ?>

		<?php echo $errors->first('name', '<p class="help-block">:message</p>'); ?>

	</div>
</div>

<div class="form-group"> 
		<?php echo Form::submit('Simpan', ['class'=>'btn btn-primary btn-block']); ?> 
</div>