<div class="row">
		<div class="md-form<?php echo $errors->has('id_les') ? 'has-error' : ''; ?>">
			<?php echo Form::label('id_les', ' ', ['class'=>'control-label']); ?>

			<div class="col-md-6">
				<?php echo Form::select('id_les', []+App\Les::pluck('mata_pelajaran','id')->all(), null, ['class'=>'form-control js-selectize', 'placeholder' => 'Pilih Pelajaran']); ?>

				<?php echo $errors->first('id_les', '<p class="help-block">:message</p>'); ?>

			</div>
		</div>

		<div class="md-form<?php echo e($errors->has('nama_pengajar') ? ' has-error' : ''); ?>" >
			<?php echo Form::label('nama_pengajar', ' ', ['class'=>'control-label']); ?>

			<div class="col-md-6">
				<?php echo Form::text('nama_pengajar', $value='Nama Pengajar', ['class'=>'form-control','readonly']); ?>

				<?php echo $errors->first('nama_pengajar', '<p class="help-block">:message</p>'); ?>

			</div>
		</div>
</div>

<div class="row">

		<div class="md-form<?php echo e($errors->has('mulai_les') ? ' has-error' : ''); ?>" >
			<?php echo Form::label('mulai_les', ' ', ['class'=>'control-label']); ?>

			<div class="col-md-4">
				<?php echo Form::text('mulai_les', null, ['id'=>'mulai','class'=>'form-control timepicker']); ?>

				<?php echo $errors->first('mulai_les', '<p class="help-block">:message</p>'); ?>

				<label id="form1" for="mulai">Mulai Les</label>
			</div>
		</div>

		<div class="md-form<?php echo e($errors->has('selesai_les') ? ' has-error' : ''); ?>" >
			<?php echo Form::label('selesai_les', ' ', ['class'=>'control-label']); ?>

			<div class="col-md-4">
				<?php echo Form::text('selesai_les', null, ['id'=>'selesai','class'=>'form-control timepicker']); ?>

				<?php echo $errors->first('selesai_les', '<p class="help-block">:message</p>'); ?>

				<label id="form2" for="selesai">Selesai Les</label>
			</div>
		</div>


		<div class="md-form<?php echo e($errors->has('hari_les') ? ' has-error' : ''); ?>" >
			<div class="col-md-4">
              <?php echo Form::select('hari_les', ['Minggu'=>'Minggu','Sabtu'=>'Sabtu','Jumat'=>'Jumat','Kamis'=>'Kamis','Rabu'=>'Rabu','Selasa'=>'Selasa','Senin'=>'Senin'], null, ['class'=>'mdb-select','placeholder' => 'Pilih Hari']); ?>

				<?php echo $errors->first('hari_les', '<p class="help-block">:message</p>'); ?>

			</div>
		</div>
</div>

<div class="row">
		<div class="md-form<?php echo e($errors->has('keterangan_les') ? ' has-error' : ''); ?>" >
			<?php echo Form::label('keterangan_les', ' ', ['class'=>'control-label']); ?>

			<div class="col-md-12">
				<?php echo Form::textarea('keterangan_les', null, ['class'=>'md-textarea']); ?>

				<?php echo $errors->first('keterangan_les', '<p class="help-block">:message</p>'); ?>

				<label id="form4">Keterangan</label>
			</div>
		</div>
</div>

		<div class="form-group">
				<?php echo Form::submit('Simpan', ['class'=>'btn btn-primary btn-block']); ?>

		</div>