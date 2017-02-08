		
          <div class="md-form<?php echo $errors->has('id_siswa') ? 'has-error' : ''; ?>">
            <?php echo Form::label('id_siswa', ' ', ['class'=>'col-md-2 control-label']); ?>

            <div class="col-md-6">
              <?php echo Form::select('id_siswa', [''=>'']+App\Siswa::pluck('nomor_induk','id')->all(), null, ['class'=>'js-selectize','placeholder' => 'Nomor Induk Siswa']); ?>

              <?php echo $errors->first('id_siswa', '<p class="help-block">:message</p>'); ?>

            </div>
          </div>

		<div class="md-form<?php echo e($errors->has('nama_siswa') ? ' has-error' : ''); ?>" >
			<?php echo Form::label('nama_siswa', ' ', ['class'=>'col-md-2 control-label']); ?>

			<div class="col-md-6">
				<?php echo Form::text('nama_siswa', null, ['class'=>'form-control','readonly']); ?>

				<?php echo $errors->first('nama_siswa', '<p class="help-block">:message</p>'); ?>

			</div>
		</div>

<?php echo Form::hidden('id_buku', $value = $id_buku, ['class'=>'form-control']); ?>

<?php echo Form::hidden('minjam', $value = 1, ['class'=>'form-control']); ?>

		<div class="form-group">
				<?php echo Form::submit('Simpan', ['class'=>'btn btn-primary btn-block']); ?>

		</div>
