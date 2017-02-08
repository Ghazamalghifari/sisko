
		<div class="md-form{{ $errors->has('angkatan') ? ' has-error' : '' }}" >
			{!! Form::label('angkatan', ' ', ['class'=>'col-md-2 control-label']) !!}
			<div class="col-md-6">
				{!! Form::number('angkatan', null, ['class'=>'form-control ']) !!}
				{!! $errors->first('angkatan', '<p class="help-block">:message</p>') !!}
      <label for="form2">Angkatan</label> 
			</div>
		</div>

		<div class="md-form{{ $errors->has('tahun_angkatan') ? ' has-error' : '' }}" >
			{!! Form::label('tahun_angkatan', ' ', ['class'=>'col-md-2 control-label']) !!}
			<div class="col-md-6">
				{!! Form::text('tahun_angkatan', null, ['class'=>'form-control datepicker ']) !!}
				{!! $errors->first('tahun_angkatan', '<p class="help-block">:message</p>') !!}
      <label for="form2">Tahun Angkatan</label> 
			</div>
		</div>

{!! Form::hidden('jumlah_siswa', $value = 0, ['class'=>'form-control']) !!}
{!! Form::hidden('status', $value = 1, ['class'=>'form-control']) !!}
		<div class="form-group">
				{!! Form::submit('Simpan', ['class'=>'btn btn-primary btn-block']) !!}
		</div>

