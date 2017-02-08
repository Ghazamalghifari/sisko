<div class="row">

		<div class="md-form{{ $errors->has('nama_fasilitas') ? ' has-error' : '' }}" >
			<div class="col-md-6">
				{!! Form::text('nama_fasilitas', null, ['class'=>'form-control']) !!}
				{!! $errors->first('nama_fasilitas', '<p class="help-block">:message</p>') !!}
				<label id="form1">Nama Fasilitas</label>
			</div>
		</div>

		<div class="md-form{{ $errors->has('stok_fasilitas') ? ' has-error' : '' }}" >
			<div class="col-md-6">
				{!! Form::number('stok_fasilitas', null, ['class'=>'form-control']) !!}
				{!! $errors->first('stok_fasilitas', '<p class="help-block">:message</p>') !!}
				<label id="form1">Stok Fasilitas</label>
			</div>
		</div>
</div>


<div class="form-group">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary btn-block']) !!}
</div>