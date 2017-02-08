		<div class="row">
			<div class="col-md-12">
				<div class="card">
    				<h3 class="card-header primary-color white-text">Biodata Siswa</h3>
   					 <div class="card-block">

					<div class="panel-body">

<div class="md-form<?php echo e($errors->has('nama_siswa') ? ' has-error' : ''); ?>" >
	<?php echo Form::label('nama_siswa', ' ', ['class'=>'col-md-2 control-label']); ?>

	<div class="col-md-6">
		<?php echo Form::text('nama_siswa', null, ['class'=>'form-control']); ?>

		<?php echo $errors->first('nama_siswa', '<p class="help-block">:message</p>'); ?>

            <label for="form2">Nama Siswa</label>
	</div>
</div>

<div class="md-form<?php echo e($errors->has('nomor_induk') ? ' has-error' : ''); ?>" >
	<?php echo Form::label('nomor_induk', ' ', ['class'=>'col-md-2 control-label']); ?>

	<div class="col-md-6">
		<?php echo Form::number('nomor_induk', null, ['class'=>'form-control']); ?>

		<?php echo $errors->first('nomor_induk', '<p class="help-block">:message</p>'); ?>

            <label for="form2">Nomor Induk</label>
	</div>
</div>

<div class="md-form<?php echo e($errors->has('tanggal_lahir') ? ' has-error' : ''); ?>" >
	<?php echo Form::label('tanggal_lahir', ' ', ['class'=>'col-md-2 control-label']); ?>

	<div class="col-md-6">
		<?php echo Form::text('tanggal_lahir', null, ['class'=>'form-control datepicker']); ?>

		<?php echo $errors->first('tanggal_lahir', '<p class="help-block">:message</p>'); ?>

            <label for="form2">Tanggal Lahir Siswa</label>
	</div>
</div>


<div class="form-group<?php echo e($errors->has('agama') ? ' has-error' : ''); ?>" >
            <label >Jenis Kelamin</label>
	<div class="col-md-6">
		<?php echo Form::select('jenis_kelamin', ['Laki-Laki'=>'Laki-Laki','Perempuan'=>'Perempuan'], null, ['class'=>'form-control js-selectize', 'placeholder' => 'Pilih Jenis Kelamin'
				]); ?>

		<?php echo $errors->first('jenis_kelamin', '<p class="help-block">:message</p>'); ?>

	</div>
</div>

<div class="md-form<?php echo e($errors->has('tempat_lahir') ? ' has-error' : ''); ?>" >
	<?php echo Form::label('tempat_lahir', ' ', ['class'=>'col-md-2 control-label']); ?>

	<div class="col-md-6">
		<?php echo Form::text('tempat_lahir', null, ['class'=>'form-control']); ?>

		<?php echo $errors->first('tempat_lahir', '<p class="help-block">:message</p>'); ?>

            <label for="form2">Tempat Lahir Siswa</label>
	</div>
</div>

<div class="form-group<?php echo e($errors->has('agama') ? ' has-error' : ''); ?>" >
            <label >Agama</label>
	<div class="col-md-6">
		<?php echo Form::select('agama', ['Islam'=>'Islam','Kristen'=>'Kristen'], null, ['class'=>'form-control js-selectize', 'placeholder' => 'Pilih Agama'
				]); ?>

		<?php echo $errors->first('agama', '<p class="help-block">:message</p>'); ?>

	</div>
</div>

<div class="md-form<?php echo e($errors->has('pendidikan_sebelumnya') ? ' has-error' : ''); ?>" >
	<?php echo Form::label('pendidikan_sebelumnya', ' ', ['class'=>'col-md-2 control-label']); ?>

	<div class="col-md-6">
		<?php echo Form::text('pendidikan_sebelumnya', null, ['class'=>'form-control']); ?>

		<?php echo $errors->first('pendidikan_sebelumnya', '<p class="help-block">:message</p>'); ?>

            <label for="form2">Pendidikan Sebelumnya</label>
	</div>
</div>

<div class="md-form<?php echo e($errors->has('alamat_siswa') ? ' has-error' : ''); ?>" >
	<?php echo Form::label('alamat_siswa', ' ', ['class'=>'col-md-2 control-label']); ?>

	<div class="col-md-6">
		<?php echo Form::text('alamat_siswa', null, ['class'=>'form-control']); ?>

		<?php echo $errors->first('alamat_siswa', '<p class="help-block">:message</p>'); ?>

            <label for="form2">Alamat Siswa</label>
	</div>
</div>



					</div>
				</div>
			</div>
		</div>
	</div>

		<div class="row">
			<div class="col-md-12">
				<div class="card">
    				<h3 class="card-header primary-color white-text">Biodata Orang Tua</h3>
   					 <div class="card-block">

					<div class="panel-body">
<div class="col-md-2"> </div>
<div class="col-md-10">       Nama Orang Tua :  </div>	
<div class="md-form<?php echo e($errors->has('nama_ayah') ? ' has-error' : ''); ?>" >
	<?php echo Form::label('nama_ayah', ' ', ['class'=>'col-md-2 control-label']); ?>

	<div class="col-md-6">
		<?php echo Form::text('nama_ayah', null, ['class'=>'form-control']); ?>

		<?php echo $errors->first('nama_ayah', '<p class="help-block">:message</p>'); ?>

            <label for="form2">Nama Ayah</label>
	</div>
</div>

<div class="md-form<?php echo e($errors->has('nama_ibu') ? ' has-error' : ''); ?>" >
	<?php echo Form::label('nama_ibu', ' ', ['class'=>'col-md-2 control-label']); ?>

	<div class="col-md-6">
		<?php echo Form::text('nama_ibu', null, ['class'=>'form-control']); ?>

		<?php echo $errors->first('nama_ibu', '<p class="help-block">:message</p>'); ?>

            <label for="form2">Nama Ibu</label>
	</div>
</div>


<div class="col-md-2"> </div>
<div class="col-md-10">       Pekerjaan Orang Tua :  </div>	
 <div class="md-form<?php echo e($errors->has('pekerjaan_ayah') ? ' has-error' : ''); ?>" >  
    <?php echo Form::label('pekerjaan_ayah', ' ', ['class'=>'col-md-2 control-label']); ?>

<div class="col-md-6">        
 <?php echo Form::text('pekerjaan_ayah', null, ['class'=>'form-control']); ?>  
        <?php echo $errors->first('pekerjaan_ayah', '<p class="help-block">:message</p>'); ?> 
      <label for="form2">Pekerjaan Ayah</label> 
</div> 
</div>

<div class="md-form<?php echo e($errors->has('pekerjaan_ibu') ? ' has-error' : ''); ?>" >
	<?php echo Form::label('pekerjaan_ibu', ' ', ['class'=>'col-md-2 control-label']); ?>

	<div class="col-md-6">
		<?php echo Form::text('pekerjaan_ibu', null, ['class'=>'form-control']); ?>

		<?php echo $errors->first('pekerjaan_ibu', '<p class="help-block">:message</p>'); ?>

            <label for="form2">Pekerjaan Ibu</label>
	</div>
</div>


<div class="col-md-2"> </div>
<div class="col-md-10">       Alamat Orang Tua : </div>	

<div class="md-form<?php echo e($errors->has('alamat_ayah') ? ' has-error' : ''); ?>" >   
	<div class="col-md-6">       
	  <?php echo Form::textarea('alamat_ayah', null, ['class'=>'md-textarea']); ?>   
	  <?php echo $errors->first('alamat_ayah', '<p class="help-block">:message</p>'); ?>    
	   <label for="form2">Alamat Ayah</label>    
	</div> 
</div>

<div class="md-form<?php echo e($errors->has('alamat_ibu') ? ' has-error' : ''); ?>">
    <div class="col-md-6">
		<?php echo Form::textarea('alamat_ibu', null, ['class'=>'md-textarea']); ?>

		<?php echo $errors->first('alamat_ibu', '<p class="help-block">:message</p>'); ?>

            <label for="form8">Alamat Ibu</label>
	</div>
</div>
					</div>
				</div>
			</div>
		</div>
	</div>


		<div class="row">
			<div class="col-md-12">
				<div class="card">
    				<h3 class="card-header primary-color white-text">Keterangan Siswa</h3>
   					 <div class="card-block">

					<div class="panel-body">

		<div class="form-group<?php echo $errors->has('id_angkatan') ? 'has-error' : ''; ?>">
			<div class="col-md-6">

<label>Angkatan</label>
				<?php echo Form::select('id_angkatan', ['Tidak Ada'=>'Tidak Ada']+App\Angkatan::pluck('angkatan','id')->all(), null, ['class'=>'mdb-select js-selectize', 'placeholder' => 'Pilih Angkatan'
				]); ?>

				<?php echo $errors->first('id_angkatan', '<p class="help-block">:message</p>'); ?>

			</div>
		</div>

		<div class="form-group<?php echo $errors->has('id_les') ? 'has-error' : ''; ?>">
			<div class="col-md-6">
			<label>Les</label>
				<?php echo Form::select('id_les', ['Tidak Ada'=>'Tidak Ada']+App\Pelajaran::pluck('nama_pelajaran','id')->all(), null, ['class'=>'mdb-select js-selectize', 'placeholder' => 'Pilih Les'
				]); ?>

				<?php echo $errors->first('id_les', '<p class="help-block">:message</p>'); ?>

			</div>
		</div>

		<div class="form-group<?php echo $errors->has('id_kelas') ? 'has-error' : ''; ?>">
			<div class="col-md-6">

<label>Kelas</label>
				<?php echo Form::select('id_kelas', ['Tidak Ada'=>'Tidak Ada']+App\Kelas::pluck('nama_kelas','id')->all(), null, ['class'=>'mdb-select js-selectize', 'placeholder' => 'Pilih Kelas'
				]); ?>

				<?php echo $errors->first('id_kelas', '<p class="help-block">:message</p>'); ?>

			</div>
		</div>

		<div class="form-group<?php echo $errors->has('id_eksekul') ? 'has-error' : ''; ?>">
			<div class="col-md-6">
<label>Eksekul</label>
				<?php echo Form::select('id_eksekul', ['Tidak Ada'=>'Tidak Ada']+App\Ekskul::pluck('nama_ekskul','id')->all(), null, ['class'=>'mdb-select js-selectize', 'placeholder' => 'Pilih Eksekul'
				]); ?>

				<?php echo $errors->first('id_eksekul', '<p class="help-block">:message</p>'); ?>

			</div>
		</div>

<div class="form-group">
		<?php echo Form::submit('Simpan', ['class'=>'btn btn-primary btn-block']); ?>

</div>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>


