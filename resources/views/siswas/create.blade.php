@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
    				<h3 class="card-header primary-color white-text"><center>Tambah Siswa</center></h3><br>

						{!! Form::open(['url' => route('siswas.store'), 'method' => 'post', 'class' => 'form-horizontal']) !!}
						@include('siswas._form')
						{!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection