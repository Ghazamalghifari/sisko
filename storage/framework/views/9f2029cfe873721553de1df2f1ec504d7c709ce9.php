<div class="row">
		<div class="md-form<?php echo e($errors->has('nama_obat') ? ' has-error' : ''); ?>" >
			<div class="col-md-6">
				<?php echo Form::text('nama_obat', null, ['class'=>'form-control']); ?>

				<?php echo $errors->first('nama_obat', '<p class="help-block">:message</p>'); ?>

				<label id="form1">Nama Obat</label>
			</div>
		</div>

		<div class="md-form<?php echo e($errors->has('stok_obat') ? ' has-error' : ''); ?>" >
			<div class="col-md-6">
				<?php echo Form::number('stok_obat', null, ['class'=>'form-control']); ?>

				<?php echo $errors->first('stok_obat', '<p class="help-block">:message</p>'); ?>

				<label id="form2">Stok Obat</label>
			</div>
		</div>
</div>

<div class="row">
		<div class="md-form<?php echo $errors->has('id_osatuan') ? 'has-error' : ''; ?>">
			<div class="col-md-6">
				<?php echo Form::select('id_osatuan', []+App\Osatuan::pluck('nama_satuan','id')->all(), null, ['class'=>'form-control js-selectize', 'placeholder' => 'Pilih Satuan Obat'
				]); ?>

				<?php echo $errors->first('id_osatuan', '<p class="help-block">:message</p>'); ?>

			</div>
		</div>


		<div class="md-form<?php echo $errors->has('id_okategori') ? 'has-error' : ''; ?>">
			<div class="col-md-6">
				<?php echo Form::select('id_okategori', []+App\Okategori::pluck('nama_kategori','id')->all(), null, ['class'=>'form-control js-selectize', 'placeholder' => 'Pilih Kategori Obat'
				]); ?>

				<?php echo $errors->first('id_okategori', '<p class="help-block">:message</p>'); ?>

			</div>
		</div>
</div>
<div class="form-group">
		<?php echo Form::submit('Simpan', ['class'=>'btn btn-primary btn-block']); ?>

</div>