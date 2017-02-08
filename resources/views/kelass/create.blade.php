@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
				<div class="card">
    				<h3 class="card-header primary-color white-text">Tambah Kelas</h3>
   					 <div class="card-block">

					<div class="panel-body">
						{!! Form::open(['url' => route('kelass.store'), 'method' => 'post', 'class' => 'form-horizontal']) !!}
						@include('kelass._form')
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection