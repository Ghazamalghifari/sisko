<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}" >
	{!! Form::label('email', 'E-mail', ['class'=>'col-md-1 control-label']) !!}
	<div class="col-md-5">
		{!! Form::email('email', null, ['class'=>'form-control']) !!}
		{!! $errors->first('email', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}" >
	{!! Form::label('name', 'Nama', ['class'=>'col-md-1 control-label']) !!}
	<div class="col-md-5">
		{!! Form::text('name', null, ['class'=>'form-control']) !!}
		{!! $errors->first('name', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group"> 
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary btn-block']) !!} 
</div>