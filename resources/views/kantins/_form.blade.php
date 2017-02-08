		<div class="form-group{!! $errors->has('id_karyawan') ? 'has-error' : '' !!}">
			{!! Form::label('id_karyawan', 'Karyawan', ['class'=>'col-md-2 control-label']) !!}
			<div class="col-md-5">
				{!! Form::select('id_karyawan', [''=>'']+App\Karyawan::pluck('nama_karyawan','id')->all(), null, ['class'=>'form-control js-selectize', 'placeholder' => 'Pilih Karyawan'
				]) !!}
				{!! $errors->first('id_karyawan', '<p class="help-block">:message</p>') !!}
			</div>
		</div>

		<div class="form-group{{ $errors->has('bayaran_kantin') ? ' has-error' : '' }}" >
			{!! Form::label('bayaran_kantin', 'Bayaran  Kantin', ['class'=>'col-md-2 control-label']) !!}
			<div class="col-md-5">
				{!! Form::text('bayaran_kantin', null, ['class'=>'form-control']) !!}
				{!! $errors->first('bayaran_kantin', '<p class="help-block">:message</p>') !!}
			</div>
		</div>

		<div class="form-group">
				{!! Form::submit('Simpan', ['class'=>'btn btn-primary btn-block']) !!}
		</div>