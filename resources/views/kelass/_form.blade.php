<div class="form-group{{ $errors->has('kelas') ? ' has-error' : '' }}" >
	<div class="col-md-6">
		{!! Form::select('kelas', ['1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6'], null, ['class'=>'form-control js-selectize', 'placeholder' => 'Pilih Kelas'
				]) !!}
		{!! $errors->first('kelas', '<p class="help-block">:message</p>') !!}
	</div>
</div>


<div class="md-form{{ $errors->has('nama_kelas') ? ' has-error' : '' }}" >
	{!! Form::label('nama_kelas', ' ', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-6">
		{!! Form::text('nama_kelas', null, ['class'=>'form-control']) !!}
		{!! $errors->first('nama_kelas', '<p class="help-block">:message</p>') !!}
            <label for="form4">Nama Kelas</label>
	</div>
</div>


{!! Form::hidden('jumlah_siswa', $value = 0, ['class'=>'form-control']) !!}

{!! Form::hidden('status', $value = 1, ['class'=>'form-control']) !!}
<div class="md">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary btn-block']) !!}
</div>