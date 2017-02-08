<div class="row">
		<div class="md-form<?php echo $errors->has('id_omasuks') ? 'has-error' : ''; ?>">
			<div class="col-md-6">
				<?php echo Form::select('id_omasuks', []+App\Omasuk::pluck('nama_obat','id')->all(), null, ['class'=>'form-control js-selectize', 'placeholder' => 'Pilih Obat'
				]); ?>

				<?php echo $errors->first('id_omasuks', '<p class="help-block">:message</p>'); ?>

			</div>
		</div>

		<div class="md-form<?php echo e($errors->has('obat_keluar') ? ' has-error' : ''); ?>" >
			<div class="col-md-6">
				<?php echo Form::number('obat_keluar', null, ['class'=>'form-control']); ?>

				<?php echo $errors->first('obat_keluar', '<p class="help-block">:message</p>'); ?>

				<label id="form1">Obat Keluar</label>
			</div>
		</div>
</div>

<div class="form-group">
		<?php echo Form::submit('Simpan', ['class'=>'btn btn-primary btn-block']); ?>

</div>