<div class="row">		
		<div class="md-form{{ $errors->has('nip') ? ' has-error' : '' }}" >
			{!! Form::label('nip', ' ', ['class'=>'col-md-2 control-label']) !!}
			<div class="col-md-6">
				{!! Form::number('nip', null, ['class'=>'form-control']) !!}
				{!! $errors->first('nip', '<p class="help-block">:message</p>') !!}
            <label for="form1">NIP</label>
			</div>
		</div>


        <div class="md-form{{ $errors->has('nama_guru') ? ' has-error' : '' }}" >
			{!! Form::label('nama_guru', ' ', ['class'=>'col-md-2 control-label']) !!}
			<div class="col-md-6">
				{!! Form::text('nama_guru', null, ['class'=>'form-control']) !!}
				{!! $errors->first('nama_guru', '<p class="help-block">:message</p>') !!}
            <label for="form2">Nama Guru</label>
			</div>
		</div>
</div>

<div class="row">
		<div class="md-form{{ $errors->has('jenis_kelamin') ? ' has-error' : '' }}" >
			<div class="col-md-6">
				{!! Form::select('jenis_kelamin', ['Laki-Laki'=>'Laki-Laki','Perempuan'=>'Perempuan'], null, ['class'=>'mdb-select', 'placeholder' => 'Pilih Jenis Kelamin']) !!}
				{!! $errors->first('jenis_kelamin', '<p class="help-block">:message</p>') !!}
			</div>
		</div>

		<div class="md-form{{ $errors->has('agama') ? ' has-error' : '' }}" > 
			<div class="col-md-6">
				{!! Form::select('agama', ['Islam'=>'Islam','Kristen'=>'Kristen'], null, ['class'=>'mdb-select', 'placeholder' => 'Pilih Agama']) !!}
				{!! $errors->first('agama', '<p class="help-block">:message</p>') !!}
			</div>
		</div>
</div>

<div class="row">
		<div class="md-form{{ $errors->has('jabatan') ? ' has-error' : '' }}" >
			<div class="col-md-6">
				{!! Form::select('jabatan', ['Kepala Sekolah'=>'Kepala Sekolah','Wakil Sekolah'=>'Wakil Sekolah','Guru'=>'Guru'], null, ['class'=>'mdb-select', 'placeholder' => 'Pilih Jabatan'
						]) !!}
				{!! $errors->first('jabatan', '<p class="help-block">:message</p>') !!}
			</div>
		</div>	

		<div class="md-form{{ $errors->has('status') ? ' has-error' : '' }}" >
			<div class="col-md-6">
				{!! Form::select('status', ['Sudah Nikah'=>'Sudah Nikah','Belum Nikah'=>'Belum Nikah'], null, ['class'=>'mdb-select', 'placeholder' => 'Pilih Status Pernikahan'
						]) !!}
				{!! $errors->first('status', '<p class="help-block">:message</p>') !!}
			</div>
		</div>	
</div>

<div class="row">
		<div class="md-form{{ $errors->has('pendidikan') ? ' has-error' : '' }}" >
			{!! Form::label('pendidikan', ' ', ['class'=>'col-md-2 control-label']) !!}
			<div class="col-md-6">
				{!! Form::text('pendidikan', null, ['class'=>'form-control']) !!}
				{!! $errors->first('pendidikan', '<p class="help-block">:message</p>') !!}
            <label for="form3">Terakhir Pendidikan</label>
			</div>
		</div>

		<div class="md-form{{ $errors->has('tahun_lulus') ? ' has-error' : '' }}" >
			{!! Form::label('tahun_lulus', ' ', ['class'=>'col-md-2 control-label']) !!}
			<div class="col-md-6">
				{!! Form::text('tahun_lulus', null, ['maxlength'=>'4','class'=>'form-control']) !!}
				{!! $errors->first('tahun_lulus', '<p class="help-block">:message</p>') !!}
            <label for="form4">Tahun Lulus</label>
			</div>
		</div>
</div>

<div class="row">
		<div class="md-form{{ $errors->has('ttl') ? ' has-error' : '' }}" >
			{!! Form::label('ttl', ' ', ['class'=>'col-md-2 control-label']) !!}
			<div class="col-md-6">
				{!! Form::textarea('ttl', null, ['class'=>'md-textarea']) !!}
				{!! $errors->first('ttl', '<p class="help-block">:message</p>') !!}
		            <label for="form5">Tempat Tanggal Lahir</label>
			</div>
		</div>

		<div class="md-form{{ $errors->has('alamat') ? ' has-error' : '' }}" >
			{!! Form::label('alamat', ' ', ['class'=>'col-md-2 control-label']) !!}
			<div class="col-md-6">
				{!! Form::textarea('alamat', null, ['class'=>'md-textarea']) !!}
				{!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
		            <label for="form2">Alamat</label>
			</div>
		</div>
</div>

		<div class="form-group">
				{!! Form::submit('Simpan', ['class'=>'btn btn-primary btn-block']) !!}
		</div>