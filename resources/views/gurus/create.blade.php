@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
    				<h3 class="card-header primary-color white-text">Tambah Data Guru</h3>
   					 <div class="card-block">

					<div class="panel-body">
						{!! Form::open(['url' => route('gurus.store'), 'method' => 'post', 'class' => 'form-horizontal']) !!}
						@include('gurus._form')
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection