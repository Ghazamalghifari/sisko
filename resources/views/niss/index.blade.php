@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
    				<h3 class="card-header primary-color white-text">NIS (Nomor Induk Siswa)</h3>
   					 <div class="card-block">
						<p> <a class="btn btn-primary" href="http://nisn.data.kemdikbud.go.id/page/data" target="blank">NISN (Nomor Induk Siswa Nasional)</a> </p>	
						<div class="table-responsive" >
							{!! $html->table(['class'=>'table table-striped']) !!}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('scripts')
	{!! $html->scripts() !!}
@endsection