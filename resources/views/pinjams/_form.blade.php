		
          <div class="md-form{!! $errors->has('id_siswa') ? 'has-error' : '' !!}">
            {!! Form::label('id_siswa', ' ', ['class'=>'col-md-2 control-label']) !!}
            <div class="col-md-6">
              {!! Form::select('id_siswa', [''=>'']+App\Siswa::pluck('nomor_induk','id')->all(), null, ['class'=>'js-selectize','placeholder' => 'Nomor Induk Siswa']) !!}
              {!! $errors->first('id_siswa', '<p class="help-block">:message</p>') !!}
            </div>
          </div>

		<div class="md-form{{ $errors->has('nama_siswa') ? ' has-error' : '' }}" >
			{!! Form::label('nama_siswa', ' ', ['class'=>'col-md-2 control-label']) !!}
			<div class="col-md-6">
				{!! Form::text('nama_siswa', null, ['class'=>'form-control','readonly']) !!}
				{!! $errors->first('nama_siswa', '<p class="help-block">:message</p>') !!}
			</div>
		</div>

{!! Form::hidden('id_buku', $value = $id_buku, ['class'=>'form-control']) !!}
{!! Form::hidden('minjam', $value = 1, ['class'=>'form-control']) !!}
		<div class="form-group">
				{!! Form::submit('Simpan', ['class'=>'btn btn-primary btn-block']) !!}
		</div>
