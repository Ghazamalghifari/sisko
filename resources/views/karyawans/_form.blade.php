		<div class="md-form{{ $errors->has('nik') ? ' has-error' : '' }}" >
			{!! Form::label('nik', ' ', ['class'=>'col-md-2 control-label']) !!}
			<div class="col-md-6">
				{!! Form::number('nik', null, ['class'=>'form-control']) !!}
				{!! $errors->first('nik', '<p class="help-block">:message</p>') !!}
            <label for="form1">NIK</label>
			</div>
		</div>

		<div class="md-form{{ $errors->has('nama_karyawan') ? ' has-error' : '' }}" >
			{!! Form::label('nama_karyawan', ' ', ['class'=>'col-md-2 control-label']) !!}
			<div class="col-md-6">
				{!! Form::text('nama_karyawan', null, ['class'=>'form-control']) !!}
				{!! $errors->first('nama_karyawan', '<p class="help-block">:message</p>') !!}
            <label for="form2">Nama Karyawan</label>
			</div>
		</div>

		<div class="md-form{!! $errors->has('id_pekerjaan') ? 'has-error' : '' !!}">
			<div class="col-md-6">
				{!! Form::select('id_pekerjaan', []+App\Pekerjaan::pluck('nama_pekerjaan','id')->all(), null, ['class'=>'mdb-select', 'placeholder' => 'Pilih Pekerjaan'
				]) !!}
				{!! $errors->first('id_pekerjaan', '<p class="help-block">:message</p>') !!}
            <label>Pekerjaan</label>
			</div>
		</div>


		<div class="md-form{{ $errors->has('no_telp') ? ' has-error' : '' }}" >
			{!! Form::label('no_telp', ' ', ['class'=>'col-md-2 control-label']) !!}
			<div class="col-md-6">
				{!! Form::number('no_telp', null, ['class'=>'form-control']) !!}
				{!! $errors->first('no_telp', '<p class="help-block">:message</p>') !!}
            <label for="form3">Nomor Telepone</label>
			</div>
		</div>

		<div class="md-form{{ $errors->has('tugas') ? ' has-error' : '' }}" >
			{!! Form::label('tugas', ' ', ['class'=>'col-md-2 control-label']) !!}
			<div class="col-md-6">
				{!! Form::textarea('tugas', null, ['class'=>'md-textarea']) !!}
				{!! $errors->first('tugas', '<p class="help-block">:message</p>') !!}
            <label for="form3">Tugas Karyawan</label>
			</div>
		</div>

		<div class="md-form{{ $errors->has('alamat') ? ' has-error' : '' }}" >
			{!! Form::label('alamat', ' ', ['class'=>'col-md-2 control-label']) !!}
			<div class="col-md-6">
				{!! Form::textarea('alamat', null, ['class'=>'md-textarea']) !!}
				{!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
            <label for="form4">Alamat</label>
			</div>
		</div>

		<div class="form-group">
				{!! Form::submit('Simpan', ['class'=>'btn btn-primary btn-block']) !!}
		</div>

