@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
    				<h3 class="card-header primary-color white-text">Pengubahan Ekskul</h3>
   					 <div class="card-block">

					<div class="panel-body">
						{!! Form::model($ekskul, ['url' => route('ekskuls.update', $ekskul->id), 'method' => 'put', 'files'=>'true', 'class'=>'form-horizontal']) !!}
						@include('ekskuls._form')
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
	