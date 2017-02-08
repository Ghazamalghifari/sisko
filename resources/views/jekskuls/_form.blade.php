<div class="row">
		<div class="md-form{!! $errors->has('id_guru') ? 'has-error' : '' !!}">
			{!! Form::label('id_guru', ' ', ['class'=>'control-label']) !!}
			<div class="col-md-6">
				{!! Form::select('id_guru', []+App\Guru::pluck('nama_guru','id')->all(), null, ['class'=>'form-control js-selectize', 'placeholder' => 'Pilih Guru Pengajar']) !!}
				{!! $errors->first('id_guru', '<p class="help-block">:message</p>') !!}
			</div>
		</div>

		<div class="md-form{!! $errors->has('id_ekskul') ? 'has-error' : '' !!}">
			{!! Form::label('id_ekskul', ' ', ['class'=>'control-label']) !!}
			<div class="col-md-6">
				{!! Form::select('id_ekskul', []+App\Ekskul::pluck('nama_ekskul','id')->all(), null, ['class'=>'form-control js-selectize', 'placeholder' => 'Pilih Ekskul']) !!}
				{!! $errors->first('id_ekskul', '<p class="help-block">:message</p>') !!}
			</div>
		</div>
</div>

<div class="row">

		<div class="md-form{{ $errors->has('mulai_ekskul') ? ' has-error' : '' }}" >
			{!! Form::label('mulai_ekskul', ' ', ['class'=>'control-label']) !!}
			<div class="col-md-4">
				{!! Form::text('mulai_ekskul', null, ['id'=>'mulai','class'=>'form-control timepicker']) !!}
				{!! $errors->first('mulai_ekskul', '<p class="help-block">:message</p>') !!}
				<label id="form1" for="mulai">Mulai Ekskul</label>
			</div>
		</div>

		<div class="md-form{{ $errors->has('selesai_ekskul') ? ' has-error' : '' }}" >
			{!! Form::label('selesai_ekskul', ' ', ['class'=>'control-label']) !!}
			<div class="col-md-4">
				{!! Form::text('selesai_ekskul', null, ['id'=>'selesai','class'=>'form-control timepicker']) !!}
				{!! $errors->first('selesai_ekskul', '<p class="help-block">:message</p>') !!}
				<label id="form2" for="selesai">Selesai Ekskul</label>
			</div>
		</div>


		<div class="md-form{{ $errors->has('hari_ekskul') ? ' has-error' : '' }}" >
			<div class="col-md-4">
              {!! Form::select('hari_ekskul', ['Minggu'=>'Minggu','Sabtu'=>'Sabtu','Jumat'=>'Jumat','Kamis'=>'Kamis','Rabu'=>'Rabu','Selasa'=>'Selasa','Senin'=>'Senin'], null, ['class'=>'mdb-select','placeholder' => 'Pilih Hari']) !!}
				{!! $errors->first('hari_ekskul', '<p class="help-block">:message</p>') !!}
			</div>
		</div>
</div>

<div class="row">
		<div class="md-form{{ $errors->has('keterangan_ekskul') ? ' has-error' : '' }}" >
			{!! Form::label('keterangan_ekskul', ' ', ['class'=>'control-label']) !!}
			<div class="col-md-12">
				{!! Form::textarea('keterangan_ekskul', null, ['class'=>'md-textarea']) !!}
				{!! $errors->first('keterangan_ekskul', '<p class="help-block">:message</p>') !!}
				<label id="form4">Keterangan</label>
			</div>
		</div>
</div>

		<div class="form-group">
				{!! Form::submit('Simpan', ['class'=>'btn btn-primary btn-block']) !!}
		</div>