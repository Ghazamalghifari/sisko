
		<div class="form-group{!! $errors->has('id_guru') ? 'has-error' : '' !!}">
			{!! Form::label('id_guru', 'Pengajar', ['class'=>'col-md-2 control-label']) !!}
			<div class="col-md-4">
				{!! Form::select('id_guru', [''=>'']+App\Guru::pluck('nama_guru','id')->all(), null, ['class'=>'form-control js-selectize', 'placeholder' => 'Pilih Pengajar'
				]) !!}
				{!! $errors->first('id_guru', '<p class="help-block">:message</p>') !!}
			</div>
		</div>

		<div class="form-group{{ $errors->has('mata_pelajaran') ? ' has-error' : '' }}" >
			{!! Form::label('mata_pelajaran', 'Mata Pelajaran', ['class'=>'col-md-2 control-label']) !!}
			<div class="col-md-5">
				{!! Form::text('mata_pelajaran', null, ['class'=>'form-control']) !!}
				{!! $errors->first('mata_pelajaran', '<p class="help-block">:message</p>') !!}
			</div>
		</div>


{!! Form::hidden('jumlah_siswa', $value = 0, ['class'=>'form-control']) !!}
<div class="md">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary btn-block']) !!}
</div>