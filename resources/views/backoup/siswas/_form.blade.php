		<div class="row">
			<div class="col-md-12">
				<div class="card">
    				<h3 class="card-header primary-color white-text">Biodata Siswa</h3>
   					 <div class="card-block">

					<div class="panel-body">

<div class="md-form{{ $errors->has('nama_siswa') ? ' has-error' : '' }}" >
	{!! Form::label('nama_siswa', ' ', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-6">
		{!! Form::text('nama_siswa', null, ['class'=>'form-control']) !!}
		{!! $errors->first('nama_siswa', '<p class="help-block">:message</p>') !!}
            <label for="form2">Nama Siswa</label>
	</div>
</div>

<div class="md-form{{ $errors->has('nomor_induk') ? ' has-error' : '' }}" >
	{!! Form::label('nomor_induk', ' ', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-6">
		{!! Form::number('nomor_induk', null, ['class'=>'form-control']) !!}
		{!! $errors->first('nomor_induk', '<p class="help-block">:message</p>') !!}
            <label for="form2">Nomor Induk</label>
	</div>
</div>

<div class="md-form{{ $errors->has('tanggal_lahir') ? ' has-error' : '' }}" >
	{!! Form::label('tanggal_lahir', ' ', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-6">
		{!! Form::text('tanggal_lahir', null, ['class'=>'form-control datepicker']) !!}
		{!! $errors->first('tanggal_lahir', '<p class="help-block">:message</p>') !!}
            <label for="form2">Tanggal Lahir Siswa</label>
	</div>
</div>


<div class="form-group{{ $errors->has('agama') ? ' has-error' : '' }}" >
            <label >Jenis Kelamin</label>
	<div class="col-md-6">
		{!! Form::select('jenis_kelamin', ['Laki-Laki'=>'Laki-Laki','Perempuan'=>'Perempuan'], null, ['class'=>'form-control js-selectize', 'placeholder' => 'Pilih Jenis Kelamin'
				]) !!}
		{!! $errors->first('jenis_kelamin', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="md-form{{ $errors->has('tempat_lahir') ? ' has-error' : '' }}" >
	{!! Form::label('tempat_lahir', ' ', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-6">
		{!! Form::text('tempat_lahir', null, ['class'=>'form-control']) !!}
		{!! $errors->first('tempat_lahir', '<p class="help-block">:message</p>') !!}
            <label for="form2">Tempat Lahir Siswa</label>
	</div>
</div>

<div class="form-group{{ $errors->has('agama') ? ' has-error' : '' }}" >
            <label >Agama</label>
	<div class="col-md-6">
		{!! Form::select('agama', ['Islam'=>'Islam','Kristen'=>'Kristen'], null, ['class'=>'form-control js-selectize', 'placeholder' => 'Pilih Agama'
				]) !!}
		{!! $errors->first('agama', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="md-form{{ $errors->has('pendidikan_sebelumnya') ? ' has-error' : '' }}" >
	{!! Form::label('pendidikan_sebelumnya', ' ', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-6">
		{!! Form::text('pendidikan_sebelumnya', null, ['class'=>'form-control']) !!}
		{!! $errors->first('pendidikan_sebelumnya', '<p class="help-block">:message</p>') !!}
            <label for="form2">Pendidikan Sebelumnya</label>
	</div>
</div>

<div class="md-form{{ $errors->has('alamat_siswa') ? ' has-error' : '' }}" >
	{!! Form::label('alamat_siswa', ' ', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-6">
		{!! Form::text('alamat_siswa', null, ['class'=>'form-control']) !!}
		{!! $errors->first('alamat_siswa', '<p class="help-block">:message</p>') !!}
            <label for="form2">Alamat Siswa</label>
	</div>
</div>



					</div>
				</div>
			</div>
		</div>
	</div>

		<div class="row">
			<div class="col-md-12">
				<div class="card">
    				<h3 class="card-header primary-color white-text">Biodata Orang Tua</h3>
   					 <div class="card-block">

					<div class="panel-body">
<div class="col-md-2"> </div>
<div class="col-md-10">       Nama Orang Tua :  </div>	
<div class="md-form{{ $errors->has('nama_ayah') ? ' has-error' : '' }}" >
	{!! Form::label('nama_ayah', ' ', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-6">
		{!! Form::text('nama_ayah', null, ['class'=>'form-control']) !!}
		{!! $errors->first('nama_ayah', '<p class="help-block">:message</p>') !!}
            <label for="form2">Nama Ayah</label>
	</div>
</div>

<div class="md-form{{ $errors->has('nama_ibu') ? ' has-error' : '' }}" >
	{!! Form::label('nama_ibu', ' ', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-6">
		{!! Form::text('nama_ibu', null, ['class'=>'form-control']) !!}
		{!! $errors->first('nama_ibu', '<p class="help-block">:message</p>') !!}
            <label for="form2">Nama Ibu</label>
	</div>
</div>


<div class="col-md-12">       Pekerjaan Orang Tua :  </div>	<hr><br><br>
 <div class="md-form{{$errors->has('pekerjaan_ayah') ? ' has-error' : '' }}" >  
    {!!Form::label('pekerjaan_ayah', ' ', ['class'=>'col-md-2 control-label']) !!}
<div class="col-md-6">        
 {!! Form::text('pekerjaan_ayah', null, ['class'=>'form-control']) !!}  
        {!! $errors->first('pekerjaan_ayah', '<p class="help-block">:message</p>') !!} 
      <label for="form2">Pekerjaan Ayah</label> 
</div> 
</div>

<div class="md-form{{ $errors->has('pekerjaan_ibu') ? ' has-error' : '' }}" >
	{!! Form::label('pekerjaan_ibu', ' ', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-6">
		{!! Form::text('pekerjaan_ibu', null, ['class'=>'form-control']) !!}
		{!! $errors->first('pekerjaan_ibu', '<p class="help-block">:message</p>') !!}
            <label for="form2">Pekerjaan Ibu</label>
	</div>
</div>


<div class="col-md-2"> </div>
<div class="col-md-10">       Alamat Orang Tua : </div>	

<div class="md-form{{$errors->has('alamat_ayah') ? ' has-error' : '' }}" >   
	<div class="col-md-6">       
	  {!! Form::textarea('alamat_ayah', null, ['class'=>'md-textarea']) !!}   
	  {!! $errors->first('alamat_ayah', '<p class="help-block">:message</p>') !!}    
	   <label for="form2">Alamat Ayah</label>    
	</div> 
</div>

<div class="md-form{{ $errors->has('alamat_ibu') ? ' has-error' : '' }}">
    <div class="col-md-6">
		{!! Form::textarea('alamat_ibu', null, ['class'=>'md-textarea']) !!}
		{!! $errors->first('alamat_ibu', '<p class="help-block">:message</p>') !!}
            <label for="form8">Alamat Ibu</label>
	</div>
</div>
					</div>
				</div>
			</div>
		</div>
	</div>



{!! Form::hidden('id_kelas', $value = $id_kelas, ['class'=>'form-control']) !!}
<div class="form-group">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary btn-block']) !!}
</div>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>


