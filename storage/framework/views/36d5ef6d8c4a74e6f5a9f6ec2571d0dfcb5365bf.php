<?php $__env->startSection('content'); ?>
	<div class="container"  style="margin-top:5%;">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
    				<h3 class="card-header primary-color white-text">Tambah Jadwal Les</h3>
   					 <div class="card-block">
        

						<?php echo Form::open(['url' => route('jless.store'), 'method' => 'post', 'class' => 'form-horizontal']); ?>

						<?php echo $__env->make('jless._form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
						<?php echo Form::close(); ?>

					</div>

				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script type="text/javascript">
        $("#id_les").change(function(){
            var les = $('#id_les').val();

                        $.post('<?php echo e(url('/ajax1')); ?>',
                        {
                            '_token': $('meta[name=csrf-token]').attr('content'),
                            les:les },function(data){
                                $("#nama_pengajar").val(data);
                            });
                    });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>