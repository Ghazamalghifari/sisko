@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
    				<h3 class="card-header primary-color white-text">Siswa Peminjam Buku Perpustakaan ({{ $nama_buku}})</h3>
   					 <div class="card-block">
<?php if ($stok == 0): ?>
	
		<?php else: ?>
						<p> <a class="btn btn-primary" href="{{ url('/pinjams/create') }}/{{ $id }}">Tambah</a> </p>	
						<div class="table-responsive" >
<?php endif ?>
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