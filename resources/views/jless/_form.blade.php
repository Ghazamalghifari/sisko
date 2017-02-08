<div class="row">
		<div class="md-form{!! $errors->has('id_les') ? 'has-error' : '' !!}">
			{!! Form::label('id_les', ' ', ['class'=>'control-label']) !!}
			<div class="col-md-6">
				{!! Form::select('id_les', []+App\Les::pluck('mata_pelajaran','id')->all(), null, ['class'=>'form-control js-selectize', 'placeholder' => 'Pilih Pelajaran']) !!}
				{!! $errors->first('id_les', '<p class="help-block">:message</p>') !!}
			</div>
		</div>

		<div class="md-form{{ $errors->has('nama_pengajar') ? ' has-error' : '' }}" >
			{!! Form::label('nama_pengajar', ' ', ['class'=>'control-label']) !!}
			<div class="col-md-6">
				{!! Form::text('nama_pengajar', $value='Nama Pengajar', ['class'=>'form-control','readonly']) !!}
				{!! $errors->first('nama_pengajar', '<p class="help-block">:message</p>') !!}
			</div>
		</div>
</div>

<div class="row">

		<div class="md-form{{ $errors->has('mulai_les') ? ' has-error' : '' }}" >
			{!! Form::label('mulai_les', ' ', ['class'=>'control-label']) !!}
			<div class="col-md-4">
				{!! Form::text('mulai_les', null, ['id'=>'mulai','class'=>'form-control timepicker']) !!}
				{!! $errors->first('mulai_les', '<p class="help-block">:message</p>') !!}
				<label id="form1" for="mulai">Mulai Les</label>
			</div>
		</div>

		<div class="md-form{{ $errors->has('selesai_les') ? ' has-error' : '' }}" >
			{!! Form::label('selesai_les', ' ', ['class'=>'control-label']) !!}
			<div class="col-md-4">
				{!! Form::text('selesai_les', null, ['id'=>'selesai','class'=>'form-control timepicker']) !!}
				{!! $errors->first('selesai_les', '<p class="help-block">:message</p>') !!}
				<label id="form2" for="selesai">Selesai Les</label>
			</div>
		</div>


		<div class="md-form{{ $errors->has('hari_les') ? ' has-error' : '' }}" >
			<div class="col-md-4">
              {!! Form::select('hari_les', ['Minggu'=>'Minggu','Sabtu'=>'Sabtu','Jumat'=>'Jumat','Kamis'=>'Kamis','Rabu'=>'Rabu','Selasa'=>'Selasa','Senin'=>'Senin'], null, ['class'=>'mdb-select','placeholder' => 'Pilih Hari']) !!}
				{!! $errors->first('hari_les', '<p class="help-block">:message</p>') !!}
			</div>
		</div>
</div>

<div class="row">
		<div class="md-form{{ $errors->has('keterangan_les') ? ' has-error' : '' }}" >
			{!! Form::label('keterangan_les', ' ', ['class'=>'control-label']) !!}
			<div class="col-md-12">
				{!! Form::textarea('keterangan_les', null, ['class'=>'md-textarea']) !!}
				{!! $errors->first('keterangan_les', '<p class="help-block">:message</p>') !!}
				<label id="form4">Keterangan</label>
			</div>
		</div>
</div>

		<div class="form-group">
				{!! Form::submit('Simpan', ['class'=>'btn btn-primary btn-block']) !!}
		</div>