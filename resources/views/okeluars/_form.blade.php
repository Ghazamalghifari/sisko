<div class="row">
		<div class="md-form{!! $errors->has('id_omasuks') ? 'has-error' : '' !!}">
			<div class="col-md-6">
				{!! Form::select('id_omasuks', []+App\Omasuk::pluck('nama_obat','id')->all(), null, ['class'=>'form-control js-selectize', 'placeholder' => 'Pilih Obat'
				]) !!}
				{!! $errors->first('id_omasuks', '<p class="help-block">:message</p>') !!}
			</div>
		</div>

		<div class="md-form{{ $errors->has('obat_keluar') ? ' has-error' : '' }}" >
			<div class="col-md-6">
				{!! Form::number('obat_keluar', null, ['class'=>'form-control']) !!}
				{!! $errors->first('obat_keluar', '<p class="help-block">:message</p>') !!}
				<label id="form1">Obat Keluar</label>
			</div>
		</div>
</div>

<div class="form-group">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary btn-block']) !!}
</div>