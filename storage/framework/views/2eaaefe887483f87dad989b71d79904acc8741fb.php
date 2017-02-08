<div class="row">		
		<div class="md-form<?php echo e($errors->has('nip') ? ' has-error' : ''); ?>" >
			<?php echo Form::label('nip', ' ', ['class'=>'col-md-2 control-label']); ?>

			<div class="col-md-6">
				<?php echo Form::number('nip', null, ['class'=>'form-control']); ?>

				<?php echo $errors->first('nip', '<p class="help-block">:message</p>'); ?>

            <label for="form1">NIP</label>
			</div>
		</div>


        <div class="md-form<?php echo e($errors->has('nama_guru') ? ' has-error' : ''); ?>" >
			<?php echo Form::label('nama_guru', ' ', ['class'=>'col-md-2 control-label']); ?>

			<div class="col-md-6">
				<?php echo Form::text('nama_guru', null, ['class'=>'form-control']); ?>

				<?php echo $errors->first('nama_guru', '<p class="help-block">:message</p>'); ?>

            <label for="form2">Nama Guru</label>
			</div>
		</div>
</div>

<div class="row">
		<div class="md-form<?php echo e($errors->has('jenis_kelamin') ? ' has-error' : ''); ?>" >
			<div class="col-md-6">
				<?php echo Form::select('jenis_kelamin', ['Laki-Laki'=>'Laki-Laki','Perempuan'=>'Perempuan'], null, ['class'=>'mdb-select', 'placeholder' => 'Pilih Jenis Kelamin']); ?>

				<?php echo $errors->first('jenis_kelamin', '<p class="help-block">:message</p>'); ?>

			</div>
		</div>

		<div class="md-form<?php echo e($errors->has('agama') ? ' has-error' : ''); ?>" > 
			<div class="col-md-6">
				<?php echo Form::select('agama', ['Islam'=>'Islam','Kristen'=>'Kristen'], null, ['class'=>'mdb-select', 'placeholder' => 'Pilih Agama']); ?>

				<?php echo $errors->first('agama', '<p class="help-block">:message</p>'); ?>

			</div>
		</div>
</div>

<div class="row">
		<div class="md-form<?php echo e($errors->has('jabatan') ? ' has-error' : ''); ?>" >
			<div class="col-md-6">
				<?php echo Form::select('jabatan', ['Kepala Sekolah'=>'Kepala Sekolah','Wakil Sekolah'=>'Wakil Sekolah','Guru'=>'Guru'], null, ['class'=>'mdb-select', 'placeholder' => 'Pilih Jabatan'
						]); ?>

				<?php echo $errors->first('jabatan', '<p class="help-block">:message</p>'); ?>

			</div>
		</div>	

		<div class="md-form<?php echo e($errors->has('status') ? ' has-error' : ''); ?>" >
			<div class="col-md-6">
				<?php echo Form::select('status', ['Sudah Nikah'=>'Sudah Nikah','Belum Nikah'=>'Belum Nikah'], null, ['class'=>'mdb-select', 'placeholder' => 'Pilih Status Pernikahan'
						]); ?>

				<?php echo $errors->first('status', '<p class="help-block">:message</p>'); ?>

			</div>
		</div>	
</div>

<div class="row">
		<div class="md-form<?php echo e($errors->has('pendidikan') ? ' has-error' : ''); ?>" >
			<?php echo Form::label('pendidikan', ' ', ['class'=>'col-md-2 control-label']); ?>

			<div class="col-md-6">
				<?php echo Form::text('pendidikan', null, ['class'=>'form-control']); ?>

				<?php echo $errors->first('pendidikan', '<p class="help-block">:message</p>'); ?>

            <label for="form3">Terakhir Pendidikan</label>
			</div>
		</div>

		<div class="md-form<?php echo e($errors->has('tahun_lulus') ? ' has-error' : ''); ?>" >
			<?php echo Form::label('tahun_lulus', ' ', ['class'=>'col-md-2 control-label']); ?>

			<div class="col-md-6">
				<?php echo Form::text('tahun_lulus', null, ['maxlength'=>'4','class'=>'form-control']); ?>

				<?php echo $errors->first('tahun_lulus', '<p class="help-block">:message</p>'); ?>

            <label for="form4">Tahun Lulus</label>
			</div>
		</div>
</div>

<div class="row">
		<div class="md-form<?php echo e($errors->has('ttl') ? ' has-error' : ''); ?>" >
			<?php echo Form::label('ttl', ' ', ['class'=>'col-md-2 control-label']); ?>

			<div class="col-md-6">
				<?php echo Form::textarea('ttl', null, ['class'=>'md-textarea']); ?>

				<?php echo $errors->first('ttl', '<p class="help-block">:message</p>'); ?>

		            <label for="form5">Tempat Tanggal Lahir</label>
			</div>
		</div>

		<div class="md-form<?php echo e($errors->has('alamat') ? ' has-error' : ''); ?>" >
			<?php echo Form::label('alamat', ' ', ['class'=>'col-md-2 control-label']); ?>

			<div class="col-md-6">
				<?php echo Form::textarea('alamat', null, ['class'=>'md-textarea']); ?>

				<?php echo $errors->first('alamat', '<p class="help-block">:message</p>'); ?>

		            <label for="form2">Alamat</label>
			</div>
		</div>
</div>

		<div class="form-group">
				<?php echo Form::submit('Simpan', ['class'=>'btn btn-primary btn-block']); ?>

		</div>