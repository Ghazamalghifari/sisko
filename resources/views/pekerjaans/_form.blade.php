<div class="form-group{{ $errors->has('nama_pekerjaan') ? ' has-error' : '' }}" >
	{!! Form::label('nama_pekerjaan', 'Nama Pekerjaana', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-5">
		{!! Form::text('nama_pekerjaan', null, ['class'=>'form-control']) !!}
		{!! $errors->first('nama_pekerjaan', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group">
	<div class="col-md-5 col-md-offset-2">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary btn-block']) !!}
	</div>
</div>