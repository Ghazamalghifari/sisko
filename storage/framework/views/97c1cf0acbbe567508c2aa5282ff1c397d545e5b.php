		<div class="md<?php echo e($errors->has('tanggal_cicilan') ? ' has-error' : ''); ?>" >
			<?php echo Form::label('tanggal_cicilan', 'Tanggal Pembayaran', ['class'=>'col-md-4 control-label']); ?>

			<div class="col-md-5">
				<?php echo Form::text('tanggal_cicilan', null, ['class'=>'form-control datepicker ']); ?>

				<?php echo $errors->first('tanggal_cicilan', '<p class="help-block">:message</p>'); ?>

			</div>
		</div>


		<div class="md<?php echo e($errors->has('status_cicilan') ? ' has-error' : ''); ?>" >
			<?php echo Form::label('status_cicilan', 'Status Pembayaran Kantin', ['class'=>'col-md-4 control-label']); ?>

			<div class="col-md-5">
				<?php echo Form::select('status_cicilan', ['Lunas'=>'Lunas','Belum Lunas'=>'Belum Lunas'], null, ['class'=>'form-control js-selectize', 'placeholder' => 'Pilih Status Pembayaran'
						]); ?>

				<?php echo $errors->first('status_cicilan', '<p class="help-block">:message</p>'); ?>

			</div>
		</div>

		<?php echo Form::hidden('id_karyawan', $value = $id_karyawan, ['class'=>'form-control']); ?>

		
		<div class="form-group">
				<?php echo Form::submit('Simpan', ['class'=>'btn btn-primary btn-block']); ?>

		</div>