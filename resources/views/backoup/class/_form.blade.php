
	<div class="col-md-1">
				<label><b>Kelas :</b></label>
	</div>
<div class="md-form{!! $errors->has('id_kelas') ? 'has-error' : '' !!}">
			<div class="col-md-5">
				{!! Form::select('id_kelas', [''=>'']+App\Kelas::pluck('nama_kelas','id')->all(), null, ['class'=>'mdb-select colorful-select dropdown-primary js-selectize', 'placeholder' => 'Pilih Kelas'
				]) !!}
				{!! $errors->first('id_kelas', '<p class="help-block">:message</p>') !!}
			</div>
		</div>

	<div class="col-md-1">
				<label><b>Nama Kelas :</b></label>
	</div>
		<div class="md-form{{ $errors->has('nama_clas') ? ' has-error' : '' }}" >
	<div class="col-md-5">
		{!! Form::text('nama_clas', null, ['class'=>'form-control']) !!}
		{!! $errors->first('nama_clas', '<p class="help-block">:message</p>') !!}
	</div>
</div>

{!! Form::hidden('jumlah_siswa', $value = 0, ['class'=>'form-control']) !!}
<div class="form-group">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary btn-block']) !!}
</div>