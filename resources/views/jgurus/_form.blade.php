<div class="row">
		<div class="md-form{{ $errors->has('nama_jadwal') ? ' has-error' : '' }}" >
			{!! Form::label('nama_jadwal', ' ', ['class'=>'control-label']) !!}
			<div class="col-md-3">
				{!! Form::text('nama_jadwal', null, ['class'=>'form-control']) !!}
				{!! $errors->first('nama_jadwal', '<p class="help-block">:message</p>') !!}
				<label id="form1">Nama Jadwal</label>
			</div>
		</div>

		<div class="md-form{{ $errors->has('mulai_guru') ? ' has-error' : '' }}" >
			{!! Form::label('mulai_guru', ' ', ['class'=>'control-label']) !!}
			<div class="col-md-3">
				{!! Form::text('mulai_guru', null, ['id'=>'mulai','class'=>'form-control timepicker']) !!}
				{!! $errors->first('mulai_guru', '<p class="help-block">:message</p>') !!}
				<label id="form1" for="mulai">Mulai</label>
			</div>
		</div>

		<div class="md-form{{ $errors->has('selesai_guru') ? ' has-error' : '' }}" >
			{!! Form::label('selesai_guru', ' ', ['class'=>'control-label']) !!}
			<div class="col-md-3">
				{!! Form::text('selesai_guru', null, ['id'=>'selesai','class'=>'form-control timepicker']) !!}
				{!! $errors->first('selesai_guru', '<p class="help-block">:message</p>') !!}
				<label id="form2" for="selesai">Selesai</label>
			</div>
		</div>


		<div class="md-form{{ $errors->has('hari_guru') ? ' has-error' : '' }}" >
			<div class="col-md-3">
              {!! Form::select('hari_guru', ['Minggu'=>'Minggu','Sabtu'=>'Sabtu','Jumat'=>'Jumat','Kamis'=>'Kamis','Rabu'=>'Rabu','Selasa'=>'Selasa','Senin'=>'Senin'], null, ['class'=>'mdb-select','placeholder' => 'Pilih Hari']) !!}
				{!! $errors->first('hari_guru', '<p class="help-block">:message</p>') !!}
			</div>
		</div>
</div>

<div class="row">
		<div class="md-form{{ $errors->has('keterangan_guru') ? ' has-error' : '' }}" >
			{!! Form::label('keterangan_guru', ' ', ['class'=>'control-label']) !!}
			<div class="col-md-12">
				{!! Form::textarea('keterangan_guru', null, ['class'=>'md-textarea']) !!}
				{!! $errors->first('keterangan_guru', '<p class="help-block">:message</p>') !!}
				<label id="form4">Keterangan</label>
			</div>
		</div>
</div>

		<div class="form-group">
				{!! Form::submit('Simpan', ['class'=>'btn btn-primary btn-block']) !!}
		</div>