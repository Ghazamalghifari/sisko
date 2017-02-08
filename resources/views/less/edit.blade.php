@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
    				<h3 class="card-header primary-color white-text">Pengubahan Les</h3>
   					 <div class="card-block">

					<div class="panel-body">
						{!! Form::model($les, ['url' => route('less.update', $les->id), 'method' => 'put', 'files'=>'true', 'class'=>'form-horizontal']) !!}
						@include('less._form')
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
	