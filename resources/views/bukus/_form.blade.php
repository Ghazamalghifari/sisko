<div class="md-form{{ $errors->has('kode') ? ' has-error' : '' }}" >
	{!! Form::label('kode', ' ', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-3">
		{!! Form::text('kode', null, ['class'=>'form-control']) !!}
		{!! $errors->first('kode', '<p class="help-block">:message</p>') !!}
		<label id="form1">Kode Buku</label>
	</div>
</div>

<div class="md-form{{ $errors->has('nama_buku') ? ' has-error' : '' }}" >
	{!! Form::label('nama_buku', ' ', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-6">
		{!! Form::text('nama_buku', null, ['class'=>'form-control']) !!}
		{!! $errors->first('nama_buku', '<p class="help-block">:message</p>') !!}
		<label id="form1">Nama Buku</label>
	</div>
</div>

<div class="md-form{{ $errors->has('stok') ? ' has-error' : '' }}" >
	{!! Form::label('stok', ' ', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-3">
		{!! Form::number('stok', null, ['class'=>'form-control']) !!}
		{!! $errors->first('stok', '<p class="help-block">:message</p>') !!}
		<label id="form1">Stok Buku</label>
	</div>
</div>

<div class="form-group">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary btn-block']) !!}
</div>