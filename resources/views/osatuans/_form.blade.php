<div class="form-group{{ $errors->has('nama_satuan') ? ' has-error' : '' }}" >
	{!! Form::label('nama_satuan', 'Nama Satuan', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-5">
		{!! Form::text('nama_satuan', null, ['class'=>'form-control']) !!}
		{!! $errors->first('nama_satuan', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group">
	<div class="col-md-5 col-md-offset-2">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary btn-block']) !!}
	</div>
</div>