@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
    				<h3 class="card-header primary-color white-text">Tambah Cicilan Kantin</h3>
   					 <div class="card-block">

					<div class="panel-body">
						{!! Form::open(['url' => route('cicilans.store'), 'method' => 'post', 'class' => 'form-horizontal']) !!}
						@include('cicilans._form')
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection