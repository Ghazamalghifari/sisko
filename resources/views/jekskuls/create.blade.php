@extends('layouts.app')

@section('content')
	<div class="container"  style="margin-top:5%;">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
    				<h3 class="card-header primary-color white-text">Tambah Jadwal Ekskul</h3>
   					 <div class="card-block">
        

						{!! Form::open(['url' => route('jekskuls.store'), 'method' => 'post', 'class' => 'form-horizontal']) !!}
						@include('jekskuls._form')
						{!! Form::close() !!}
					</div>

				</div>
			</div>
		</div>
	</div>
@endsection
