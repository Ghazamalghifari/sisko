@extends('layouts.app')

@section('content')
	<div class="container"  style="margin-top:5%;">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
    				<h3 class="card-header primary-color white-text">Tambah Jadwal Les</h3>
   					 <div class="card-block">
        

						{!! Form::open(['url' => route('jless.store'), 'method' => 'post', 'class' => 'form-horizontal']) !!}
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