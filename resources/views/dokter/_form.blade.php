
		<div class="md-form{!! $errors->has('id_siswa') ? 'has-error' : '' !!}">
			<div class="col-md-5">
				{!! Form::select('id_siswa', []+App\Siswa::pluck('nama_siswa','id')->all(), null, ['class'=>'form-control js-selectize', 'placeholder' => 'Pilih Siswa Sebagai Dokter Kecil'
				]) !!}
				{!! $errors->first('id_siswa', '<p class="help-block">:message</p>') !!}
			</div>
		</div>

		<div class="md-form{{ $errors->has('bertugas') ? ' has-error' : '' }}" >
			<div class="col-md-7">
				{!! Form::text('bertugas', null, ['class'=>'form-control']) !!}
				{!! $errors->first('bertugas', '<p class="help-block">:message</p>') !!}
				<label id="form1">Siswa Bertugas</label>
			</div>
		</div>


<div class="md">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary btn-block']) !!}
</div>