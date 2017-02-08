<div class="row">
		<div class="md-form<?php echo $errors->has('id_guru') ? 'has-error' : ''; ?>">
			<?php echo Form::label('id_guru', ' ', ['class'=>'control-label']); ?>

			<div class="col-md-6">
				<?php echo Form::select('id_guru', []+App\Guru::pluck('nama_guru','id')->all(), null, ['class'=>'form-control js-selectize', 'placeholder' => 'Pilih Guru Pengajar']); ?>

				<?php echo $errors->first('id_guru', '<p class="help-block">:message</p>'); ?>

			</div>
		</div>

		<div class="md-form<?php echo $errors->has('id_ekskul') ? 'has-error' : ''; ?>">
			<?php echo Form::label('id_ekskul', ' ', ['class'=>'control-label']); ?>

			<div class="col-md-6">
				<?php echo Form::select('id_ekskul', []+App\Ekskul::pluck('nama_ekskul','id')->all(), null, ['class'=>'form-control js-selectize', 'placeholder' => 'Pilih Ekskul']); ?>

				<?php echo $errors->first('id_ekskul', '<p class="help-block">:message</p>'); ?>

			</div>
		</div>
</div>

<div class="row">

		<div class="md-form<?php echo e($errors->has('mulai_ekskul') ? ' has-error' : ''); ?>" >
			<?php echo Form::label('mulai_ekskul', ' ', ['class'=>'control-label']); ?>

			<div class="col-md-4">
				<?php echo Form::text('mulai_ekskul', null, ['id'=>'mulai','class'=>'form-control timepicker']); ?>

				<?php echo $errors->first('mulai_ekskul', '<p class="help-block">:message</p>'); ?>

				<label id="form1" for="mulai">Mulai Ekskul</label>
			</div>
		</div>

		<div class="md-form<?php echo e($errors->has('selesai_ekskul') ? ' has-error' : ''); ?>" >
			<?php echo Form::label('selesai_ekskul', ' ', ['class'=>'control-label']); ?>

			<div class="col-md-4">
				<?php echo Form::text('selesai_ekskul', null, ['id'=>'selesai','class'=>'form-control timepicker']); ?>

				<?php echo $errors->first('selesai_ekskul', '<p class="help-block">:message</p>'); ?>

				<label id="form2" for="selesai">Selesai Ekskul</label>
			</div>
		</div>


		<div class="md-form<?php echo e($errors->has('hari_ekskul') ? ' has-error' : ''); ?>" >
			<div class="col-md-4">
              <?php echo Form::select('hari_ekskul', ['Minggu'=>'Minggu','Sabtu'=>'Sabtu','Jumat'=>'Jumat','Kamis'=>'Kamis','Rabu'=>'Rabu','Selasa'=>'Selasa','Senin'=>'Senin'], null, ['class'=>'mdb-select','placeholder' => 'Pilih Hari']); ?>

				<?php echo $errors->first('hari_ekskul', '<p class="help-block">:message</p>'); ?>

			</div>
		</div>
</div>

<div class="row">
		<div class="md-form<?php echo e($errors->has('keterangan_ekskul') ? ' has-error' : ''); ?>" >
			<?php echo Form::label('keterangan_ekskul', ' ', ['class'=>'control-label']); ?>

			<div class="col-md-12">
				<?php echo Form::textarea('keterangan_ekskul', null, ['class'=>'md-textarea']); ?>

				<?php echo $errors->first('keterangan_ekskul', '<p class="help-block">:message</p>'); ?>

				<label id="form4">Keterangan</label>
			</div>
		</div>
</div>

		<div class="form-group">
				<?php echo Form::submit('Simpan', ['class'=>'btn btn-primary btn-block']); ?>

		</div>