@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
    				<h3 class="card-header primary-color white-text"><center>Tambah Peminjam Buku</center></h3>
   					 <div class="card-block">

						{!! Form::open(['url' => route('pinjams.store'), 'method' => 'post', 'class' => 'form-horizontal']) !!}
						@include('pinjams._form')
						{!! Form::close() !!}
					</div>
			</div>
		</div>
	</div>
@endsection
@section('scripts')
    <script type="text/javascript">
        $("#id_siswa").change(function(){
            var siswa = $('#id_siswa').val();

                        $.post('{{ url('/ajax') }}',
                        {
                            '_token': $('meta[name=csrf-token]').attr('content'),
                            siswa:siswa },function(data){
                                $("#nama_siswa").val(data);
                            });
                    });
    </script>
@endsection