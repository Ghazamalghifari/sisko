@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
    				<h3 class="card-header primary-color white-text">Pengubahan Jadwal Ngajar</h3>
   					 <div class="card-block">

					<div class="panel-body">
						{!! Form::model($jngajar, ['url' => route('jngajars.update', $jngajar->id), 'method' => 'put', 'files'=>'true', 'class'=>'form-horizontal']) !!}
						@include('jngajars._form')
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
	