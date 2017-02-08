<div class="form-group{{ $errors->has('angkatan') ? ' has-error' : '' }}" >
	{!! Form::label('angkatan', 'Angkatan', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-5">
		{!! Form::text('angkatan', null, ['class'=>'form-control']) !!}
		{!! $errors->first('angkatan', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group">
	<div class="col-md-5 col-md-offset-2">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary btn-block']) !!}
	</div>
</div>