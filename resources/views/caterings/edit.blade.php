@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
    				<h3 class="card-header primary-color white-text">Pengubahan Catering</h3>
   					 <div class="card-block">

					<div class="panel-body">
						{!! Form::model($catering, ['url' => route('caterings.update', $catering->id), 'method' => 'put', 'files'=>'true', 'class'=>'form-horizontal']) !!}
						@include('caterings._form')
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
	