<div class="form-group{{ $errors->has('nama_ekskul') ? ' has-error' : '' }}" >
	{!! Form::label('nama_ekskul', 'Nama Ekskul', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-5">
		{!! Form::text('nama_ekskul', null, ['class'=>'form-control']) !!}
		{!! $errors->first('nama_ekskul', '<p class="help-block">:message</p>') !!}
	</div>
</div>

{!! Form::hidden('status', $value = 1, ['class'=>'form-control']) !!}
<div class="form-group">
	<div class="col-md-5 col-md-offset-2">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary btn-block']) !!}
	</div>
</div>