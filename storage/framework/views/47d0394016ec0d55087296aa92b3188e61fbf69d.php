<div class="md-form<?php echo e($errors->has('kode') ? ' has-error' : ''); ?>" >
	<?php echo Form::label('kode', ' ', ['class'=>'col-md-2 control-label']); ?>

	<div class="col-md-3">
		<?php echo Form::text('kode', null, ['class'=>'form-control']); ?>

		<?php echo $errors->first('kode', '<p class="help-block">:message</p>'); ?>

		<label id="form1">Kode Buku</label>
	</div>
</div>

<div class="md-form<?php echo e($errors->has('nama_buku') ? ' has-error' : ''); ?>" >
	<?php echo Form::label('nama_buku', ' ', ['class'=>'col-md-2 control-label']); ?>

	<div class="col-md-6">
		<?php echo Form::text('nama_buku', null, ['class'=>'form-control']); ?>

		<?php echo $errors->first('nama_buku', '<p class="help-block">:message</p>'); ?>

		<label id="form1">Nama Buku</label>
	</div>
</div>

<div class="md-form<?php echo e($errors->has('stok') ? ' has-error' : ''); ?>" >
	<?php echo Form::label('stok', ' ', ['class'=>'col-md-2 control-label']); ?>

	<div class="col-md-3">
		<?php echo Form::number('stok', null, ['class'=>'form-control']); ?>

		<?php echo $errors->first('stok', '<p class="help-block">:message</p>'); ?>

		<label id="form1">Stok Buku</label>
	</div>
</div>

<div class="form-group">
		<?php echo Form::submit('Simpan', ['class'=>'btn btn-primary btn-block']); ?>

</div>