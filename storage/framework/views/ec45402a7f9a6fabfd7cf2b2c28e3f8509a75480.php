		<div class="row">
			<div class="col-md-12">
				<div class="card">
    				<h3 class="card-header primary-color white-text"><i class="fa fa-child" aria-hidden="true"></i>
                         Biodata Siswa</h3>
   					 <div class="card-block">

					<div class="panel-body">


<div class="row">
					<div class="form-group<?php echo e($errors->has('foto_siswa') ? ' has-error' : ''); ?>">
						<?php echo Form::label('foto_siswa', 'Foto', ['class'=>'col-md-2 control-label']); ?>

						<div class="col-md-12">
							<?php echo Form::file('foto_siswa'); ?>

							<?php if(isset($murid) && $murid->foto_siswa): ?>
							<p><br><center>
								<?php echo Html::image(asset('foto_siswa/'.$murid->foto_siswa), null, ['class'=>'img-rounded img responsive','style'=>'width:50%;']); ?></center>
							</p>
							<?php endif; ?>
							<?php echo $errors->first('foto_siswa', '<p class="help-block">:message</p>'); ?>

						</div>
					</div>
</div>

<div class="row">
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

							            <label for="form3">NIS</label>
								</div>
							</div>
</div>

<div class="row">
		<div class="md-form<?php echo e($errors->has('jenis_kelamin') ? ' has-error' : ''); ?>" >
			<div class="col-md-6">
				<?php echo Form::select('jenis_kelamin', ['Laki-Laki'=>'Laki-Laki','Perempuan'=>'Perempuan'], null, ['class'=>'mdb-select', 'placeholder' => 'Pilih Jenis Kelamin']); ?>

				<label>Jenis Kelamin</label>
				<?php echo $errors->first('jenis_kelamin', '<p class="help-block">:message</p>'); ?>

			</div>
		</div>

		<div class="md-form<?php echo e($errors->has('agama') ? ' has-error' : ''); ?>" > 
			<div class="col-md-6">
				<?php echo Form::select('agama', ['Islam'=>'Islam','Kristen'=>'Kristen'], null, ['class'=>'mdb-select', 'placeholder' => 'Pilih Agama']); ?>

				<label>Pilih Agama</label>
				<?php echo $errors->first('agama', '<p class="help-block">:message</p>'); ?>

			</div>
		</div>
</div>

<div class="row">

							<div class="md-form<?php echo e($errors->has('tanggal_lahir') ? ' has-error' : ''); ?>" >
								<?php echo Form::label('tanggal_lahir', ' ', ['class'=>'col-md-2 control-label']); ?>

								<div class="col-md-6">
									<?php echo Form::text('tanggal_lahir', null, ['class'=>'form-control datepicker']); ?>

									<?php echo $errors->first('tanggal_lahir', '<p class="help-block">:message</p>'); ?>

							            <label for="form4">Tanggal Lahir Siswa</label>
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

</div>

<div class="row">
							<div class="md-form<?php echo e($errors->has('tempat_lahir') ? ' has-error' : ''); ?>" >
								<?php echo Form::label('tempat_lahir', ' ', ['class'=>'col-md-2 control-label']); ?>

								<div class="col-md-6">
									<?php echo Form::textarea('tempat_lahir', null, ['class'=>'md-textarea']); ?>

									<?php echo $errors->first('tempat_lahir', '<p class="help-block">:message</p>'); ?>

							            <label for="form2">Tempat Lahir Siswa</label>
								</div>
							</div>

							<div class="md-form<?php echo e($errors->has('alamat_siswa') ? ' has-error' : ''); ?>" >
								<?php echo Form::label('alamat_siswa', ' ', ['class'=>'col-md-2 control-label']); ?>

								<div class="col-md-6">
									<?php echo Form::textarea('alamat_siswa', null, ['class'=>'md-textarea']); ?>

									<?php echo $errors->first('alamat_siswa', '<p class="help-block">:message</p>'); ?>

							            <label for="form2">Alamat Siswa</label>
								</div>
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
<div class="row">
						<div class="md-form<?php echo e($errors->has('nama_ayah') ? ' has-error' : ''); ?>" >
							<?php echo Form::label('nama_ayah', ' ', ['class'=>'col-md-2 control-label']); ?>

							<div class="col-md-6">
						        <i class="fa fa-male prefix"></i>
								<?php echo Form::text('nama_ayah', null, ['class'=>'form-control']); ?>

								<?php echo $errors->first('nama_ayah', '<p class="help-block">:message</p>'); ?>

						            <label for="form2">Nama Ayah</label>
							</div>
						</div>

						<div class="md-form<?php echo e($errors->has('nama_ibu') ? ' has-error' : ''); ?>" >
							<?php echo Form::label('nama_ibu', ' ', ['class'=>'col-md-2 control-label']); ?>

							<div class="col-md-6">
						        <i class="fa fa-female prefix"></i>
								<?php echo Form::text('nama_ibu', null, ['class'=>'form-control']); ?>

								<?php echo $errors->first('nama_ibu', '<p class="help-block">:message</p>'); ?>

						            <label for="form2">Nama Ibu</label>
							</div>
						</div>
</div>

<div class="row">
						 <div class="md-form<?php echo e($errors->has('pekerjaan_ayah') ? ' has-error' : ''); ?>" >  
						    <?php echo Form::label('pekerjaan_ayah', ' ', ['class'=>'col-md-2 control-label']); ?>

						<div class="col-md-6">       
						        <i class="fa fa-male prefix"></i> 
						 <?php echo Form::text('pekerjaan_ayah', null, ['class'=>'form-control']); ?>  
						        <?php echo $errors->first('pekerjaan_ayah', '<p class="help-block">:message</p>'); ?> 
						      <label for="form2">Pekerjaan Ayah</label> 
						</div> 
						</div>

						<div class="md-form<?php echo e($errors->has('pekerjaan_ibu') ? ' has-error' : ''); ?>" >
							<?php echo Form::label('pekerjaan_ibu', ' ', ['class'=>'col-md-2 control-label']); ?>

							<div class="col-md-6">
						        <i class="fa fa-female prefix"></i>
								<?php echo Form::text('pekerjaan_ibu', null, ['class'=>'form-control']); ?>

								<?php echo $errors->first('pekerjaan_ibu', '<p class="help-block">:message</p>'); ?>

						            <label for="form2">Pekerjaan Ibu</label>
							</div>
						</div>
</div>

<div class="row">
						<div class="md-form<?php echo e($errors->has('alamat_ayah') ? ' has-error' : ''); ?>" >   
							<div class="col-md-6">   
						        <i class="fa fa-male prefix"></i>    
							  <?php echo Form::textarea('alamat_ayah', null, ['class'=>'md-textarea']); ?>   
							  <?php echo $errors->first('alamat_ayah', '<p class="help-block">:message</p>'); ?>    
							   <label for="form2">Alamat Ayah</label>    
							</div> 
						</div>

						<div class="md-form<?php echo e($errors->has('alamat_ibu') ? ' has-error' : ''); ?>">
						    <div class="col-md-6">
						        <i class="fa fa-female prefix"></i>
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
	</div>


<?php echo Form::hidden('id_angkatan', $value = $id_angkatan, ['class'=>'form-control']); ?>

<div class="md-form">
		<?php echo Form::submit('Simpan', ['class'=>'btn btn-primary btn-block']); ?>

</div>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>


