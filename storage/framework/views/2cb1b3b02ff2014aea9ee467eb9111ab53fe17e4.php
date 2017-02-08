<div class="row">

		<div class="md-form<?php echo e($errors->has('nama_fasilitas') ? ' has-error' : ''); ?>" >
			<div class="col-md-6">
				<?php echo Form::text('nama_fasilitas', null, ['class'=>'form-control']); ?>

				<?php echo $errors->first('nama_fasilitas', '<p class="help-block">:message</p>'); ?>

				<label id="form1">Nama Fasilitas</label>
			</div>
		</div>

		<div class="md-form<?php echo e($errors->has('stok_fasilitas') ? ' has-error' : ''); ?>" >
			<div class="col-md-6">
				<?php echo Form::number('stok_fasilitas', null, ['class'=>'form-control']); ?>

				<?php echo $errors->first('stok_fasilitas', '<p class="help-block">:message</p>'); ?>

				<label id="form1">Stok Fasilitas</label>
			</div>
		</div>
</div>


<div class="form-group">
		<?php echo Form::submit('Simpan', ['class'=>'btn btn-primary btn-block']); ?>

</div>