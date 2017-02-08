<?php $__env->startSection('content'); ?>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
    				<h3 class="card-header primary-color white-text"><center>Tambah Peminjam Buku</center></h3>
   					 <div class="card-block">

						<?php echo Form::open(['url' => route('pinjams.store'), 'method' => 'post', 'class' => 'form-horizontal']); ?>

						<?php echo $__env->make('pinjams._form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
						<?php echo Form::close(); ?>

					</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script type="text/javascript">
        $("#id_siswa").change(function(){
            var siswa = $('#id_siswa').val();

                        $.post('<?php echo e(url('/ajax')); ?>',
                        {
                            '_token': $('meta[name=csrf-token]').attr('content'),
                            siswa:siswa },function(data){
                                $("#nama_siswa").val(data);
                            });
                    });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>