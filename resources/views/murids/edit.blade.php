@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
    				<h3 class="card-header primary-color white-text">Pengubahan Data Siswa</h3>
   					 <div class="card-block">

					<div class="panel-body">
						
						{!! Form::model($murid, ['url' => route('murids.update', $murid->id), 'method' => 'put', 'files'=>'true', 'class'=>'form-horizontal']) !!}
						@include('murids._form')
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
	