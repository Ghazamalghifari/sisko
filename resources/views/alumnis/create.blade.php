@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
    				<h3 class="card-header primary-color white-text">Tambah Alumni</h3>
   					 <div class="card-block">
        

						{!! Form::open(['url' => route('alumnis.store'), 'method' => 'post', 'class' => 'form-horizontal']) !!}
						@include('alumnis._form')
						{!! Form::close() !!}
					</div>

				</div>
			</div>
		</div>
	</div>
@endsection