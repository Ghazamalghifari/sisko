@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
    				<h3 class="card-header primary-color white-text">Pengubahan Jadwal Les</h3>
   					 <div class="card-block">

					<div class="panel-body">
						{!! Form::model($jles, ['url' => route('jless.update', $jles->id), 'method' => 'put', 'files'=>'true', 'class'=>'form-horizontal']) !!}
						@include('jless._form')
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
	
@section('scripts')
    <script type="text/javascript">
        $("#id_les").change(function(){
            var les = $('#id_les').val();

                        $.post('{{ url('/ajax1') }}',
                        {
                            '_token': $('meta[name=csrf-token]').attr('content'),
                            les:les },function(data){
                                $("#nama_pengajar").val(data);
                            });
                    });
    </script>
@endsection