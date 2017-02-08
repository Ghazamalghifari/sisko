<div class="col-md-2">

				<label><b>Nama Supir :</b></label>
</div>
<div class="md-form{!! $errors->has('id_karyawan') ? 'has-error' : '' !!}">
			<div class="col-md-5">
				{!! Form::select('id_karyawan', [''=>'']+App\Karyawan::pluck('nama_karyawan','id')->all(), null, ['class'=>'mdb-select colorful-select dropdown-primary js-selectize', 'placeholder' => 'Pilih Supir'
				]) !!}
				{!! $errors->first('id_karyawan', '<p class="help-block">:message</p>') !!}
			</div>
		</div>

{!! Form::hidden('jumlah_siswa', $value = 0, ['class'=>'form-control']) !!}
		<div class="md-form">
			<div class="col-md-5">
				{!! Form::submit('Simpan', ['class'=>'btn btn-primary btn-block']) !!}
			</div>
		</div>
