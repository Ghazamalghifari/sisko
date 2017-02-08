<div class="row">
		<div class="md-form{!! $errors->has('id_guru') ? 'has-error' : '' !!}">
			{!! Form::label('id_guru', ' ', ['class'=>'control-label']) !!}
			<div class="col-md-6">
				{!! Form::select('id_guru', []+App\Guru::pluck('nama_guru','id')->all(), null, ['class'=>'form-control js-selectize', 'placeholder' => 'Pilih Guru Pengajar']) !!}
				{!! $errors->first('id_guru', '<p class="help-block">:message</p>') !!}
			</div>
		</div>

		<div class="md-form{!! $errors->has('id_pelajaran') ? 'has-error' : '' !!}">
			{!! Form::label('id_pelajaran', ' ', ['class'=>'control-label']) !!}
			<div class="col-md-6">
				{!! Form::select('id_pelajaran', []+App\Pelajaran::pluck('nama_pelajaran','id')->all(), null, ['class'=>'form-control js-selectize', 'placeholder' => 'Pilih Pelajaran']) !!}
				{!! $errors->first('id_pelajaran', '<p class="help-block">:message</p>') !!}
			</div>
		</div>
</div>

<div class="row">

		<div class="md-form{{ $errors->has('mulai_ngajar') ? ' has-error' : '' }}" >
			{!! Form::label('mulai_ngajar', ' ', ['class'=>'control-label']) !!}
			<div class="col-md-4">
				{!! Form::text('mulai_ngajar', null, ['id'=>'mulai','class'=>'form-control timepicker']) !!}
				{!! $errors->first('mulai_ngajar', '<p class="help-block">:message</p>') !!}
				<label id="form1" for="mulai">Mulai Ngajar</label>
			</div>
		</div>

		<div class="md-form{{ $errors->has('selesai_ngajar') ? ' has-error' : '' }}" >
			{!! Form::label('selesai_ngajar', ' ', ['class'=>'control-label']) !!}
			<div class="col-md-4">
				{!! Form::text('selesai_ngajar', null, ['id'=>'selesai','class'=>'form-control timepicker']) !!}
				{!! $errors->first('selesai_ngajar', '<p class="help-block">:message</p>') !!}
				<label id="form2" for="selesai">Selesai Ngajar</label>
			</div>
		</div>


		<div class="md-form{{ $errors->has('hari_ngajar') ? ' has-error' : '' }}" >
			<div class="col-md-4">
              {!! Form::select('hari_ngajar', ['Minggu'=>'Minggu','Sabtu'=>'Sabtu','Jumat'=>'Jumat','Kamis'=>'Kamis','Rabu'=>'Rabu','Selasa'=>'Selasa','Senin'=>'Senin'], null, ['class'=>'mdb-select','placeholder' => 'Pilih Hari']) !!}
				{!! $errors->first('hari_ngajar', '<p class="help-block">:message</p>') !!}
			</div>
		</div>
</div>

<div class="row">
		<div class="md-form{{ $errors->has('keterangan_ngajar') ? ' has-error' : '' }}" >
			{!! Form::label('keterangan_ngajar', ' ', ['class'=>'control-label']) !!}
			<div class="col-md-12">
				{!! Form::textarea('keterangan_ngajar', null, ['class'=>'md-textarea']) !!}
				{!! $errors->first('keterangan_ngajar', '<p class="help-block">:message</p>') !!}
				<label id="form4">Keterangan</label>
			</div>
		</div>
</div>

		<div class="form-group">
				{!! Form::submit('Simpan', ['class'=>'btn btn-primary btn-block']) !!}
		</div>