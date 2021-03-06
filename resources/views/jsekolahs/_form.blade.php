<div class="row">
		<div class="md-form{{ $errors->has('nama_jadwal') ? ' has-error' : '' }}" >
			{!! Form::label('nama_jadwal', ' ', ['class'=>'control-label']) !!}
			<div class="col-md-3">
				{!! Form::text('nama_jadwal', null, ['class'=>'form-control']) !!}
				{!! $errors->first('nama_jadwal', '<p class="help-block">:message</p>') !!}
				<label id="form1">Nama Jadwal</label>
			</div>
		</div>

		<div class="md-form{{ $errors->has('mulai') ? ' has-error' : '' }}" >
			{!! Form::label('mulai', ' ', ['class'=>'control-label']) !!}
			<div class="col-md-3">
				{!! Form::text('mulai', null, ['id'=>'mulai','class'=>'form-control timepicker']) !!}
				{!! $errors->first('mulai', '<p class="help-block">:message</p>') !!}
				<label id="form1" for="mulai">Mulai</label>
			</div>
		</div>

		<div class="md-form{{ $errors->has('selesai') ? ' has-error' : '' }}" >
			{!! Form::label('selesai', ' ', ['class'=>'control-label']) !!}
			<div class="col-md-3">
				{!! Form::text('selesai', null, ['id'=>'selesai','class'=>'form-control timepicker']) !!}
				{!! $errors->first('selesai', '<p class="help-block">:message</p>') !!}
				<label id="form2" for="selesai">Selesai</label>
			</div>
		</div>


		<div class="md-form{{ $errors->has('hari') ? ' has-error' : '' }}" >
			<div class="col-md-3">
              {!! Form::select('hari', ['Minggu'=>'Minggu','Sabtu'=>'Sabtu','Jumat'=>'Jumat','Kamis'=>'Kamis','Rabu'=>'Rabu','Selasa'=>'Selasa','Senin'=>'Senin'], null, ['class'=>'mdb-select','placeholder' => 'Pilih Hari']) !!}
				{!! $errors->first('hari', '<p class="help-block">:message</p>') !!}
			</div>
		</div>
</div>

<div class="row">
		<div class="md-form{{ $errors->has('keterangan') ? ' has-error' : '' }}" >
			{!! Form::label('keterangan', ' ', ['class'=>'control-label']) !!}
			<div class="col-md-12">
				{!! Form::textarea('keterangan', null, ['class'=>'md-textarea']) !!}
				{!! $errors->first('keterangan', '<p class="help-block">:message</p>') !!}
				<label id="form4">Keterangan</label>
			</div>
		</div>
</div>

		<div class="form-group">
				{!! Form::submit('Simpan', ['class'=>'btn btn-primary btn-block']) !!}
		</div>