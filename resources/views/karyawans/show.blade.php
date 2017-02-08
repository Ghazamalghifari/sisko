@extends('layouts.app')

@section('content')
	<div class="container" style="padding-top: 5%;">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
    				<h3 class="card-header primary-color white-text">Data Karyawan</h3>
   					 <div class="card-block">
					<div class="panel-body">
					
						@include('karyawans._see')
					
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
	